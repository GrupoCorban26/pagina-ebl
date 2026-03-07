<?php
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);

function handleException($e) {
    http_response_code(500);
    echo json_encode([
        "status" => "error", 
        "message" => "Error del Servidor: " . $e->getMessage(),
        "file" => $e->getFile(),
        "line" => $e->getLine()
    ]);
    exit;
}
set_exception_handler('handleException');
set_error_handler(function($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

// Permitir solicitudes solo por POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status" => "error", "message" => "Método no permitido."]);
    exit;
}

// Recoger y sanitizar datos usando filter_input para mayor seguridad
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
$correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
$contacto = filter_input(INPUT_POST, 'contacto', FILTER_SANITIZE_SPECIAL_CHARS);
$asunto = filter_input(INPUT_POST, 'asunto', FILTER_SANITIZE_SPECIAL_CHARS);
$mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_SPECIAL_CHARS);

// Validar que no haya campos vacíos
if (empty($nombre) || empty($correo) || empty($contacto) || empty($asunto) || empty($mensaje)) {
    http_response_code(400); // Bad Request
    echo json_encode(["status" => "error", "message" => "Por favor, complete todos los campos requeridos con información válida."]);
    exit;
}

require_once dirname(__DIR__) . '/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ==========================================
// 0. VERIFICACIÓN DE GOOGLE reCAPTCHA v2
// ==========================================
$recaptcha_secret = CAPTCHAT_SECRETA; // Definido en config.php / .env
$recaptcha_response = filter_input(INPUT_POST, 'g-recaptcha-response', FILTER_SANITIZE_SPECIAL_CHARS);

if (empty($recaptcha_response)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Por favor, marca la casilla de seguridad (No soy un robot)."]);
    exit;
}

// Llamada cURL a la API de Google para verificar el token (para burlar restricciones allow_url_fopen en cPanel)
$verify_url = "https://www.google.com/recaptcha/api/siteverify";
$data = ['secret' => $recaptcha_secret, 'response' => $recaptcha_response];

$ch = curl_init($verify_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_TIMEOUT, 5); // Fallar rápido en 5 segundos si Google no responde
$verify_response = curl_exec($ch);

if (curl_errno($ch)) {
    curl_close($ch);
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Ocurrió un error conectando con el servicio de seguridad. Refresque e intente nuevamente."]);
    exit;
}
curl_close($ch);

$response_data = json_decode($verify_response);

if (!$response_data->success) {
    http_response_code(403); // Forbidden
    echo json_encode(["status" => "error", "message" => "Validación de Captcha fallida. Intente de nuevo."]);
    exit;
}

// ==========================================
// 1. CORREO HACIA LA EMPRESA (EBL GROUP)
// ==========================================
$empresa_email = SMTP_USER; // Definido en config.php / .env
$asunto_empresa = "Web Lead [" . $asunto . "] - " . $nombre;

// Cabeceras para el correo que recibe la empresa
$headers_empresa = "MIME-Version: 1.0" . "\r\n";
$headers_empresa .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers_empresa .= "From: EBL Web <no-reply@eblgroup.pe>" . "\r\n"; // El remitente debe ser del mismo dominio para evitar SPAM
$headers_empresa .= "Reply-To: " . $correo . "\r\n";

$cuerpo_empresa = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { border: 1px solid #ddd; padding: 20px; border-radius: 5px; max-width: 600px; }
        .header { background-color: #0b1a30; color: white; padding: 10px; text-align: center; font-weight: bold; border-radius: 3px; }
        .data-row { margin-bottom: 10px; }
        .label { font-weight: bold; color: #cc0000; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>NUEVA SOLICITUD DE CONTACTO</div>
        <p>Has recibido un nuevo mensaje desde el formulario web de EBL Group:</p>
        <div class='data-row'><span class='label'>Nombre/Empresa:</span> $nombre</div>
        <div class='data-row'><span class='label'>Asunto:</span> $asunto</div>
        <div class='data-row'><span class='label'>Correo Electrónico:</span> $correo</div>
        <div class='data-row'><span class='label'>Teléfono de Contacto:</span> $contacto</div>
        <div class='label'>Mensaje:</div>
        <div style='background-color: #f9f9f9; padding: 10px; border-left: 3px solid #cc0000; margin-top: 5px;'>
            " . nl2br($mensaje) . "
        </div>
    </div>
</body>
</html>
";

// ==========================================
// 2. CORREO DE CONFIRMACIÓN HACIA EL CLIENTE
// ==========================================
$asunto_cliente = "Tu mensaje ha sido recibido - EBL Grupo Logístico";

// Cabeceras para el correo automático al cliente
$headers_cliente = "MIME-Version: 1.0" . "\r\n";
$headers_cliente .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers_cliente .= "From: EBL Grupo Logístico <consultas@eblgroup.pe>" . "\r\n";

$cuerpo_cliente = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; border: 1px solid #eee; border-top: 4px solid #cc0000; padding: 20px; }
        .footer { font-size: 12px; color: #777; margin-top: 20px; border-top: 1px solid #eee; padding-top: 10px; }
    </style>
</head>
<body>
    <div class='container'>
        <h2>¡Hola, $nombre!</h2>
        <p>Hemos recibido correctamente tu solicitud de contacto a través de nuestra página web.</p>
        <p>En este momento, uno de nuestros especialistas logísticos está revisando tu información y se pondrá en contacto contigo a la brevedad posible al correo <strong>$correo</strong> o al teléfono <strong>$contacto</strong>.</p>
        <p>Gracias por confiar en EBL Grupo Logístico para potenciar tu cadena de suministro.</p>
        <br>
        <p>Atentamente,<br><strong>El Equipo de EBL Group Peru</strong></p>
        <div class='footer'>
            Este es un mensaje automático, por favor no responda a este correo.<br>
            Av. Elmer Faucett S/N Centro Aéreo Comercial (Aduana Aérea del Callao) Modulo E, 505 Callao.
        </div>
    </div>
</body>
</html>
";

// ==========================================
// EJecución de Envíos con PHPMailer
// ==========================================
$mail = new PHPMailer(true);

try {
    // Configuración del Servidor SMTP (Con los datos del .env)
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = (SMTP_PORT == 465) ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'UTF-8';
    $mail->Timeout    = 10; // 10 segundos máximo para intentar conectar (evita quedarse "Pending" eternamente)

    // 1. Enviar el correo a la empresa (Notificación del Lead)
    $mail->setFrom(SMTP_USER, 'EBL Web System');
    $mail->addAddress(SMTP_USER, 'EBL Consultas'); // Para quién (la empresa)
    $mail->addReplyTo($correo, $nombre); // Si la empresa hace "Responder", le responde al cliente directamente

    $mail->isHTML(true);
    $mail->Subject = $asunto_empresa;
    $mail->Body    = $cuerpo_empresa;

    $mail->send();

    // 2. Enviar correo de Confirmación Automática al Cliente
    $mail->clearAllRecipients(); // Limpiar el destino anterior (la empresa)
    $mail->clearReplyTos();

    $mail->setFrom(SMTP_USER, 'EBL Grupo Logístico');
    $mail->addAddress($correo, $nombre); // Destino: el cliente

    $mail->Subject = $asunto_cliente;
    $mail->Body    = $cuerpo_cliente;

    $mail->send();
    
    // Devolver éxito en JSON
    http_response_code(200);
    echo json_encode([    
        "status" => "success", 
        "message" => "¡Excelente! Tu mensaje ha sido enviado correctamente. Un experto se pondrá en contacto pronto."
    ]);
    exit;
} catch (Exception $e) {
    // Registrar error interno real en log del servidor pero mensaje amigable al usuario
    error_log("Error de Mailer: " . $mail->ErrorInfo);
    http_response_code(500); // Internal Server Error
    echo json_encode(["status" => "error", "message" => "Ocurrió un error al intentar enviar el mensaje. Por favor intente más tarde o comuníquese por teléfono."]);
}
?>

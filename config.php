<?php
// ---------------------------
// CONFIGURACIÓN GLOBAL DEL PROYECTO EBL V2
// ---------------------------

// 1. BASE DEL SERVIDOR (para includes PHP)
define('BASE_PATH', __DIR__);
define('SRC_PATH', BASE_PATH . '/src');
define('VIEW_PATH', SRC_PATH . '/view');
define('ASSETS_PATH', VIEW_PATH . '/assets');
define('IMG_PATH', SRC_PATH . '/img');
define('LANG_PATH', SRC_PATH . '/lang');
define('CSS_PATH', SRC_PATH . '/css');
define('JS_PATH', SRC_PATH . '/js');

// 2. BASE PARA NAVEGADOR (URL pública)
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$baseFolder = 'pagina-ebl'; // Cambia esto si lo mueves a carpeta principal o subdominio

if ($host === 'localhost') {
    define('BASE_URL', "http://localhost/$baseFolder");
} else {
    define('BASE_URL', "https://$host/v2_php"); // Ajustar según servidor de pruebas
}

define('CSS_URL', BASE_URL . '/src/css');
define('IMG_URL', BASE_URL . '/src/img');
define('JS_URL', BASE_URL . '/src/js');
define('ASSETS_URL', BASE_URL . '/src/view/assets');
define('SERVICIOS_URL', BASE_URL . '/src/view/servicios');

require_once __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Mantenemos constantes temporales estáticas mientras integras composer/dotenv si fuera necesario en EBL
define('SMTP_HOST', 'eblgroup.pe');
define('SMTP_USER', 'consultas@eblgroup.pe');
define('SMTP_PASS', '!y{Hs$c~R]-W.UM4');
define('SMTP_PORT', 465);
define('CAPTCHAT_SECRETA', '6Lf3GfkrAAAAAKISx8z-QQJl2c7_LZ06y8xdbhRt');

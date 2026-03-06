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
    // IMPORTANTE PARA PRODUCCIÓN:
    // detecta automáticamente el dominio en el que esté hospedado.
    define('BASE_URL', "https://$host"); 
}
define('FORM_URL', BASE_URL . '/form');
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
define('SMTP_HOST', $_ENV['SMTP_HOST']);
define('SMTP_USER', $_ENV['SMTP_USER']);
define('SMTP_PASS', $_ENV['SMTP_PASS']);
define('SMTP_PORT', $_ENV['SMTP_PORT']);
define('CAPTCHAT_SECRETA', $_ENV['CAPTCHA_SECRETA']);

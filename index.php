<?php
require_once 'config.php';

session_start();
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "es"; // idioma por defecto
}

// Cambiar idioma si se pasa por URL (ejemplo: ?lang=en)
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Carga de archivo de idioma
$langFile = __DIR__ . "/src/lang/{$_SESSION['lang']}.php";
if (file_exists($langFile)) {
    $texts = require $langFile;
} else {
    $texts = require __DIR__ . "/src/lang/es.php"; // Fallback
}

require_once 'rutas.php';

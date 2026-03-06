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

$texts = []; 
// Por ahora mantenemos el texto directo en las vistas como lo teníamos, 
// pero dejamos el arreglo vacío para evitar errores de Undefined Variable si aplicamos un lang file luego.

require_once 'rutas.php';

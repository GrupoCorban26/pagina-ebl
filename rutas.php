<?php
require_once __DIR__ . '/config.php';

$uri = $_GET['uri'] ?? '';
$uri = trim($uri, '/');
$segments = explode('/', $uri);

// Detectar idioma
if (in_array($segments[0] ?? '', ['es', 'en'])) {
    $lang = $segments[0];
    $page = $segments[1] ?? 'home';
    $subpage = $segments[2] ?? '';
} else {
    $lang = 'es'; // idioma por defecto
    $page = $segments[0] ?? 'home';
    $subpage = $segments[1] ?? '';
}

// Definir rutas
$routes = [
    'es' => [
        '' => BASE_PATH . '/src/view/app.php',
        'home' => BASE_PATH . '/src/view/app.php',
        'nosotros' => BASE_PATH . '/src/view/nosotros.php',
        'servicios' => [
            '' => BASE_PATH . '/src/view/app.php', // Por defecto
            'servicios-complementarios' => BASE_PATH . '/src/view/servicios/servicios-complementarios.php',
            'tarifas' => BASE_PATH . '/src/view/tarifas.php',
        ],
        'preguntas' => BASE_PATH . '/src/view/preguntas.php',
        'contacto' => BASE_PATH . '/src/view/contacto.php',
    ]
];

// Cargar la página correspondiente
if (isset($routes[$lang][$page])) {
    if (is_array($routes[$lang][$page])) {
        $subpageKey = $subpage ?: '';
        if (isset($routes[$lang][$page][$subpageKey])) {
            require $routes[$lang][$page][$subpageKey];
        } else {
            http_response_code(404);
            echo "Subpágina no encontrada";
        }
    } else {
        require $routes[$lang][$page];
    }
} else {
    http_response_code(404);
    echo "Página no encontrada";
}

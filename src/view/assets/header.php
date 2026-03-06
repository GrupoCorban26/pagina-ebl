<?php
$page_title = $page_title ?? 'Agencia de Carga Internacional y Aduanas | EBL Group Peru';
$meta_desc = $meta_desc ?? 'Cotiza transporte marítimo, aéreo y agenciamiento de aduanas en Perú. EBL Grupo Logístico: Especialistas en importación y exportación internacional seguros.';
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?? 'es' ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($meta_desc) ?>">
    <meta name="keywords" content="agencia de aduanas, transporte de carga internacional, forwarder peru, flete maritimo, flete aereo, importacion, exportacion, EBL Group">

    <!-- Open Graph / Redes Sociales -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= BASE_URL ?>/">
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_desc) ?>">
    <meta property="og:image" content="<?= BASE_URL ?>/src/img/OG-IMAGE.jpg"> <!-- Recomendado: crear esta imagen -->

    <!-- Twitter Cards -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="twitter:description" content="<?= htmlspecialchars($meta_desc) ?>">
    <meta property="twitter:image" content="<?= BASE_URL ?>/src/img/OG-IMAGE.jpg">

    <!-- Schema.org (SEO Local y Corporativo) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LogisticsService",
      "name": "EBL Grupo Logístico S.A.C.",
      "image": "<?= BASE_URL ?>/src/img/LOGO-PRINCIPAL.png",
      "@id": "<?= BASE_URL ?>",
      "url": "<?= BASE_URL ?>",
      "telephone": "+51 934 308 291",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Av. Elmer Faucett S/N Centro Aéreo Comercial (Aduana Aérea del Callao) Modulo E, 505",
        "addressLocality": "Callao",
        "addressRegion": "Callao",
        "postalCode": "07031",
        "addressCountry": "PE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -12.025,
        "longitude": -77.108
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "08:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/eblGrupoLogistico/",
        "https://www.instagram.com/ebl.logistico/",
        "https://www.linkedin.com/company/ebl-group/"
      ]
    }
    </script>

    <link rel="shortcut icon" href="<?= IMG_URL ?>/favicon.ico" />
    <link rel="canonical" href="<?= BASE_URL ?>/">
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS Compilado Localmente -->
    <link rel="stylesheet" href="<?= CSS_URL ?>/output.css?v=<?= time() ?>">
    <style>
        /* Glassmorphism Classes para el Menú / NavBar */
        .glass-nav {
            background: rgba(15, 38, 92, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Ocultar barra de scroll en menu movil */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 4px;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-700 bg-brand-gray flex flex-col min-h-screen">
    
    <!-- TOP BAR (Info y Redes) -->
    <div class="bg-brand-red text-white py-2 text-xs md:text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="mailto:consultas@eblgroup.pe" class="hover:text-gray-200 transition-colors flex items-center gap-2">
                    <i class="fa-solid fa-envelope"></i> consultas@eblgroup.pe
                </a>
                <span class="hidden sm:inline">|</span>
                <span class="hidden sm:inline flex items-center gap-2">
                    <i class="fa-solid fa-phone"></i> +51 934 308 291
                </span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="https://www.facebook.com/eblGrupoLogistico/" target="_blank" class="hover:text-gray-200 transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/ebl.logistico/" target="_blank" class="hover:text-gray-200 transition-colors"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UC6ERllgQXmbzpYuYAtvALZQ" target="_blank" class="hover:text-gray-200 transition-colors"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVIGATION (Glassmorphism) -->
    <nav class="glass-nav sticky top-0 z-50 w-full transition-all duration-300 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- LOGO -->
                <div class="flex-shrink-0 flex items-center p-2 rounded shadow-sm">
                    <!-- Suponiendo que las imagenes siguen en la carpeta raíz img/ -->
                    <a href="<?= BASE_URL ?>/"><img class="h-9 w-auto" src="<?= IMG_URL ?>/logo-blanco-sin-fondo.png" alt="EBL Group Logo"></a>
                </div>

                <!-- DESKTOP MENU -->
                <div class="hidden md:flex space-x-6 lg:space-x-8 items-center text-sm font-medium text-white">
                    <a href="<?= BASE_URL ?>/" class="hover:text-brand-red uppercase tracking-wide transition-colors duration-200 <?= in_array($page ?? '', ['', 'inicio', 'home']) ? 'text-brand-red' : '' ?>"><?= $texts['header_home'] ?></a>
                    <a href="<?= BASE_URL ?>/nosotros" class="hover:text-brand-red uppercase tracking-wide transition-colors duration-200 <?= in_array($page ?? '', ['nosotros', 'about-us']) ? 'text-brand-red' : '' ?>"><?= $texts['header_about'] ?></a>
                    
                    <!-- MENU DESPLEGABLE SERVICIOS -->
                    <div class="relative dropdown group">
                        <button class="hover:text-brand-red uppercase tracking-wide transition-colors duration-200 flex items-center gap-1 <?= in_array($page ?? '', ['servicios', 'services']) ? 'text-brand-red' : '' ?>">
                            <?= $texts['header_services'] ?> <i class="fa-solid fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute hidden pt-4 w-60 z-50">
                            <ul class="bg-white rounded-md shadow-lg border border-gray-100 overflow-hidden text-gray-700 py-1">
                                <li><a href="<?= BASE_URL ?>/servicios/transporte-carga-aerea" class="block px-4 py-2 hover:bg-brand-red hover:text-white transition-colors"><?= $texts['srv_air'] ?></a></li>
                                <li><a href="<?= BASE_URL ?>/servicios/transporte-carga-maritima" class="block px-4 py-2 hover:bg-brand-red hover:text-white transition-colors"><?= $texts['srv_sea'] ?></a></li>
                                <li><a href="<?= BASE_URL ?>/servicios/agenciamiento-aduana" class="block px-4 py-2 hover:bg-brand-red hover:text-white transition-colors"><?= $texts['srv_customs'] ?></a></li>
                                <li><a href="<?= BASE_URL ?>/servicios/transporte-interno" class="block px-4 py-2 hover:bg-brand-red hover:text-white transition-colors"><?= $texts['srv_inland'] ?></a></li>
                                <li><a href="<?= BASE_URL ?>/servicios/almacenaje" class="block px-4 py-2 hover:bg-brand-red hover:text-white transition-colors"><?= $texts['srv_warehouse'] ?></a></li>
                                <li><a href="<?= BASE_URL ?>/servicios/seguro-internacional" class="block px-4 py-2 hover:bg-brand-red hover:text-white transition-colors"><?= $texts['srv_insurance'] ?></a></li>
                                <!-- AQUÍ AGREGAMOS SERVICIOS COMPLEMENTARIOS COMO SOLICITASTE -->
                                <li class="border-t border-gray-100"><a href="<?= BASE_URL ?>/servicios/servicios-complementarios" class="block px-4 py-2 hover:bg-brand-red hover:text-white transition-colors font-semibold"><?= $texts['srv_complementary'] ?></a></li>
                            </ul>
                        </div>
                    </div>

                    <a href="https://trackingwebsac.andessystems.com/e7vEMAr7JAUebis=/login" target="_blank" class="hover:text-brand-red uppercase tracking-wide transition-colors duration-200"><?= $texts['header_tracking'] ?></a>
                    <a href="<?= BASE_URL ?>/tarifas" class="hover:text-brand-red uppercase tracking-wide transition-colors duration-200 <?= in_array($page ?? '', ['tarifas', 'rates']) ? 'text-brand-red' : '' ?>"><?= $texts['header_rates'] ?></a>
                    <a href="<?= BASE_URL ?>/preguntas" class="hover:text-brand-red uppercase tracking-wide transition-colors duration-200 <?= in_array($page ?? '', ['preguntas', 'faqs']) ? 'text-brand-red' : '' ?>"><?= $texts['header_faqs'] ?></a>
                    
                    <!-- BOTON CONTACTO (LLAMADA A LA ACCIÓN PRINCIPAL) -->
                    <a href="<?= BASE_URL ?>/contacto" class="bg-brand-red hover:bg-red-700 text-white px-6 py-2 rounded-full uppercase tracking-wide font-bold transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <?= $texts['header_contact'] ?>
                    </a>
                    
                    <!-- LANGUAGE SWITCHER -->
                    <div class="border-l border-gray-400 pl-4 flex items-center space-x-2">
                        <?php 
                        $current_uri = $_GET['uri'] ?? '';
                        // Remove leading slash if any
                        $current_uri = ltrim($current_uri, '/');
                        ?>
                        <a href="<?= BASE_URL ?>/<?= $current_uri ?>?lang=es" class="<?= ($_SESSION['lang'] ?? 'es') === 'es' ? 'text-brand-red font-bold' : 'text-gray-300 hover:text-white' ?> transition-colors" title="Español">ES</a>
                        <span class="text-gray-400">|</span>
                        <a href="<?= BASE_URL ?>/<?= $current_uri ?>?lang=en" class="<?= ($_SESSION['lang'] ?? 'es') === 'en' ? 'text-brand-red font-bold' : 'text-gray-300 hover:text-white' ?> transition-colors" title="English">EN</a>
                    </div>
                </div>

                <!-- MOBILE MENU BUTTON -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-white hover:text-brand-red focus:outline-none">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- MOBILE MENU PANEL -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-blue border-t border-gray-700 w-full">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-white">
                <a href="<?= BASE_URL ?>/" class="block px-3 py-2 rounded-md font-medium hover:bg-brand-red transition-colors"><?= $texts['header_home'] ?></a>
                <a href="<?= BASE_URL ?>/nosotros" class="block px-3 py-2 rounded-md font-medium hover:bg-brand-red transition-colors"><?= $texts['header_about'] ?></a>
                <!-- Accordion en movil para Servicios -->
                <div class="relative">
                    <button onclick="document.getElementById('mobile-servicios').classList.toggle('hidden')" class="w-full text-left px-3 py-2 rounded-md font-medium flex justify-between items-center hover:bg-brand-red transition-colors">
                        <?= $texts['header_services'] ?> <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div id="mobile-servicios" class="hidden pl-6 bg-brand-light">
                        <a href="#" class="block px-3 py-2 text-sm hover:text-brand-red transition-colors">Aérea</a>
                        <a href="#" class="block px-3 py-2 text-sm hover:text-brand-red transition-colors">Marítima</a>
                        <a href="#" class="block px-3 py-2 text-sm hover:text-brand-red transition-colors">Aduanas</a>
                        <a href="#" class="block px-3 py-2 text-sm hover:text-brand-red transition-colors">T. Interno</a>
                        <a href="#" class="block px-3 py-2 text-sm hover:text-brand-red transition-colors">Almacenaje</a>
                        <a href="#" class="block px-3 py-2 text-sm hover:text-brand-red transition-colors">Seguro</a>
                        <a href="<?= BASE_URL ?>/servicios/servicios-complementarios" class="block px-3 py-2 text-sm hover:text-brand-red transition-colors font-bold"><?= $texts['srv_complementary'] ?></a>
                    </div>
                </div>
                <a href="https://trackingwebsac.andessystems.com/e7vEMAr7JAUebis=/login" class="block px-3 py-2 rounded-md font-medium hover:bg-brand-red transition-colors"><?= $texts['header_tracking'] ?></a>
                <a href="<?= BASE_URL ?>/servicios/tarifas" class="block px-3 py-2 rounded-md font-medium hover:bg-brand-red transition-colors"><?= $texts['header_rates'] ?></a>
                <a href="<?= BASE_URL ?>/preguntas" class="block px-3 py-2 rounded-md font-medium hover:bg-brand-red transition-colors"><?= $texts['header_faqs'] ?></a>
                <a href="<?= BASE_URL ?>/contacto" class="block px-3 py-2 rounded-md font-bold text-brand-red bg-white mt-4 text-center uppercase"><?= $texts['header_contact'] ?></a>
                
                <!-- MOBILE LANGUAGE SWITCHER -->
                <div class="mt-4 pt-4 border-t border-gray-600 flex justify-center space-x-4">
                    <a href="<?= BASE_URL ?>/<?= ltrim($_GET['uri'] ?? '', '/') ?>?lang=es" class="<?= ($_SESSION['lang'] ?? 'es') === 'es' ? 'text-brand-red font-bold' : 'text-gray-300' ?> px-3 py-2">Español</a>
                    <a href="<?= BASE_URL ?>/<?= ltrim($_GET['uri'] ?? '', '/') ?>?lang=en" class="<?= ($_SESSION['lang'] ?? 'es') === 'en' ? 'text-brand-red font-bold' : 'text-gray-300' ?> px-3 py-2">English</a>
                </div>
            </div>
        </div>
    </nav>
    
    <script>
        // Lógica simple para el menú móvil
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
    
    <!-- WHATSAPP FLOTANTE -->
    <a href="https://api.whatsapp.com/send?phone=51934308291&text=Si%20requieres%20apoyo%20o%20asesoría%20en%20costos%20de%20flete%20y%20desaduanaje%20comunícate%20con%20nosotros,%20tu%20socio%20confiable." target="_blank" class="fixed bottom-6 right-6 z-50 bg-green-500 text-white rounded-full p-4 shadow-xl hover:bg-green-600 hover:scale-110 transition-transform duration-300 flex items-center justify-center w-14 h-14">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
    </a>

    <!-- INICIO DE CONTENIDO (Se cierra el body en footer.php) -->
    <main class="flex-grow">

<?php
// Meta tags para SEO de la pagina de Nosotros
$page_title = 'Quiénes Somos | Socios y Colaboradores | EBL Group Peru';
$meta_desc = 'Conoce al equipo corporativo y los especialistas en comercio exterior de EBL Grupo Logístico. Filosofía, Misión, Visión y nuestros colaboradores comerciales.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER HERO MODERNO -->
<div class="relative bg-brand-blue py-24 lg:py-32 flex items-center justify-center overflow-hidden">
    <!-- El fondo oscuro con opacidad e imagen de fondo (requiere que exista la imagen o pone un placeholder oscuro) -->
    <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('../img/nosotros.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-brand-blue to-transparent"></div>
    
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 uppercase tracking-tight">
            ¿Quiénes <span class="text-brand-red">Somos?</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 font-light leading-relaxed">
            Simplificando tus envíos internacionales con agenciamiento de carga y aduanas de clase mundial.
        </p>
    </div>
</div>

<!-- SECCIÓN: TEXTO QUIENES SOMOS -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
                <!-- Efecto overlay rojo sutil al hacer hover sobre la imagen -->
                <div class="absolute inset-0 bg-brand-red/10 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
                <img src="<?= IMG_URL_OLD ?>/nosotros.jpg" alt="Equipo EBL Group" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
            </div>

            <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                <p>
                    <strong class="text-brand-blue font-bold text-xl">¡Simplifica tus envíos internacionales!</strong><br>
                    En <span class="text-brand-red font-semibold">EBL Grupo Logístico</span>, nos especializamos en facilitar el proceso de importación y exportación de mercancías, brindándote soluciones logísticas eficientes y personalizadas. Nuestro equipo de expertos en aduanas y carga está aquí para hacer que tus envíos sean rápidos, seguros y libres de estrés.
                </p>
                <p>
                    <strong>¿Necesitas ayuda para navegar por los complejos reglamentos aduaneros?</strong><br>
                    ¡No te preocupes! Nos encargamos de todos los trámites y documentación necesarios para asegurar que tus productos cumplan con todas las normativas y requisitos legales. Así, puedes enfocarte en lo más importante: <em>hacer crecer tu negocio</em>.
                </p>
                <p>
                    Trabajamos en estrecha colaboración con una red global de socios y expertos en la materia aduanera lo que nos permite ofrecerte una amplia cobertura y conectividad a nivel internacional.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SECCIÓN: MISIÓN Y VISIÓN (Glassmorphism Cards) -->
<section class="py-20 bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-brand-blue uppercase tracking-wide">Nuestra Filosofía</h2>
            <div class="w-24 h-1 bg-brand-red mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <!-- Misión Card -->
            <div class="bg-white p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow border-t-4 border-brand-red transform hover:-translate-y-1 duration-300">
                <div class="w-16 h-16 bg-brand-red/10 rounded-full flex items-center justify-center mb-6">
                    <i class="fa-solid fa-bullseye text-2xl text-brand-red"></i>
                </div>
                <h3 class="text-2xl font-bold text-brand-blue mb-4">Misión</h3>
                <p class="text-gray-600 leading-relaxed">
                    Proporcionar servicios de agenciamiento de carga y aduanas de clase mundial, brindando soluciones logísticas integrales y personalizadas a nuestros clientes. Nos comprometemos a simplificar el proceso de importación y exportación, asegurando un flujo eficiente de mercancías a través de las fronteras.
                </p>
            </div>

            <!-- Visión Card -->
            <div class="bg-white p-10 rounded-2xl shadow-xl hover:shadow-2xl transition-shadow border-t-4 border-brand-blue transform hover:-translate-y-1 duration-300">
                <div class="w-16 h-16 bg-brand-blue/10 rounded-full flex items-center justify-center mb-6">
                    <i class="fa-solid fa-eye text-2xl text-brand-blue"></i>
                </div>
                <h3 class="text-2xl font-bold text-brand-blue mb-4">Visión</h3>
                <p class="text-gray-600 leading-relaxed">
                    Proporcionar servicios de agenciamiento de carga y aduanas de excelencia, brindando soluciones logísticas integrales a través de un equipo capacitado y una amplia red de socios comerciales. Nos aseguramos de contar con un flujo eficiente de mercancías a través de las fronteras.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SECCIÓN: VALORES -->
<section class="py-20 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-brand-blue uppercase tracking-wide">Nuestros Valores</h2>
            <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg">Pilares fundamentales para nuestro desarrollo en el mercado mundial.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Valor 1 -->
            <div class="group flex flex-col items-center text-center p-6">
                <!-- Reemplazo de imágenes por íconos modernos para evitar dependencias de imágenes pequeñas perdidas, aunque pueden usar las suyas si copian la carpeta img -->
                <div class="mb-6 w-20 h-20 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-brand-blue transition-colors duration-300">
                    <i class="fa-solid fa-user-tie text-3xl text-brand-blue group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Profesionalismo</h4>
                <p class="text-gray-600">Servicio de calidad, eficiente y confiable para todos nuestros clientes aduaneros.</p>
            </div>

            <!-- Valor 2 -->
            <div class="group flex flex-col items-center text-center p-6">
                <div class="mb-6 w-20 h-20 rounded-full bg-red-50 flex items-center justify-center group-hover:bg-brand-red transition-colors duration-300">
                    <i class="fa-solid fa-shield-halved text-3xl text-brand-red group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Integridad</h4>
                <p class="text-gray-600">Actuamos con honestidad, transparencia y responsabilidad en todas nuestras operaciones.</p>
            </div>

            <!-- Valor 3 -->
            <div class="group flex flex-col items-center text-center p-6">
                <div class="mb-6 w-20 h-20 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-brand-blue transition-colors duration-300">
                    <i class="fa-solid fa-users text-3xl text-brand-blue group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Orientación al Cliente</h4>
                <p class="text-gray-600">Soluciones personalizadas con el fin de entender sus necesidades y superar sus expectativas.</p>
            </div>

            <!-- Valor 4 -->
            <div class="group flex flex-col items-center text-center p-6">
                <div class="mb-6 w-20 h-20 rounded-full bg-red-50 flex items-center justify-center group-hover:bg-brand-red transition-colors duration-300">
                    <i class="fa-solid fa-lightbulb text-3xl text-brand-red group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Innovación</h4>
                <p class="text-gray-600">Buscamos mejorar constantemente adoptando nuevas tecnologías para los procesos aduaneros.</p>
            </div>

            <!-- Valor 5 -->
            <div class="group flex flex-col items-center text-center p-6">
                <div class="mb-6 w-20 h-20 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-brand-blue transition-colors duration-300">
                    <i class="fa-solid fa-handshake text-3xl text-brand-blue group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Colaboración</h4>
                <p class="text-gray-600">Fomentamos el trabajo en equipo con socios comerciales y la autoridad aduanera.</p>
            </div>

             <!-- Valor 6 -->
             <div class="group flex flex-col items-center text-center p-6">
                <div class="mb-6 w-20 h-20 rounded-full bg-red-50 flex items-center justify-center group-hover:bg-brand-red transition-colors duration-300">
                    <i class="fa-solid fa-leaf text-3xl text-brand-red group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-800 mb-3">Responsabilidad</h4>
                <p class="text-gray-600">Promovemos prácticas responsables y cuidado ambiental en el desarrollo sostenible.</p>
            </div>

        </div>
    </div>
</section>

<!-- SECCIÓN: COLABORADORES (Fusionada desde colaboradores.html) -->
<section class="py-24 bg-brand-gray">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-brand-blue uppercase tracking-wide">Comunicáte con Nuestros Expertos</h2>
            <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg">Ejecutivos comerciales expertos en comercio exterior a tu disposición.</p>
            <div class="w-24 h-1 bg-brand-red mx-auto mt-6"></div>
        </div>

        <!-- Grid de colaboradores: Premium Card UI -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <?php
            // Array simple de colaboradores para hacer limpio el código
            $colaboradores = [
                ['nombre' => 'Alexander Chiroque', 'cargo' => 'ENCARGADO COMERCIAL', 'img' => 'colaboradores-alexander.jpg', 'telf' => '+51 922 754 985', 'telf_url' => '51922754985', 'email' => 'a.chiroque@eblgroup.pe'],
                ['nombre' => 'Cristofer Ramírez', 'cargo' => 'EJECUTIVO COMERCIAL', 'img' => 'colaboradores-cristofer.jpg', 'telf' => '+51 905 452 138', 'telf_url' => '51905452138', 'email' => 'climber@eblgroup.pe'],
                ['nombre' => 'Miriam Choquehuanca', 'cargo' => 'JEFA DE PRICING', 'img' => 'colaboradores-miriam.jpg', 'telf' => '+51 905 437 602', 'telf_url' => '51905437602', 'email' => 'miriam.chvargas@eblgroup.pe'],
                ['nombre' => 'Cielo Espinal', 'cargo' => 'ASESOR COMERCIAL', 'img' => 'colaboradores-cielo.jpg', 'telf' => '+51 922 755 279', 'telf_url' => '51922755279', 'email' => 'c.espinal@eblgroup.pe'],
                ['nombre' => 'Heidy Cruz', 'cargo' => 'ASESOR COMERCIAL', 'img' => 'colaboradores-heidy.jpg', 'telf' => '+51 934 387 995', 'telf_url' => '51934387995', 'email' => 'h.cruz@eblgroup.pe'],
                ['nombre' => 'Saúl Barreto', 'cargo' => 'ASESOR COMERCIAL', 'img' => 'colaboradores-saul.jpg', 'telf' => '+51 905 433 651', 'telf_url' => '51905433651', 'email' => 's.barreto@eblgroup.pe'],
                ['nombre' => 'Melissa Ramirez', 'cargo' => 'ASESOR COMERCIAL', 'img' => 'colaboradores-melissa.jpg', 'telf' => '+51 981 365 870', 'telf_url' => '51981365870', 'email' => 'm.ramirez@eblgroup.pe']
            ];

            foreach ($colaboradores as $colab): ?>
            <div class="bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 flex flex-col items-center text-center p-6 group">
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-50 mb-4 group-hover:border-brand-red transition-colors duration-300 p-1">
                    <img src="<?= IMG_URL_OLD ?>/<?= $colab["img'] ?>" alt="<?= $colab['nombre'] ?>" class="w-full h-full object-cover rounded-full">
                </div>
                <h3 class="text-xl font-bold text-brand-blue mb-1"><?= $colab['nombre'] ?></h3>
                <p class="text-xs font-semibold text-brand-red mb-5 tracking-wide uppercase"><?= $colab['cargo'] ?></p>
                
                <div class="mt-auto w-full space-y-3">
                    <a href="https://wa.me/<?= $colab['telf_url'] ?>?text=Hola,%20quisiera%20más%20información%20sobre%20servicios%20logísticos" target="_blank" class="flex items-center justify-center gap-2 bg-green-50 text-green-700 hover:bg-green-500 hover:text-white px-4 py-2 rounded-lg font-medium transition-colors text-sm w-full">
                        <i class="fa-brands fa-whatsapp"></i> <?= $colab['telf'] ?>
                    </a>
                    <a href="mailto:<?= $colab['email'] ?>" class="flex items-center justify-center gap-2 text-gray-500 hover:text-brand-blue transition-colors text-sm w-full break-all">
                        <i class="fa-solid fa-envelope"></i> <?= $colab['email'] ?>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

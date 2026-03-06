<?php
// Meta tags para SEO
$page_title = 'Preguntas Frecuentes de Importación y Aduanas | EBL Group Peru';
$meta_desc = 'Resuelve tus dudas sobre procesos de importación, tiempos de tránsito, impuestos aduaneros y requisitos para operaciones logísticas exitosas.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER PREGUNTAS -->
<div class="relative bg-brand-blue py-20 flex items-center justify-center overflow-hidden">
    <!-- Patrón geométrico en el fondo -->
    <div class="absolute inset-0 opacity-10">
        <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M0 40L40 0H20L0 20M40 40V20L20 40" fill="currentColor"></path>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid-pattern)"></rect>
        </svg>
    </div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 uppercase tracking-tight"><?= $texts['faq_hero_title'] ?> <span class="text-brand-red"><?= $texts['faq_hero_title_red'] ?></span></h1>
        <p class="text-lg text-gray-300"><?= $texts['faq_hero_subtitle'] ?></p>
    </div>
</div>

<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="space-y-6">

            <!-- PREGUNTA 1 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="p-8 flex flex-col md:flex-row gap-6 items-start">
                    <div class="w-16 h-16 bg-blue-50 text-brand-blue rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-file-shield text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3"><?= $texts['faq_q1_title'] ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?= $texts['faq_q1_p1'] ?><br><br>
                            <?= $texts['faq_q1_p2'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- PREGUNTA 2 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="p-8 flex flex-col md:flex-row gap-6 items-start">
                    <div class="w-16 h-16 bg-red-50 text-brand-red rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-clock-rotate-left text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3"><?= $texts['faq_q2_title'] ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?= $texts['faq_q2_p1'] ?><br><br>
                            <span class="block bg-gray-50 p-3 rounded mt-2 border-l-4 border-brand-blue"><?= $texts['faq_q2_a'] ?></span>
                            <span class="block bg-gray-50 p-3 rounded mt-2 border-l-4 border-brand-red"><?= $texts['faq_q2_b'] ?></span>
                            <span class="block bg-gray-50 p-3 rounded mt-2 border-l-4 border-brand-blue"><?= $texts['faq_q2_c'] ?></span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- PREGUNTA 3 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="p-8 flex flex-col md:flex-row gap-6 items-start">
                    <div class="w-16 h-16 bg-blue-50 text-brand-blue rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-file-invoice-dollar text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3"><?= $texts['faq_q3_title'] ?></h3>
                        <p class="text-gray-600 leading-relaxed mb-4"><?= $texts['faq_q3_p1'] ?></p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                                <span><?= $texts['faq_q3_li1'] ?></span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                                <span><?= $texts['faq_q3_li2'] ?></span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                                <span><?= $texts['faq_q3_li3'] ?></span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                                <span><?= $texts['faq_q3_li4'] ?></span>
                            </li>
                        </ul>
                        <p class="text-sm text-gray-500 mt-4 italic"><?= $texts['faq_q3_note'] ?></p>
                    </div>
                </div>
            </div>

            <!-- PREGUNTA 4 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="p-8 flex flex-col md:flex-row gap-6 items-start">
                    <div class="w-16 h-16 bg-red-50 text-brand-red rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fa-solid fa-truck-fast text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3"><?= $texts['faq_q4_title'] ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?= $texts['faq_q4_p1'] ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-16 bg-brand-blue">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6"><?= $texts['faq_cta_title'] ?></h2>
        <p class="text-gray-300 mb-8 text-lg"><?= $texts['faq_cta_desc'] ?></p>
        <a href="<?= BASE_URL ?>/contacto" class="inline-block bg-brand-red hover:bg-red-700 text-white font-bold py-4 px-10 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 uppercase tracking-widest">
            <?= $texts['faq_cta_btn'] ?>
        </a>
    </div>
</section>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

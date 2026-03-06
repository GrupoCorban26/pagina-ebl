<?php
// Meta tags para SEO
$page_title = 'Tarifas de Fletes, Aduanas y Agenciamiento de Carga | EBL Group Peru';
$meta_desc = 'Conoce nuestras tarifas base para cargas aéreas, marítimas (FCL y LCL), servicio Courier y Seguros Internacionales. EBL Grupo Logístico.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER TARIFAS -->
<div class="relative bg-brand-blue py-20 flex items-center justify-center overflow-hidden">
    <!-- El fondo oscuro con opacidad e imagen de fondo -->
    <div class="absolute inset-0 bg-cover bg-center opacity-20 bg-[url('../../img/contacto.png')]"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 uppercase tracking-tight"><?= $texts['rates_hero_title'] ?> <span class="text-brand-red"><?= $texts['rates_hero_title_red'] ?></span></h1>
        <p class="text-lg text-gray-300"><?= $texts['rates_hero_subtitle'] ?></p>
    </div>
</div>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Grid de Tarifas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- TARIFA: CARGAS AEREAS -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-plane-departure text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide"><?= $texts['rates_air'] ?></h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-brand-red mt-1 mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_air_1'] ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_air_2'] ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_air_3'] ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_air_4'] ?></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- TARIFA: CARGAS LCL (Carga Suelta) -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-boxes-stacked text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide"><?= $texts['rates_lcl'] ?></h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-brand-red mt-1 mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_lcl_1'] ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_lcl_2'] ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_lcl_3'] ?></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- TARIFA: CARGAS FCL (Contenedores) -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-ship text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide"><?= $texts['rates_fcl'] ?></h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-brand-red mt-1 mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_fcl_1'] ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_fcl_2'] ?></span>
                        </li>
                    </ul>
                    <div class="mt-8 bg-blue-50 p-4 rounded-lg border-l-4 border-brand-blue text-sm text-gray-600">
                        <?= $texts['rates_fcl_note'] ?>
                    </div>
                </div>
            </div>

            <!-- TARIFA: COURIER -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-box-open text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide"><?= $texts['rates_courier'] ?></h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_courier_1'] ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_courier_2'] ?></span>
                        </li>
                    </ul>
                    <div class="mt-8 bg-blue-50 p-4 rounded-lg border-l-4 border-brand-blue text-sm text-gray-600">
                        <?= $texts['rates_courier_note'] ?>
                    </div>
                </div>
            </div>

            <!-- TARIFA: SEGURO INTERNACIONAL -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-shield-halved text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide"><?= $texts['rates_insurance'] ?></h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_insurance_1'] ?></span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-brand-red mt-1 mr-3"></i>
                            <span class="text-gray-700"><?= $texts['rates_insurance_2'] ?></span>
                        </li>
                    </ul>
                </div>
            </div>

             <!-- CTA Cotizacion Personalizada -->
             <div class="bg-brand-red rounded-2xl shadow-lg border border-brand-red overflow-hidden flex flex-col justify-center text-center p-8 group hover:bg-red-700 transition-colors duration-300">
                <i class="fa-solid fa-file-signature text-5xl mb-4 text-white opacity-80"></i>
                <h3 class="text-2xl font-bold uppercase tracking-wide text-white mb-4"><?= $texts['rates_cta_title'] ?></h3>
                <p class="text-white/80 mb-8"><?= $texts['rates_cta_desc'] ?></p>
                <a href="<?= BASE_URL ?>/contacto" class="inline-block bg-white text-brand-red font-bold py-3 px-6 rounded-full shadow-md hover:shadow-xl transition-all duration-300 uppercase text-sm">
                    <?= $texts['rates_cta_btn'] ?>
                </a>
            </div>

        </div>

        <div class="mt-12 text-center text-gray-500 text-sm">
            <p><?= $texts['rates_footer_note'] ?></p>
        </div>

    </div>
</section>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

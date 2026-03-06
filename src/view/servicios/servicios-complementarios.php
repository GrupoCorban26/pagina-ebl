<?php
// Meta tags para SEO
$page_title = 'Servicios Complementarios de Aduanas y Logística | EBL Group Peru';
$meta_desc = 'Descubre nuestros servicios complementarios: Asesoría, Door 2 Door, Cuadrillas, Estiba, Desestiba y Resguardo para brindar seguridad total a su carga.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER SERVICIOS COMPLEMENTARIOS -->
<div class="relative bg-brand-blue py-20 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('<?= IMG_URL ?>/INDEX-ALMACEN.jpg');"></div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 uppercase tracking-tight"><?= $texts['srvc_hero_title'] ?> <span class="text-brand-red"><?= $texts['srvc_hero_title_red'] ?></span></h1>
        <p class="text-lg text-gray-300"><?= $texts['srvc_hero_subtitle'] ?></p>
    </div>
</div>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Asesoría -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL ?>/SER-COMPLEMENTARIOS-ASESORIA.jpg" alt="Asesoría en Comercio Exterior" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10"><?= $texts['srvc_item1_title'] ?></h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm"><?= $texts['srvc_item1_desc'] ?></p>
                </div>
            </div>

            <!-- Door 2 Door -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL ?>/SER-COMPLEMENTARIOS-DOOR.jpg" alt="Servicio Door 2 Door" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10"><?= $texts['srvc_item2_title'] ?></h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm"><?= $texts['srvc_item2_desc'] ?></p>
                </div>
            </div>

            <!-- Cuadrillas -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL ?>/SER-COMPLEMENTARIOS-CUADRILLAS.jpg" alt="Servicio de Cuadrillas" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10"><?= $texts['srvc_item3_title'] ?></h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm"><?= $texts['srvc_item3_desc'] ?></p>
                </div>
            </div>

            <!-- Estiba y desestiba -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL ?>/SER-COMPLEMENTARIOS-ESTIBA.jpg" alt="Estiba y Desestiba" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10"><?= $texts['srvc_item4_title'] ?></h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm"><?= $texts['srvc_item4_desc'] ?></p>
                </div>
            </div>

            <!-- Resguardo -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300 md:col-span-2 lg:col-span-1">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL ?>/SER-COMPLEMENTARIOS-RESGUARDO.jpg" alt="Resguardo Logístico" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10"><?= $texts['srvc_item5_title'] ?></h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm"><?= $texts['srvc_item5_desc'] ?></p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

<?php
// Meta tags para SEO
$page_title = 'Transporte de Carga Marítima | EBL Group Peru';
$meta_desc = 'Especialistas en carga FCL, LCL, IMO, BreakBulk, y servicio intermodal asegurando el traslado de sus mercancías por vía marítima.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER -->
<div class="relative bg-brand-blue py-20 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('<?= IMG_URL ?>/INDEX-CARGA-MARITIMA.jpg');"></div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 italic tracking-wide">
            <?= $texts['srv_common_hero'] ?>
        </h1>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<section class="py-20 bg-gray-50 flex-grow">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Ícono o pequeña imagen principal si se desea, por ahora mantenemos limpio -->
        <h2 class="text-3xl md:text-4xl font-extrabold text-brand-blue mb-6 border-b-4 border-brand-red inline-block pb-2">
            <?= $texts['srv_maritima_title'] ?>
        </h2>
        
        <p class="text-xl text-gray-600 leading-relaxed bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
            <?= $texts['srv_maritima_desc'] ?>
        </p>

    </div>
</section>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

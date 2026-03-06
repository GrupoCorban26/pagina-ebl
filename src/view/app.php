<?php
// Meta tags para SEO Home
$page_title = 'Agencia de Carga Internacional y Aduanas en Perú | EBL Group Logistico';
$meta_desc = 'EBL Grupo Logístico S.A.C: Optimizando cadenas de suministro. Exportación, Importación, Transporte Marítimo, Aéreo y Agenciamiento de Aduanas en el Callao, Perú.';

require_once ASSETS_PATH . '/header.php';
?>
<!-- BANNER DE VIDEO (HERO) -->
<!-- Se mantuvo la misma lógica, pero usando Tailwind para posicionamiento absoluto -->
<div class="relative w-full h-[80vh] min-h-[600px] overflow-hidden bg-brand-blue flex items-center justify-center">
    <!-- Overlay oscuro para asegurar contraste del texto -->
    <div class="absolute inset-0 bg-black/90 z-10"></div>
    
    <!-- Video Background. Reemplazar src si es necesario, usando el mismo que el original -->
    <video src="<?= IMG_URL ?>/logistics-converted.mp4" autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0"></video>
    
    <div class="relative z-20 text-center px-4 flex flex-col items-center">
        <!-- Logo en el centro -->
        <img src="<?= IMG_URL ?>/LOGO-PRINCIPAL.png" alt="Logo de EBL Group Logístico, Agencia de Aduanas y Carga en Perú" class="h-20 md:h-28 lg:h-32 mb-8 p-3 backdrop-blur-sm animate-fade-in-up" loading="lazy">
        
        <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold text-white uppercase tracking-tight 
                   animate-fade-in-up [animation-delay:0.3s]">
            <?= $texts['hero_title_1'] ?> <span class="text-brand-red"><?= $texts['hero_title_red_1'] ?></span><br>
            <?= $texts['hero_title_2'] ?> <span class="text-brand-red"><?= $texts['hero_title_red_2'] ?></span>
        </h1>
        <div class="mt-10 animate-fade-in-up [animation-delay:0.7s]">
            <a href="<?= BASE_URL ?>/contacto" class="bg-brand-red hover:bg-red-700 text-white px-8 py-4 rounded-full uppercase tracking-widest font-bold transition-all duration-300 shadow-xl hover:shadow-2xl text-sm md:text-base">
                <?= $texts['hero_cta'] ?>
            </a>
        </div>
    </div>
</div>

<!-- SECCION SERVICIOS PRINCIPALES (GRID) -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-brand-blue uppercase tracking-wide"><?= $texts['home_srv_title'] ?></h2>
            <div class="w-24 h-1 bg-brand-red mx-auto mt-4"></div>
            <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed"><?= $texts['home_srv_subtitle'] ?></p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- TARJETA Carga Aérea -->
            <a href="#" class="group block bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100">
                <div class="relative h-60 overflow-hidden">
                    <img src="<?= IMG_URL ?>/INDEX-CARGA-AEREA.jpg" alt="Servicio de Transporte Internacional de Carga Aérea" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-brand-blue/20 group-hover:bg-transparent transition-colors duration-300"></div>
                </div>
                <div class="p-6 text-center border-t-4 border-transparent group-hover:border-brand-red transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-brand-red uppercase tracking-wide transition-colors"><?= $texts['srv_air'] ?></h3>
                </div>
            </a>

            <!-- TARJETA Carga Marítima -->
            <a href="#" class="group block bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100">
                <div class="relative h-60 overflow-hidden">
                    <img src="<?= IMG_URL ?>/INDEX-CARGA-MARITIMA.jpg" alt="Servicio de Transporte Internacional de Carga Marítima FCL y LCL" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-brand-blue/20 group-hover:bg-transparent transition-colors duration-300"></div>
                </div>
                <div class="p-6 text-center border-t-4 border-transparent group-hover:border-brand-red transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-brand-red uppercase tracking-wide transition-colors"><?= $texts['srv_sea'] ?></h3>
                </div>
            </a>

            <!-- TARJETA Aduanas -->
            <a href="#" class="group block bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100">
                <div class="relative h-60 overflow-hidden">
                    
                    <img src="<?= IMG_URL ?>/INDEX-ADUANA.jpg" alt="Servicio Integral de Agenciamiento de Aduanas en el Callao, Perú" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-brand-blue/20 group-hover:bg-transparent transition-colors duration-300"></div>
                </div>
                <div class="p-6 text-center border-t-4 border-transparent group-hover:border-brand-red transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-brand-red uppercase tracking-wide transition-colors"><?= $texts['srv_customs'] ?></h3>
                </div>
            </a>

            <!-- TARJETA Transporte Interno -->
            <a href="#" class="group block bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100">
                <div class="relative h-60 overflow-hidden">
                    <img src="<?= IMG_URL ?>/INDEX-TRANSPORTE-INTERNO.jpg" alt="Transporte Terrestre Local de Cargas y Contenedores" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-brand-blue/20 group-hover:bg-transparent transition-colors duration-300"></div>
                </div>
                <div class="p-6 text-center border-t-4 border-transparent group-hover:border-brand-red transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-brand-red uppercase tracking-wide transition-colors"><?= $texts['srv_inland'] ?></h3>
                </div>
            </a>

            <!-- TARJETA Almacenaje -->
            <a href="#" class="group block bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100">
                <div class="relative h-60 overflow-hidden">
                    <img src="<?= IMG_URL ?>/INDEX-ALMACEN.jpg" alt="Servicio de Almacenaje y Distribución de Carga en Centro Aéreo" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-brand-blue/20 group-hover:bg-transparent transition-colors duration-300"></div>
                </div>
                <div class="p-6 text-center border-t-4 border-transparent group-hover:border-brand-red transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-brand-red uppercase tracking-wide transition-colors"><?= $texts['srv_warehouse'] ?></h3>
                </div>
            </a>

            <!-- TARJETA Seguro Internacional -->
            <a href="#" class="group block bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100">
                <div class="relative h-60 overflow-hidden">
                    <img src="<?= IMG_URL ?>/INDEX-SEGURO.jpg" alt="Contratación de Seguro Internacional de Carga" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" loading="lazy">
                    <div class="absolute inset-0 bg-brand-blue/20 group-hover:bg-transparent transition-colors duration-300"></div>
                </div>
                <div class="p-6 text-center border-t-4 border-transparent group-hover:border-brand-red transition-all duration-300">
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-brand-red uppercase tracking-wide transition-colors"><?= $texts['srv_insurance'] ?></h3>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- SECCIÓN ACREDITACIONES (BANDEAU MODERNO BLANCO/GRIS) -->
<section class="py-16 bg-white border-t border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-gray-400 uppercase tracking-widest"><?= $texts['home_cert_title'] ?></h2>
        </div>
        
        <!-- Contenedor Flex para centrar los logos y hacerlos responsive -->
        <div class="flex flex-wrap justify-center items-center gap-12 lg:gap-24 opacity-70 hover:opacity-100 transition-opacity duration-500">
            <!-- Asumiendo que wca-logo.png son las versiones en color -->
            <img src="<?= IMG_URL ?>/wca-logo.png" alt="Miembros de WCA Certificación Internacional" class="h-16 md:h-20 object-contain hover:scale-105 transition-transform duration-300" loading="lazy">
            <img src="<?= IMG_URL ?>/elite-logo.png" alt="Miembros de Elite Global Logistics Network" class="h-16 md:h-20 object-contain hover:scale-105 transition-transform duration-300" loading="lazy">
            <img src="<?= IMG_URL ?>/sunat-logo.png" alt="Agentes Autorizados por SUNAT Aduanas Perú" class="h-16 md:h-20 object-contain hover:scale-105 transition-transform duration-300" loading="lazy">
        </div>
    </div>
</section>

<!-- ESTILOS EXTRAS PARA ANIMACIONES (Solo para Index) -->
<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
        opacity: 0;
        animation: fadeInUp 1s ease-out forwards;
    }
</style>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

<?php
// Meta tags para SEO
$page_title = 'Tarifas de Fletes, Aduanas y Agenciamiento de Carga | EBL Group Peru';
$meta_desc = 'Conoce nuestras tarifas base para cargas aéreas, marítimas (FCL y LCL), servicio Courier y Seguros Internacionales. EBL Grupo Logístico.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER TARIFAS -->
<div class="relative bg-brand-blue py-20 flex items-center justify-center overflow-hidden">
    <!-- El fondo oscuro con opacidad e imagen de fondo -->
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('../img/contacto.png');"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 uppercase tracking-tight">Nuestras <span class="text-brand-red">Tarifas</span></h1>
        <p class="text-lg text-gray-300">Transparencia y competitividad en costos para su cadena de suministro.</p>
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
                    <h3 class="text-xl font-bold uppercase tracking-wide">Cargas Aéreas</h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-brand-red mt-1 mr-3"></i>
                            <span class="text-gray-700"><strong>Flete internacional:</strong> A negociar dependiendo del punto de salida.</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>AWB:</strong> $ 25.00</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>HANDLING:</strong> $ 95.00 + IGV</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>Documentos:</strong> $ 15.00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- TARIFA: CARGAS LCL (Carga Suelta) -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-boxes-stacked text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide">Cargas LCL</h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-brand-red mt-1 mr-3"></i>
                            <span class="text-gray-700"><strong>Flete internacional:</strong> A negociar, depende del punto de salida.</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>Transmisión:</strong> $25.00</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>Descarga:</strong> $28.00 + IGV (x tonelada)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>Visto Bueno:</strong> $98.00 + IGV (x tonelada)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- TARIFA: CARGAS FCL (Contenedores) -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-ship text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide">Cargas FCL</h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-brand-red mt-1 mr-3"></i>
                            <span class="text-gray-700"><strong>Flete internacional:</strong> A negociar, depende del punto de salida.</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>Costo ALL IN</strong></span>
                        </li>
                    </ul>
                    <div class="mt-8 bg-blue-50 p-4 rounded-lg border-l-4 border-brand-blue text-sm text-gray-600">
                        <strong>Nota:</strong> Este precio incluye BL, transmisión y THC.
                    </div>
                </div>
            </div>

            <!-- TARIFA: COURIER -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-box-open text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide">Servicio Courier</h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>Flete internacional:</strong> $8.00 (x Kg)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>Costos Courier:</strong> $50.00 + IGV</span>
                        </li>
                    </ul>
                    <div class="mt-8 bg-blue-50 p-4 rounded-lg border-l-4 border-brand-blue text-sm text-gray-600">
                        <strong>Nota:</strong> Considerar que el flete se calcula por el peso real.
                    </div>
                </div>
            </div>

            <!-- TARIFA: SEGURO INTERNACIONAL -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                <div class="p-6 bg-brand-blue text-white text-center">
                    <i class="fa-solid fa-shield-halved text-4xl mb-3 text-brand-red"></i>
                    <h3 class="text-xl font-bold uppercase tracking-wide">Seguro Internacional</h3>
                </div>
                <div class="p-8">
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <i class="fa-solid fa-check text-brand-red mr-3"></i>
                            <span class="text-gray-700"><strong>Prima mínima:</strong> $45.00</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-brand-red mt-1 mr-3"></i>
                            <span class="text-gray-700">Si excede el valor de $16,500.00 del valor CIF, se cobrará el <strong>0.27%</strong>.</span>
                        </li>
                    </ul>
                </div>
            </div>

             <!-- CTA Cotizacion Personalizada -->
             <div class="bg-brand-red rounded-2xl shadow-lg border border-brand-red overflow-hidden flex flex-col justify-center text-center p-8 group hover:bg-red-700 transition-colors duration-300">
                <i class="fa-solid fa-file-signature text-5xl mb-4 text-white opacity-80"></i>
                <h3 class="text-2xl font-bold uppercase tracking-wide text-white mb-4">¿Necesita una tarifa personalizada?</h3>
                <p class="text-white/80 mb-8">Consulte a nuestros especialistas en Pricing para volumenes especiales o proyectos.</p>
                <a href="<?= BASE_URL ?>/contacto" class="inline-block bg-white text-brand-red font-bold py-3 px-6 rounded-full shadow-md hover:shadow-xl transition-all duration-300 uppercase text-sm">
                    Solicitar Cotización
                </a>
            </div>

        </div>

        <div class="mt-12 text-center text-gray-500 text-sm">
            <p>* Los precios indicados son referenciales y están sujetos a cambios sin previo aviso acorde a las variaciones del mercado global.</p>
        </div>

    </div>
</section>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

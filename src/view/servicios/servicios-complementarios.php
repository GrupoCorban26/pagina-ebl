<?php
// Meta tags para SEO
$page_title = 'Servicios Complementarios de Aduanas y Logística | EBL Group Peru';
$meta_desc = 'Descubre nuestros servicios complementarios: Asesoría, Door 2 Door, Cuadrillas, Estiba, Desestiba y Resguardo para brindar seguridad total a su carga.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER SERVICIOS COMPLEMENTARIOS -->
<div class="relative bg-brand-blue py-20 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('../img/INDEX-ALMACEN.jpg');"></div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 uppercase tracking-tight">Servicios <span class="text-brand-red">Complementarios</span></h1>
        <p class="text-lg text-gray-300">Agregamos valor y seguridad integral a toda su cadena de suministro.</p>
    </div>
</div>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Asesoría -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL_OLD ?>/SER-COMPLEMENTARIOS-ASESORIA.jpg" alt="Asesoría en Comercio Exterior" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10">Asesoría en comercio exterior</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm">Nuestro staff de profesionales se encuentra constantemente capacitado, orientados a identificar la situación actual, expectativas y metas de su empresa. También brindamos información al día y oportuna de los procedimientos vigentes y los cambios que se suscitan en mejora del comercio internacional.</p>
                </div>
            </div>

            <!-- Door 2 Door -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL_OLD ?>/SER-COMPLEMENTARIOS-DOOR.jpg" alt="Servicio Door 2 Door" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10">Servicio Door 2 Door</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm">Contamos con una extensa red de agentes a nivel mundial que nos permite ofrecer un servicio Puerta a Puerta marítimo y aéreo de máxima confianza y garantía. Simplificamos la operativa desde origen a destino siendo tu único interlocutor, facilitándote seguimiento de tu carga en todo momento.</p>
                </div>
            </div>

            <!-- Cuadrillas -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL_OLD ?>/SER-COMPLEMENTARIOS-CUADRILLAS.jpg" alt="Servicio de Cuadrillas" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10">Cuadrillas</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm">Contamos con personal altamente calificado para todo tipo de servicio referente a maniobras, carga, descarga y embalaje, entre otros, asegurando la integridad de sus bienes.</p>
                </div>
            </div>

            <!-- Estiba y desestiba -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL_OLD ?>/SER-COMPLEMENTARIOS-ESTIBA.jpg" alt="Estiba y Desestiba" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10">Estiba y desestiba</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm">Especialistas en el servicio de estiba y desestiba de carga suelta proveniente de contenedores de 20’ y 40’ pies, garantizando velocidad y cuidado de la mercancía.</p>
                </div>
            </div>

            <!-- Resguardo -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden group hover:shadow-2xl transition-all duration-300 md:col-span-2 lg:col-span-1">
                <div class="h-48 overflow-hidden relative">
                    <img src="<?= IMG_URL_OLD ?>/SER-COMPLEMENTARIOS-RESGUARDO.jpg" alt="Resguardo Logístico" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <h3 class="absolute bottom-4 left-6 text-xl font-bold text-white uppercase tracking-wide z-10">Resguardo Armado</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 leading-relaxed text-sm">Consiste en el acompañamiento en ruta de aquellos bienes o mercaderías que por sus características son consideradas de alto riesgo o de exposición alta para robos o contaminación. Tiene como objetivo evitar riesgos potenciales y vulnerabilidades existentes durante el traslado (transporte interno).</p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

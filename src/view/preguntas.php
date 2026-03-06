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
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 uppercase tracking-tight">Preguntas <span class="text-brand-red">Frecuentes</span></h1>
        <p class="text-lg text-gray-300">Resolvemos tus dudas sobre el agenciamiento de aduanas y transporte de carga.</p>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-3">¿Tendré problemas con Aduanas al importar un producto?</h3>
                        <p class="text-gray-600 leading-relaxed">
                            <strong>Realmente no es complicado.</strong><br><br>
                            Con EBL Grupo Logístico contarás con el soporte de profesionales expertos en la materia. Te asesoramos y tramitamos los permisos necesarios para la nacionalización de cualquier tipo de producto, incluyendo certificados de entidades como SENASA, DIGESA, DIGEMID, entre otras.
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
                        <h3 class="text-xl font-bold text-gray-800 mb-3">¿En cuánto tiempo puede llegar mi mercancía?</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Los tiempos de tránsito internacionales varían según el origen y la vía de transporte:<br><br>
                            <span class="block bg-gray-50 p-3 rounded mt-2 border-l-4 border-brand-blue"><strong>Asia:</strong> Entre 30 a 38 días (vía marítima) desde la fecha de embarque.</span>
                            <span class="block bg-gray-50 p-3 rounded mt-2 border-l-4 border-brand-red"><strong>Europa:</strong> Tiempo estimado de 30 días aproximadamente.</span>
                            <span class="block bg-gray-50 p-3 rounded mt-2 border-l-4 border-brand-blue"><strong>América:</strong> Abarca entre 12 a 15 días en promedio.</span>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-3">¿Qué impuestos debo pagar al nacionalizar mi mercancía?</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">Los tributos y recargos exigibles aplican de la siguiente manera:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                                <span><strong>Ad Valorem:</strong> El arancel básico sobre el valor CIF.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                                <span><strong>IPM:</strong> Impuesto de Promoción Municipal.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                                <span><strong>IGV:</strong> Impuesto General a las Ventas.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i>
                                <span><strong>Percepción del IGV:</strong> Crédito fiscal que se puede recuperar al momento de realizar la declaración de impuestos mensual.</span>
                            </li>
                        </ul>
                        <p class="text-sm text-gray-500 mt-4 italic">* Pueden aplicar otros impuestos dependiendo del tipo específico de producto (Ej: ISC).</p>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-3">¿Qué se requiere para una importación exitosa?</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Además de contar con un producto de alta rotación e innovador en el mercado, es <strong>fundamental</strong> contar con aliados estratégicos con experiencia certificada (como EBL Group) para llevar a cabo de manera impecable todo el proceso logístico y aduanero, evitando demoras o sobrecostos en almacenaje.
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
        <h2 class="text-3xl font-bold text-white mb-6">¿Tienes una pregunta diferente?</h2>
        <p class="text-gray-300 mb-8 text-lg">Nuestros asesores comerciales están listos para atenderte personalmente.</p>
        <a href="<?= BASE_URL ?>/contacto" class="inline-block bg-brand-red hover:bg-red-700 text-white font-bold py-4 px-10 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 uppercase tracking-widest">
            Contactar a un Asesor
        </a>
    </div>
</section>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

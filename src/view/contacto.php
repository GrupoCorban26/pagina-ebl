<?php
// Meta tags para SEO de la pagina Contacto
$page_title = 'Contacto y Ubicación Comercial | EBL Group Peru';
$meta_desc = 'Contacta a EBL Grupo Logístico. Te ofrecemos cotizaciones gratis para aduanas, carga aérea, marítima. Ubicados en el Centro Aéreo Comercial, Callao.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER CONTACTO -->
<div class="relative bg-brand-blue py-20 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('../img/contacto.png');"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 uppercase tracking-tight">Contacta a <span class="text-brand-red">EBL Group</span></h1>
        <p class="text-lg text-gray-300">Soluciones de transporte y aduanas a nivel global.</p>
    </div>
</div>

<section class="py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- FORMULARIO DE CONTACTO MODERNIZADO Y PROFESIONAL -->
            <div class="bg-gray-50 p-8 md:p-12 rounded-2xl shadow-lg border border-gray-100">
                <div class="mb-8">
                    <span class="text-brand-red font-bold tracking-widest text-sm uppercase">Comencemos</span>
                    <h2 class="text-3xl font-extrabold text-brand-blue mt-2">¿Necesita una cotización?</h2>
                    <p class="text-gray-500 mt-2">Completa el formulario y uno de nuestros expertos se pondrá en contacto a la brevedad.</p>
                </div>

                <form action="../ebl-form.php" method="post" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nombre Completo</label>
                        <input type="text" name="nombre" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white" placeholder="Ej. Juan Pérez">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                            <input type="email" name="correo" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white" placeholder="juan@empresa.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Número de Contacto</label>
                            <input type="tel" name="contacto" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white" placeholder="+51 999 999 999">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Detalle de la Carga o Consulta</label>
                        <textarea name="mensaje" rows="4" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white resize-none" placeholder="Por favor indíquenos volumen, peso, origen/destino u otros detalles..."></textarea>
                    </div>

                    <!-- Placeholder para CAPTCHA -->
                    <div class="bg-gray-200 h-20 rounded shadow-inner flex items-center justify-center text-gray-500 text-sm italic">
                        [Aquí va el script de Google reCAPTCHA v2/v3]
                    </div>

                    <button type="submit" class="w-full bg-brand-red hover:bg-red-700 text-white font-bold py-4 px-8 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 uppercase tracking-widest text-sm">
                        Enviar Consulta
                    </button>
                </form>
            </div>

            <!-- INFO DE CONTACTO MODERNIZADA -->
            <div class="flex flex-col justify-center space-y-10">
                
                <!-- CARD: Ubicación -->
                <div class="flex flex-row items-start group">
                    <div class="w-16 h-16 bg-blue-50 text-brand-blue rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-solid fa-map-location-dot text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Oficina Central</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Av. Elmer Faucett S/N Centro Aéreo Comercial<br>
                            (Aduana Aérea del Callao) Modulo E, Oficina 505.<br>
                            Callao, Perú.
                        </p>
                    </div>
                </div>

                <!-- CARD: Teléfonos -->
                <div class="flex flex-row items-start group">
                    <div class="w-16 h-16 bg-red-50 text-brand-red rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-red group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-solid fa-phone-volume text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Llámanos</h3>
                        <p class="text-gray-600 leading-relaxed">
                            <span class="block hover:text-brand-red cursor-pointer">+51 934 308 291</span>
                            <span class="block hover:text-brand-red cursor-pointer">+51 922 754 985</span>
                        </p>
                    </div>
                </div>

                <!-- CARD: Email -->
                <div class="flex flex-row items-start group">
                    <div class="w-16 h-16 bg-blue-50 text-brand-blue rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-blue group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-solid fa-envelope-open-text text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Correo Electrónico</h3>
                        <p class="text-gray-600 leading-relaxed">
                            <a href="mailto:consultas@eblgroup.pe" class="hover:text-brand-blue transition-colors">consultas@eblgroup.pe</a><br>
                            Cotizaciones e información general.
                        </p>
                    </div>
                </div>

                <!-- CARD: Horario -->
                <div class="flex flex-row items-start group">
                    <div class="w-16 h-16 bg-red-50 text-brand-red rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-red group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-regular fa-clock text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Horario de Atención</h3>
                        <p class="text-gray-600 leading-relaxed">
                            <span class="font-medium text-gray-800">Lunes a Viernes:</span> 08:00 AM - 06:00 PM<br>
                            <span class="font-medium text-gray-800">Sábados:</span> 08:00 AM - 11:00 AM
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- MAPA FULL WIDTH -->
<div class="w-full h-96 bg-gray-200 mt-8">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31219.043965542176!2d-77.1141301!3d-12.0173051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cd51868d9b03%3A0x7cf130406c06be2f!2sEBL%20Grupo%20Log%C3%ADstico!5e0!3m2!1ses!2spe!4v1750113187889!5m2!1ses!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

<?php
// Meta tags para SEO de la pagina Contacto
$page_title = 'Contacto y Ubicación Comercial | EBL Group Peru';
$meta_desc = 'Contacta a EBL Grupo Logístico. Te ofrecemos cotizaciones gratis para aduanas, carga aérea, marítima. Ubicados en el Centro Aéreo Comercial, Callao.';

require_once ASSETS_PATH . '/header.php';
?>

<!-- BANNER CONTACTO -->
<div class="relative bg-brand-blue py-20 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-20 bg-[url('../../img/contacto.png')]"></div>
    <div class="relative z-10 text-center px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 uppercase tracking-tight"><?= $texts['contact_hero_title'] ?> <span class="text-brand-red">EBL Group</span></h1>
        <p class="text-lg text-gray-300"><?= $texts['contact_hero_subtitle'] ?></p>
    </div>
</div>

<section class="py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- FORMULARIO DE CONTACTO MODERNIZADO Y PROFESIONAL -->
            <div class="bg-gray-50 p-8 md:p-12 rounded-2xl shadow-lg border border-gray-100">
                <div class="mb-8">
                    <span class="text-brand-red font-bold tracking-widest text-sm uppercase"><?= $texts['contact_form_lbl'] ?></span>
                    <h2 class="text-3xl font-extrabold text-brand-blue mt-2"><?= $texts['contact_form_title'] ?></h2>
                    <p class="text-gray-500 mt-2"><?= $texts['contact_form_desc'] ?></p>
                </div>

                <form id="contactForm" action="<?= BASE_URL ?>/api/mailer.php" method="post" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1"><?= $texts['contact_lbl_name'] ?></label>
                            <input type="text" name="nombre" id="nombre" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white" placeholder="<?= $texts['contact_plc_name'] ?>">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1"><?= $texts['contact_lbl_subject'] ?></label>
                            <select name="asunto" id="asunto" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white text-gray-700 cursor-pointer">
                                <option value="" disabled selected>-- Seleccionar --</option>
                                <option value="Quiero cotizar"><?= $texts['contact_sub_quote'] ?></option>
                                <option value="Quiero información"><?= $texts['contact_sub_info'] ?></option>
                                <option value="Quiero una visita comercial"><?= $texts['contact_sub_visit'] ?></option>
                                <option value="Otros"><?= $texts['contact_sub_other'] ?></option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1"><?= $texts['contact_lbl_email'] ?></label>
                            <input type="email" name="correo" id="correo" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white" placeholder="juan@empresa.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1"><?= $texts['contact_lbl_phone'] ?></label>
                            <input type="tel" name="contacto" id="contacto" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white" placeholder="+51 999 999 999">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1"><?= $texts['contact_lbl_msg'] ?></label>
                        <textarea name="mensaje" id="mensaje" rows="4" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition-shadow bg-white resize-none" placeholder="<?= $texts['contact_plc_msg'] ?>"></textarea>
                    </div>

                    <!-- Mensaje de Respuesta del Servidor (Oculto por defecto) -->
                    <div id="formResponse" class="hidden rounded-lg p-4 text-sm font-bold shadow-inner"></div>

                    <!-- Google reCAPTCHA v2 -->
                    <div class="flex justify-center">
                        <div class="g-recaptcha" data-sitekey="6LffRIIsAAAAAFYDZLjUaet6uvNAJy3_WMy4hhao"></div>
                    </div>

                    <button type="submit" id="btnSubmit" class="w-full bg-brand-red hover:bg-red-700 text-white font-bold py-4 px-8 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 uppercase tracking-widest text-sm flex justify-center items-center">
                        <span id="btnText"><?= $texts['contact_btn_send'] ?></span>
                        <svg id="btnLoader" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $texts['contact_info_office'] ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?= $texts['contact_info_office_desc'] ?>
                        </p>
                    </div>
                </div>

                <!-- CARD: Teléfonos -->
                <div class="flex flex-row items-start group">
                    <div class="w-16 h-16 bg-red-50 text-brand-red rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-red group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-solid fa-phone-volume text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $texts['contact_info_call'] ?></h3>
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
                        <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $texts['contact_info_email'] ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <a href="mailto:consultas@eblgroup.pe" class="hover:text-brand-blue transition-colors">consultas@eblgroup.pe</a><br>
                            <?= $texts['contact_info_email_desc'] ?>
                        </p>
                    </div>
                </div>

                <!-- CARD: Horario -->
                <div class="flex flex-row items-start group">
                    <div class="w-16 h-16 bg-red-50 text-brand-red rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-red group-hover:text-white transition-colors duration-300 shadow-sm">
                        <i class="fa-regular fa-clock text-2xl"></i>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2"><?= $texts['contact_info_hours'] ?></h3>
                        <p class="text-gray-600 leading-relaxed">
                            <?= $texts['contact_info_hours_wk'] ?><br>
                            <?= $texts['contact_info_hours_sat'] ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- MAPA FULL WIDTH -->
<div class="w-full h-96 bg-gray-200 mt-8">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31219.043965542176!2d-77.1141301!3d-12.0173051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cd51868d9b03%3A0x7cf130406c06be2f!2sEBL%20Grupo%20Log%C3%ADstico!5e0!3m2!1ses!2spe!4v1750113187889!5m2!1ses!2spe" width="100%" height="100%" class="border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- Script de Envío AJAX -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const responseDiv = document.getElementById('formResponse');
    const btnSubmit = document.getElementById('btnSubmit');
    const btnText = document.getElementById('btnText');
    const btnLoader = document.getElementById('btnLoader');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Evitar la recarga de la página

        // Cambiar estado del botón a enviando
        btnSubmit.disabled = true;
        btnSubmit.classList.add('opacity-75', 'cursor-not-allowed');
        btnText.classList.add('hidden');
        btnLoader.classList.remove('hidden');

        // Ocultar mensaje de respuesta anterior
        responseDiv.classList.add('hidden');
        responseDiv.className = 'hidden rounded-lg p-4 text-sm font-bold shadow-inner';

        // Preparar Datos
        const formData = new FormData(form);

        // Llamada fetch al backend
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // Siempre intentamos leer el JSON, incluso si hay error 4xx o 5xx
            return response.json().then(data => {
                if (!response.ok) {
                    throw new Error(data.message || 'Error en la respuesta del servidor');
                }
                return data;
            });
        })
        .then(data => {
            // Mostrar mensaje de éxito
            responseDiv.textContent = data.message;
            responseDiv.classList.remove('hidden');
            responseDiv.classList.add('bg-green-100', 'text-green-800', 'border-l-4', 'border-green-500');
            
            // Limpiar formulario y Captcha tras éxito
            form.reset();
            if (typeof grecaptcha !== 'undefined') {
                grecaptcha.reset();
            }
        })
        .catch(error => {
            // Mostrar mensaje de error
            responseDiv.textContent = error.message;
            responseDiv.classList.remove('hidden');
            responseDiv.classList.add('bg-red-100', 'text-red-800', 'border-l-4', 'border-red-500');
            
            // Si hay error de captcha u otro, también lo reseteamos para que vuelva a intentar
            if (typeof grecaptcha !== 'undefined') {
                grecaptcha.reset();
            }
        })
        .finally(() => {
            // Restaurar botón siempre
            btnSubmit.disabled = false;
            btnSubmit.classList.remove('opacity-75', 'cursor-not-allowed');
            btnText.classList.remove('hidden');
            btnLoader.classList.add('hidden');
            
            // Hacer scroll suave hacia el mensaje de respuesta
            responseDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    });
});
</script>

<!-- Script oficial de Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php require_once ASSETS_PATH . '/footer.php'; ?>

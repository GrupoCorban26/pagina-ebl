    </main>

    <!-- FOOTER PREMIUM Y LIMPIO -->
    <footer class="bg-brand-blue text-white pt-16 pb-8 border-t-4 border-brand-red mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                
                <!-- Columna 1: Info e Identidad -->
                <div>
                    <div class=" p-2 rounded inline-block mb-6">
                        <img src="<?= IMG_URL ?>/logo-blanco-sin-fondo.png" alt="EBL Group Logo" class="h-10 w-auto">
                    </div>
                    <p class="text-gray-300 text-sm mb-6 leading-relaxed">
                        EBL GRUPO LOGISTICO S.A.C.<br>
                        <?= $texts['footer_desc'] ?>
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/eblGrupoLogistico/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-red transition-colors duration-300">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/ebl.logistico/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-red transition-colors duration-300">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/ebl-group/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-red transition-colors duration-300">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Columna 2: Contacto -->
                <div>
                    <h3 class="text-lg font-bold mb-6 tracking-wide uppercase text-gray-100"><?= $texts['footer_contact_title'] ?></h3>
                    <ul class="space-y-4 text-sm text-gray-300">
                        <li class="flex items-start">
                            <i class="fa-solid fa-location-dot mt-1 mr-3 text-brand-red"></i>
                            <span>Av. Elmer Faucett S/N Centro Aéreo Comercial (Aduana Aérea del Callao) Modulo E, 505 Callao.</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone mr-3 text-brand-red"></i>
                            <span>+51 934 308 291 / +51 922 754 985</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope mr-3 text-brand-red"></i>
                            <a href="mailto:consultas@eblgroup.pe" class="hover:text-white transition-colors">consultas@eblgroup.pe</a>
                        </li>
                    </ul>
                </div>

                <!-- Columna 3: Acreditaciones -->
                <div>
                    <h3 class="text-lg font-bold mb-6 tracking-wide uppercase text-gray-100"><?= $texts['footer_cert_title'] ?></h3>
                    <div class="grid grid-cols-2 gap-4 items-center">
                        <div class="bg-white/10 p-3 rounded flex justify-center hover:bg-white/20 transition-colors">
                            <img src="<?= IMG_URL ?>/wca-logo-blanco-negro.png" alt="WCA" class="h-8 object-contain filter brightness-0 invert opacity-80 hover:opacity-100 transition-opacity">
                        </div>
                        <div class="bg-white/10 p-3 rounded flex justify-center hover:bg-white/20 transition-colors">
                            <img src="<?= IMG_URL ?>/elite-logo-blanco-negro.png" alt="Elite" class="h-8 object-contain filter brightness-0 invert opacity-80 hover:opacity-100 transition-opacity">
                        </div>
                        <div class="bg-white/10 p-3 rounded flex justify-center hover:bg-white/20 transition-colors col-span-2">
                            <img src="<?= IMG_URL ?>/sunat-logo-blanco-negro.png" alt="Sunat" class="h-8 object-contain filter brightness-0 invert opacity-80 hover:opacity-100 transition-opacity">
                        </div>
                    </div>
                </div>

                <!-- Columna 4: Libro de Reclamaciones -->
                <div>
                    <h3 class="text-lg font-bold mb-6 tracking-wide uppercase text-gray-100"><?= $texts['footer_service_title'] ?></h3>
                    <a href="https://herramientassac.andessystems.com.pe/reclamo/20612332208" target="_blank" class="block bg-white/5 border border-gray-600 rounded-lg p-4 hover:border-brand-red hover:bg-white/10 transition-all group">
                        <div class="flex items-center gap-4">
                            <!-- Nota: Corregí este link al libro de reclamaciones HTTP a HTTPS como sugerimos en el analisis inicial -->
                            <img src="https://primesoft-rlatorre-backup-bucket-1.s3.amazonaws.com/ldr/icon-libro-reclamaciones_negro.png" alt="Libro Reclamaciones" class="h-10 filter invert opacity-70 group-hover:opacity-100">
                            <span class="text-sm text-gray-300 group-hover:text-white font-medium"><?= $texts['footer_claims'] ?></span>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Divisor y Copyright -->
            <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-400">
                <p>&copy; <?= date('Y') ?> EBL Grupo Logístico. <?= $texts['footer_rights'] ?></p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors"><?= $texts['footer_privacy'] ?></a>
                    <a href="#" class="hover:text-white transition-colors"><?= $texts['footer_terms'] ?></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

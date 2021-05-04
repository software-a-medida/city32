<?php defined('_EXEC') or die; ?>

        <footer class="p-40" style="background-color:#000;">
            <div class="container">
                <div class="row m-b-20 m-b-md-40">
                    <div class="col-md-4 m-b-20 m-b-md-0">
                        <h6 class="m-b-5 text-uppercase text-light">{$lang.contact}</h6>
                        <nav class="m-b-20">
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" target="_blank" class="text-light"><i class="fas fa-envelope m-r-5"></i><?php echo Configuration::$vars['contact']['email']; ?></a></li>
                                <li><a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" target="_blank" class="text-light"><i class="fas fa-phone m-r-5"></i><?php echo Configuration::$vars['contact']['phone']; ?></a></li>
                            </ul>
                        </nav>
                        <h6 class="m-b-5 text-uppercase text-light">{$lang.rrss}</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['whatsapp']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-whatsapp m-r-5"></i><?php echo Configuration::$vars['rrss']['whatsapp']['user']; ?></a></li>
                                <li class="m-b-5"><a href="<?php echo Configuration::$vars['rrss']['facebook']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-facebook m-r-5"></i><?php echo Configuration::$vars['rrss']['facebook']['user']; ?></a></li>
                                <li><a href="<?php echo Configuration::$vars['rrss']['instagram']['url']; ?>" target="_blank" class="text-light"><i class="fab fa-instagram m-r-5"></i><?php echo Configuration::$vars['rrss']['instagram']['user']; ?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 m-b-20 m-b-md-0">
                        <h6 class="m-b-5 text-uppercase text-light">{$lang.website}</h6>
                        <nav>
                            <ul class="list-unstyled">
                                <li class="m-b-5"><a href="/shop" class="text-light">{$lang.shop}</a></li>
            					<li class="m-b-5"><a href="/care" class="text-light">{$lang.care}</a></li>
            					<li class="m-b-5"><a href="/stay" class="text-light">{$lang.stay}</a></li>
            					<li class="m-b-5"><a href="/entertain" class="text-light">{$lang.entertain}</a></li>
            					<li class="m-b-5"><a href="/taste" class="text-light">{$lang.taste}</a></li>
            					<li class="m-b-5"><a href="/work" class="text-light">{$lang.work}</a></li>
            					<li class="m-b-5"><a href="/events" class="text-light">{$lang.events}</a></li>
            					<li class="m-b-5"><a href="/contact" class="text-light">{$lang.contact}</a></li>
                                <li><a href="/aviso-de-privacidad" class="text-light">{$lang.privacy_notice}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                        <figure>
                            <img src="{$path.images}logotype_white.svg" alt="Logotype" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <p class="text-light">Copyright © 2021 <strong><?php echo Configuration::$web_page; ?></strong> <i data-desktop class="fas fa-heart" style="color:#f44336;"></i><br data-mobile-block> {$lang.website} {$lang.design_by} <a href="mailto:jmafud@temasoluciona.mx" target="_blank" class="text-light"><strong>Tema Soluciona</strong></a> <br data-mobile-block> & {$lang.development_by} <a href="https://codemonkey.com.mx" target="_blank" class="text-light"><strong>Code Monkey</strong></a></p>
            </div>
        </footer>
        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>
        <script defer src="https://kit.fontawesome.com/743152b0c5.js"></script>
        {$dependencies.js}
        {$dependencies.other}
    </body>
</html>

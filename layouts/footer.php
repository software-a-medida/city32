<?php defined('_EXEC') or die; ?>
        <footer class="main-footer">
            <section class="footer m-b-30">
                <div class="logo m-b-30">
                    <figure class="m-auto" style="width: 220px;">
                        <img src="{$path.images}logotype.svg" alt="" class="img-fluid">
                    </figure>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-unstyled m-0">
                                <li>
                                    <a href="/" class="btn btn-link text-uppercase p-0">Shop</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-link text-uppercase p-0" style="opacity: 0.3;">Care</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-link text-uppercase p-0" style="opacity: 0.3;">Stay</a>
                                </li>
                                <li>
                                    <a href="/entertain" class="btn btn-link text-uppercase p-0">Entertain</a>
                                </li>
                                <li>
                                    <a href="/taste" class="btn btn-link text-uppercase p-0">Taste</a>
                                </li>
                                <li>
                                    <a href="/work" class="btn btn-link text-uppercase p-0">Work</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-link text-uppercase p-0" style="opacity: 0.3;">Events</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-link text-uppercase p-0" style="opacity: 0.3;">Contact</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-link text-uppercase p-0" style="opacity: 0.3;">Map</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-unstyled m-0">
                                <li>
                                    <p class="m-0 text-uppercase p-tb-5"><strong>Contacto</strong></p>
                                </li>
                                <li>
                                    <p class="m-0 text-uppercase p-tb-5"><strong>+52 9999 46 7288</strong></p>
                                </li>
                                <li>
                                    <p class="m-0 text-uppercase p-tb-5"><strong>AV. ANDRÉS GARCÍA LAVÍN</strong></p>
                                </li>
                                <li>
                                    <p class="m-0 text-uppercase p-tb-5"><strong>POR PERFÉRICO NORTE.</strong></p>
                                </li>
                                <li>
                                    <p class="m-0 text-uppercase p-tb-5"><strong>MÉRIDA, YUCATÁN, MÉXICO</strong></p>
                                </li>
                                <li>
                                    <p class="m-0 text-uppercase p-tb-5"><strong>HOLA@CITY32.MX</strong></p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <form class="footer-form m-t-40">
                                <input type="text" placeholder="Correo Electrónico" />
                                <button type="button" class="btn btn-dark">Inscribirse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="copyright">
                <div class="container">
                    © 2020 <b>{$vkye_webpage}</b> <i class="mdi mdi-heart text-danger"></i> by <a href="https://codemonkey.com.mx" target="_blank">codemonkey.com.mx</a>
                </div>
            </section>
        </footer>

        <script src="{$path.js}jquery-3.4.1.min.js"></script>
        <script src="https://cdn.codemonkey.com.mx/js/valkyrie.js?v=1.0"></script>
        <script src="https://cdn.codemonkey.com.mx/js/codemonkey.js?v=1.0"></script>
        <script src="{$path.js}scripts.js?v=1.0"></script>

        {$dependencies.js}

        {$dependencies.other}
    </body>
</html>

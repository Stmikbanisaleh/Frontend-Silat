<!--=== Footer v8 ===-->
<div class="footer-v8">
    <footer style="background:#1672af;" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 md-margin-bottom-50">

                    <h2>Akses Cepat</h2>
                    <!-- Footer Lists -->
                    <ul class="footer-lists">
                        <?php foreach ($akses as $ak) { ?>
                        <li><a href="<?= $ak['url']; ?>"><?= $ak['nama_link']; ?>&nbsp;<i class="fa fa-angle-right"></i> </a></li>
                        <?php } ?>
                    </ul>
                    <!-- End Footer Lists -->
                </div>

                <div class="col-md-4 col-sm-6 md-margin-bottom-50">

                    <h2>Tautan Lainnya</h2>
                    <!-- Footer Lists -->
                    <ul class="footer-lists">
                        <?php foreach ($link as $ln) { ?>
                        <li><a href="<?= $ln['url_web']; ?>"><?= $ln['nama_link']; ?>&nbsp;<i class="fa fa-angle-right"></i> </a></li>
                        <?php } ?>
                    </ul>
                    <!-- End Footer Lists -->
                </div>


                <div class="col-md-4 col-sm-6 ">
                    <h2>Hubungi Kami</h2>
                    <p>Jl. Pemuda Persil No. 1 </p>
                    <p>Rawamangun, Jakarta Timur </p>
                    <hr>
                    <p>Phone: 800 123 3456</p>
                    <p>Fax: 800 123 3456</p>
                    <hr>
                    <p>Email Address: <a href="#">info@lapan.go.id</a></p>


                    <div class="tes margin-top-20">
                        <!-- Social Icons -->
                        <ul class="social-icon-list margin-bottom-20 matgin-top-20">
                            <li><a href="https://twitter.com/LAPAN_RI"><i class="rounded-x fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/LapanRI"><i class="rounded-x fa fa-facebook"></i></a></li>
                        </ul>
                        <!-- End Social Icons -->
                    </div>

                </div>
            </div>
            <!--/end row-->
        </div>
        <!--/end container-->
    </footer>

    <footer style="background:#fff;" class="copyright">
        <div class="container">
            <ul class="list-inline terms-menu">
                <?php $tahun = date("Y"); ?>
                <li><?= $tahun ?> &copy; All Rights Reserved.</li>
            </ul>
        </div>
        <!--/end container-->
    </footer>
</div>
<!--=== End Footer v8 ===-->

<div class="cd-user-modal">
    <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container">
        <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="javascript:void(0);">Login</a></li>
            <li><a href="javascript:void(0);">Register</a></li>
        </ul>

        <div id="cd-login">
            <!-- log in form -->
            <form class="cd-form">
                <p class="social-login">
                    <span class="social-login-facebook"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></span>
                    <span class="social-login-google"><a href="#"><i class="fa fa-google"></i> Google</a></span>
                    <span class="social-login-twitter"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></span>
                </p>

                <div class="lined-text"><span>Or use your account on Blog</span>
                    <hr>
                </div>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="text" placeholder="Password">
                    <a href="javascript:void(0);" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">Remember me</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" value="Login">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="javascript:void(0);">Forgot your password?</a></p>
            <!-- <a href="javascript:void(0);" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup">
            <!-- sign up form -->
            <form class="cd-form">
                <p class="social-login">
                    <span class="social-login-facebook"><a href="https://www.facebook.com/LapanRI"><i class="fa fa-facebook"></i> Facebook</a></span>
                    <span class="social-login-google"><a href="#"><i class="fa fa-google"></i> Google</a></span>
                    <span class="social-login-twitter"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></span>
                </p>

                <div class="lined-text"><span>Or register your new account on Blog</span>
                    <hr>
                </div>

                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">Username</label>
                    <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="text" placeholder="Password">
                    <a href="javascript:void(0);" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">I agree to the <a href="javascript:void(0);">Terms</a></label>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Create account">
                </p>
            </form>

            <!-- <a href="javascript:void(0);" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <div id="cd-reset-password">
            <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="javascript:void(0);">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="javascript:void(0);" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->
</div>
<!--/wrapper-->


<!-- JS Global Compulsory -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="<?= base_url() ?>assets/plugins/back-to-top.js"></script>
<!--<script src="<?= base_url() ?>assets/plugins/smoothScroll.js"></script>-->
<script src="<?= base_url() ?>assets/plugins/counter/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/counter/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?= base_url() ?>assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script src="<?= base_url() ?>assets/plugins/master-slider/masterslider/masterslider.js"></script>
<script src="<?= base_url() ?>assets/plugins/master-slider/masterslider/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/modernizr.js"></script>
<script src="<?= base_url() ?>assets/plugins/login-signup-modal-window/js/main.js"></script> <!-- Gem jQuery -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-fixedheader/dataTables.fixedHeader.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bootstrap/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/dataTables.responsive.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/dataTables.buttons.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/buttons.html5.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/buttons.flash.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/buttons.print.js"></script>
<!-- JS Customization -->
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="<?= base_url() ?>assets/js/app.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/fancy-box.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/owl-carousel.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/master-slider-showcase1.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/style-switcher.js"></script>
<script src="<?= base_url() ?>assets/plugins/summernote/summernote.min.js"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        FancyBox.initFancybox();
        OwlCarousel.initOwlCarousel();
        OwlCarousel.initOwlCarousel2();
        StyleSwitcher.initStyleSwitcher();
        MasterSliderShowcase1.initMasterSliderShowcase1();
    });
</script>
<!--[if lt IE 9]>
	<script src="<?= base_url() ?>assets/plugins/respond.js"></script>
	<script src="<?= base_url() ?>assets/plugins/html5shiv.js"></script>
	<script src="<?= base_url() ?>assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>

</html>
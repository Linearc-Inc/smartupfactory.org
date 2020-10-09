<footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img width="100px"  src="https://smartupfactory.org/wp-content/uploads/2020/05/smart.png" alt=""></a></h2>
                            <ul class="d-flex flex-wrap align-items-center">
                                <!-- <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
                                <li><a href="https://www.facebook.com/smartupfactoryugand"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/smartupfactory/"><i class="fa fa-twitter"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                                <li><a href="https://www.linkedin.com/company/smartup-factory"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>
                        <?php
                        wp_nav_menu(array(
                        'theme_location' => 'site_map',
                        'container' => false,
                        'menu_class' => '',
                        ));
                        ?>
                    </div><!-- .col -->
                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                         <?php echo do_shortcode("[l_upcoming_footer_events]"); ?>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+256 783 062 777</span></li>
                                <li><i class="fa fa-envelope"></i><span>info@smartupfactory.org</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Tulla Rd Kawempe, Kampala Uganda.</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <!-- <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form> -->
                            <!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made by <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://linearc.biz" target="_blank">Linearc</a>
                        </p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->
    <?php wp_footer(); ?>
</body>
</html>

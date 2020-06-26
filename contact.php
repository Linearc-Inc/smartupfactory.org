<?php

 /**
  * Template Name: contact-us.
  */
 ?>
  <?php get_header(); ?>
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Get In touch with us</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, conse ctetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Integer accu msan sodales odio, id tempus velit ullamc.</p>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                                <!-- <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
                                <li><a href="https://www.facebook.com/smartupfactoryugand"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/smartupfactory/"><i class="fa fa-twitter"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                                <li><a href="https://www.linkedin.com/company/smartup-factory"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>+257 783 062 777</span></li>
                            <li><i class="fa fa-envelope"></i><span>info@smartupfatory.org</span></li>
                            <li><i class="fa fa-map-marker"></i><span>Tulla Rd Kawempe, Kampala Uganda</span></li>
                        </ul>
                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">
                    <form class="contact-form">
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <textarea rows="15" cols="6" placeholder="Messages"></textarea>

                        <span>
                            <input class="btn gradient-bg" type="submit" value="Contact us">
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->

                <div class="col-12">
                    <div class="contact-gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7390557945096!2d32.56674741431874!3d0.3611613640556279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbaedafae0a81%3A0x292fd72832c2600c!2sSmartup%20Factory!5e0!3m2!1sen!2sug!4v1593003704511!5m2!1sen!2sug" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    <?php get_footer(); ?>
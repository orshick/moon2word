<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moon2word
 */

?>

        <!-- footer -->
        <footer>
            <div class=" bg-white footer-top">
                <div class="container">
                    <div class="row margin-four">
                        <!-- phone -->
                        <!-- end phone -->
                        <!-- address -->
                        <div class="col-md-6 col-sm-6 text-center"><i class="icon-map-pin small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">Toronto, Canada</h6></div>
                        <!-- end address -->
                        <!-- email -->
                        <div class="col-md-6 col-sm-6 text-center"><i class="icon-envelope small-icon black-text"></i><h6 class="margin-two no-margin-bottom"><a href="mailto:info@moonbeyond.com" class="black-text">info@moonbeyond.com</a></h6></div>
                        <!-- end email -->
                    </div>
                </div>
            </div>
            <div class="container footer-middle">
                <div class="row">
                    <div class="col-md-3 col-sm-3 footer-link1 xs-display-none">
                        <!-- headline -->
                        <h5>About Us</h5>
                        <!-- end headline -->
                        <!-- text -->
                        <p class="footer-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <!-- end text -->
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4 footer-link2 col-md-offset-3">
                        <!-- headline -->
                        <h5>Company</h5>
                        <!-- end headline -->
                        <!-- link -->
                        <ul>
                            <li><a href="about-us.html">About Company</a></li>
                            <li><a href="about-us.html">What We Do</a></li>
                            <li><a href="about-us.html">What We Think</a></li>
                        </ul>
                        <!-- end link -->
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  footer-link3">
                        <!-- headline -->
                        <h5>Services</h5>
                        <!-- end headline -->
                        <!-- link -->
                        <ul>
                            <li><a href="services.html">Web Developmenteriffic</a></li>
                            <li><a href="services.html">Graphic Design</a></li>
                            <li><a href="services.html">Copywriting</a></li>
                            <li><a href="services.html">Online Marketing</a></li>
                        </ul>
                        <!-- end link -->
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-4  footer-link4">
                        <!-- headline -->
                        <h5>Introduction</h5>
                        <!-- end headline -->
                        <!-- link -->
                        <ul>
                            <li><a href="team-members.html">Team Members</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="our-clients.html">Our Clients</a></li>
                        </ul>
                        <!-- end link -->
                    </div>
                </div>
                <div class="wide-separator-line bg-mid-gray no-margin-lr margin-three no-margin-bottom"></div>
                <div class="row margin-four no-margin-bottom">
                    <div class="col-md-6 col-sm-12 sm-text-center sm-margin-bottom-four">
                        <!-- link -->
                        <ul class="list-inline footer-link text-uppercase">
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="blog-masonry-3columns.html">Blog</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                        <!-- end link -->
                    </div>
                    <div class="col-md-6 col-sm-12 footer-social text-right sm-text-center">
                        <!-- social media link -->
                        <a target="_blank" href="https://www.facebook.com/Moon-Beyond-1683370475243357"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                        <!-- end social media link -->
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark-gray footer-bottom">
                <div class="container">
                    <div class="row margin-three">
                        <!-- copyright -->
                        <div class="col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one">
                            &copy; 2016 Moon Beyond.
                        </div>
                        <!-- end copyright -->
                        <!-- logo -->
                        <div class="col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center">
                            <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/small-logo-grey.png" alt=""/></a>
                        </div>
                        <!-- end logo -->
                    </div>
                </div>
            </div>
            <!-- scroll to top --> 
            <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
            <!-- scroll to top End... --> 
        </footer>
        <!-- end footer -->


<?php wp_footer(); ?>

<!-- javascript libraries / javascript files set #1 --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/skrollr.min.js"></script>  
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/smooth-scroll.js"></script>
 <!-- jquery appear -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.appear.js"></script>
<!-- animation -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
<!-- page scroll -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/page-scroll.js"></script>
<!-- easy piechart-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easypiechart.js"></script>
<!-- parallax -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.parallax-1.1.3.js"></script>
<!--portfolio with shorting tab --> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.isotope.min.js"></script> 
<!-- owl slider  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
<!-- magnific popup  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/popup-gallery.js"></script>
<!-- text effect  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/text-effect.js"></script>
<!-- revolution slider  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.revolution.js"></script>
<!-- counter  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/counter.js"></script>
 <!-- countTo -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.countTo.js"></script>
<!-- fit videos  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvids.js"></script>
<!-- imagesloaded  -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/imagesloaded.pkgd.min.js"></script>
<!-- hamburger menu-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/hamburger-menu.js"></script>
<!-- setting --> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>	

</body>
</html>

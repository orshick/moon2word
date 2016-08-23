<?php
/*
    Template Name: Home
*/

    get_header(); ?>

        <!-- slider -->
        <section id="slider" class="no-padding position-relative">
            <div id="owl-demo" class="owl-carousel owl-theme light-pagination square-pagination dark-pagination-without-next-prev-arrow main-slider">

                <?php if ( get_field('main_slider')) : while ( has_sub_field('main_slider')) : ?>
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('<?php the_sub_field('slide_image') ?>');">
                    <div class="container full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle slider-text-middle6 padding-left-right-px wow fadeInUp">
                                    <span class="slider-title-big6 white-text text-uppercase font-weight-700 letter-spacing-3"><?php the_sub_field('slide_title') ?> </span>
                                    <span class="white-text text-small text-uppercase letter-spacing-10 margin-three no-margin-bottom display-block xs-letter-spacing-6"><?php the_sub_field('slide_subtitle') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end slider item -->
                <?php endwhile; endif; ?>
                

            </div>
            <div class="divider grey"></div>
            
        </section>

        <!-- end slider -->

        <!-- Large Logo -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-10 text-center center-col">
                        <img src="<?php the_field('large_logo_image') ?>" alt="Moon Beyond Logo">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Large Logo -->

        <div class="container headingDescription project">
            <div class="col-sm-6 headingDescription-title">
                <h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/orange_symbol.png" class="headingDescription-titleSymol" alt="">Moon Beyond Creative<?php echo get_field('first_heading'); ?></h2>
            </div>
            <div class="col-sm-6 headingDescription-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis explicabo ratione voluptatibus, sapiente ad, suscipit labore perferendis ducimus voluptates rerum, omnis animi dolorum sunt aspernatur! Expedita autem odio, asperiores deserunt!<?php echo get_field('first_heading_description'); ?>
            </div>
        </div>
       
        <!-- Parallax 1 -->
        <section class="fix-background position-relative home-parallax-1-section parallax" style="background-image:url('<?php the_field('parallax_background') ?>');">
            <div class="container position-relative">
                <div class="row parallax-section-text home-parallax-1 text-center">
                    <p class="col-xs-12"><?php the_field('parallax_1_text') ?></p>
                </div>
            </div>
            <div class="divider orange"></div>
        </section>
        <!-- END Parallax 1 -->
        
        <!-- Featured Slider Heading -->
        <section class="wow fadeIn">
            <div class="heading-section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <h1><img src="<?php bloginfo('template_directory'); ?>/images/label-numbers-home1.png"><?php the_field('featured_projects_title') ?></h1>
                            <h2><?php the_field('featured_projects_subtitle') ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Slider Heading END -->

        <!-- Featured Project Slider -->
        <section class="no-padding case-study bg-gray wow fadeIn featured-project-slider">
            <div class="container-fluid">
                <div class="row">
                    <div id="owl-demo-small" class="owl-carousel owl-theme dark-pagination  dark-pagination-without-next-prev-arrow">

                        <?php if ( get_field('featured_item_slider')) : $i = 1; while ( has_sub_field('featured_item_slider')) : ?>
                        <!-- slider item -->
                        <div class="item">
                            <div class="col-lg-6 col-md-6 case-study-img cover-background" style="background-image:url('<?php the_sub_field('image') ?>');"></div>
                            <div class="col-lg-6 col-md-6 case-study-details">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <span class="about-number black-text font-weight-400 letter-spacing-2 xs-no-border xs-no-padding-left xs-display-none"><?php printf ("%02u", $i); ?> </span>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 about-text position-relative xs-text-center">
                                    <p class="title-small text-uppercase letter-spacing-3 black-text font-weight-600 no-margin-bottom"><?php the_sub_field('title') ?></p>
                                    <span class="case-study-work letter-spacing-3"><?php the_sub_field('labels') ?></span>
                                    <p class="width-90 xs-width-100"><?php the_sub_field('description') ?></p>
                                    <a href="<?php the_sub_field('link') ?>" class="highlight-button-black-border btn btn-small no-margin-bottom sm-no-margin">View Case Study</a>
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                        <!-- end slider item -->
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- END Featured Slider -->

        <div class="container headingDescription">
            <div class="col-sm-6 headingDescription-title">
                <h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/orange_symbol.png" class="headingDescription-titleSymol" alt="">Fishes are fishy<?php echo get_field('first_heading'); ?></h2>
            </div>
            <div class="col-sm-6 headingDescription-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero facilis dignissimos, qui sint eveniet. Perferendis ab temporibus veritatis natus neque doloremque odit quia, quod, beatae ducimus. Expedita quis ducimus commodi?<?php echo get_field('first_heading_description'); ?>
            </div>
        </div>

        <!-- Featured Projects Parallax -->
        <section class="fix-background featured-project-parallax parallax" style="background-image:url('<?php the_field('featured_project_parallax_background') ?>');">
            <div class="container position-relative">
                <div class="row parallax-section-text featured-project-description text-center">
                    <div class="col-xs-12 signature-lines">
                        <p><span id="parallaelogram"></span><?php the_field('featured_project_description') ?></p>
                    </div>
                    
                </div>
            </div>
            <div class="divider black"></div>
        </section>
        <!-- END Featured Projects Parallax -->




<script>
var templateDir = "<?php echo get_stylesheet_directory_uri() ?>";
</script>




        <!-- Contact Us Section -->
        <!-- form -->
                    <form id="contactusform" action="javascript:void(0)" method="post">
                        <div class="col-md-10 col-sm-12 center-col">
                            <div class="row"><div class="col-md-12 col-sm-12"><div class="wide-separator-line margin-ten"></div></div>
                                <div class="col-md-12 col-sm-12"><div id="success"></div></div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input name="name" type="text" placeholder="Your Name" />
                                <input name="email" type="text" placeholder="Your Email"  />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <textarea name="comment" placeholder="Your Message" ></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="col-md-6 col-sm-6 no-padding-left"><span class="required">*Please complete all fields correctly</span></div>
                                <div class="col-md-3 col-sm-6 f-right no-padding-right"><input id="contact-us-button" name="send message" type="button" value="send message" class="btn btn-black no-margin-top f-right no-margin-lr"></div>
                            </div>
                        </div>
                    </form>
                    <!-- end form -->

                    

        <!-- end new project section -->
<?php
get_footer();
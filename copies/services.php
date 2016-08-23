<?php
/*
	Template Name: Services
*/

    get_header(); ?>

    <!-- head section -->
    <section class="page-title parallax11 parallax-fix page-title-large">
        <div class=""></div>
        <img class="parallax-background-img" src="<?php $background_image = get_field('background_image'); echo $background_image['url']; ?>" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center animated fadeInUp">
                    <div class="separator-line bg-yellow no-margin-top margin-four"></div>
                    <!-- page title --> 
                    <h1 class="white-text"><?php echo get_field('title'); ?></h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end head section -->
    <!-- portfolio section -->
    <section class="no-margin-top content-section">
        <div class="extra-texture"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/extra_white_texture.png"><img class="symbol" src="<?php the_field( 'symbol' ) ?>"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center wow fadeIn features-2 heading" data-wow-duration="300ms">
                    <h1 class="white-text"><?php echo get_field('title'); ?></h1>
                    <h5>What we aim to offer</h5>
                    <p><?php echo get_field('blurb'); ?></p>
                </div>
            </div>

            <div class="row">
                <!-- features item -->
                <?php if ( get_field('three_skills')) : while ( has_sub_field('three_skills')) : ?>                            
                    <div class="col-md-4 col-sm-4 text-center wow fadeIn features-2" data-wow-duration="300ms">
                        <div class="key-person">
                            <div class="key-person-img"><img src="<?php the_sub_field('skill_image') ?>" alt=""></div>
                            <div class="key-person-details no-border no-padding-bottom">
                                <h5><?php the_sub_field('skill_name') ?></h5>
                                <div class="separator-line bg-black"></div>
                                <p><?php the_sub_field('skill_desc') ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>                
            </div>
            <!-- end features item -->
        </div><!-- end container -->
        <div class="container-fluid">
            <!-- Split Background -->
            <section class="no-margin-top content-section split-background">
                <?php if ( get_field('main_skill_bg1')) : while ( has_sub_field('main_skill_bg1')) : ?>                            
                    <img src="<?php the_sub_field('image') ?>" alt="">
                <?php endwhile; endif; ?>
                <div class="divider grey"></div>
            </section>
            <!-- end split background-->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" >
                    <div class="tab-content">
                        <!-- work grid -->
                        <ul class="service-items">
                            <!-- work item ( external page ) -->
                            <?php if ( get_field('services')) : while ( has_sub_field('services')) : ?>

                                <?php
                                $background_color = get_sub_field('background_color');
                                $image = get_sub_field('image');
                                $text_color = get_sub_field('text_color');
                                $name = get_sub_field('name');
                                $description = get_sub_field('description');
                                $link = get_sub_field('link');
                                $link_color = get_sub_field('link_color');
                                ?>
                                <div class="service-item" style='background-color: #<?php the_sub_field('background_color') ?>'>
                                    <li>
                                        <img src="<?php the_sub_field('image') ?>" alt="">
                                    </li>
                                    <li class="content">
                                        <h3 style="color: #<?php the_sub_field('text_color') ?>;"><?php the_sub_field('name') ?></h3>
                                        <p style="color: #<?php the_sub_field('text_color') ?>"><?php the_sub_field('description') ?></p>
                                        <a href="<?php the_sub_field('link') ?>" style="color: #<?php echo $link_color ?>; border: 0.2ex solid #<?php echo $link_color ?>">EXAMPLES</a>
                                    </li>
                                    <br style="clear: both;" />
                                </div>
                            <?php endwhile; endif; ?>
                            <!-- end work item -->
                        </ul>
                        <!-- end work grid -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Split Background -->
        <section class="no-margin-top content-section split-background">
            <?php if ( get_field('main_skill_bg2')) : while ( has_sub_field('main_skill_bg2')) : ?>                            
                <img src="<?php the_sub_field('image') ?>" alt="">
            <?php endwhile; endif; ?>
            <div class="divider black"></div>
        </section>
        <div class="divider"></div>
        <!-- Split Background END-->
        
    </div>
</section>
<!-- end portfolio section -->

<!-- new project -->
<section class="new-project no-padding-top">
    <div class="container">
        <div class="row center-col text-center wow fadeInUp">
            <div class="separator-line bg-yellow no-margin-top margin-five"></div>
            <h5>We'd love to hear about your project.</h5>
            <a class="btn highlight-button-black-border margin-four no-margin-bottom no-margin-lr" href="contact-us.html">Start Now</a>
        </div>
    </div>
</section>
<!-- end new project -->

<?php
get_footer();
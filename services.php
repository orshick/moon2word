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
                <div class="col-sm-12 text-center wow fadeIn features-2 heading" data-wow-duration="300ms">
                    <h1 class="white-text"><?php echo get_field('title'); ?></h1>
                    <h2 class="headingSubtitle">Moon Beyond Creative</h2>
                    <div class="container headingDescription">
                        <div class="col-sm-5 headingDescription-title">

                            <h2><img src="<?php bloginfo('stylesheet_directory'); ?>/images/orange_symbol.png" class="headingDescription-titleSymol" alt="">Learn more about us</h2>

                        </div>
                        <div class="col-sm-7 headingDescription-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti praesentium at provident, excepturi iusto est accusamus dignissimos fugit inventore recusandae commodi doloribus repellat sed, sapiente quos. Cupiditate vero quis possimus.<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti praesentium at provident, excepturi iusto est accusamus dignissimos fugit inventore recusandae commodi doloribus repellat sed, sapiente quos. Cupiditate vero quis possimus</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="offers text-center">
                <div class="row">
                    <h5 class="offerHeading"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/orange_symbol.png" class="offerHeading-symbol" alt="">What we aim to offer</h5>
                    <p><?php echo get_field('blurb'); ?></p>
                </div>
                <!-- features item -->
                <div class="row">
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
            </div>
        </div><!-- end container -->
        <div class="container-fluid">
            <!-- Split Background -->
            <?php if ( get_field('main_skill_bg1')) : while ( has_sub_field('main_skill_bg1')) : ?>
            <section class="no-margin-top content-section split-background" style="background: url(<?php the_sub_field('image') ?>);">
                <div class="divider grey"></div>
                    <img src="<?php the_sub_field('image') ?>" style="visibility: hidden;">
                    
                    <div class="centerizer">
                        <img src="<?php bloginfo('template_directory'); ?>/images/main_services_graphic.png">
                        <h1>Main Services</h1>
                        <h2>headline about main services</h2>
                    </div>
                
                
            </section>
            <?php endwhile; endif; ?>
        <!-- end split background-->
        <!-- Main Services-->
        </div>
        <div class="container-fluid">
            <ul class="service-items">
                <!-- work item -->
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
            <script>
var templateDir = "<?php echo get_template_directory_uri(); ?>/contact.php";
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
        </div>
        <!-- END Main Services-->
        <!-- All Services -->
        <section class="all-services">
            <div class="container">
                <?php $i = 0 ?>
                <?php while ( have_rows('all_services')) : the_row();?>
                <?php if ( $i % 3 === 0 ) { ?>
                <div class="row">
                <?php } ?>
                    <div class="col-sm-4 all-skills">                    
                        <div class="img-box">
                            <div class="heading-container">
                                <h2><?php the_sub_field('skill_name') ?></h2>
                            </div>                            
                            <img src="<?php the_sub_field('skill_image') ?>" alt="">
                        </div>
                        <p><?php the_sub_field('skill_description') ?></p>
                    </div>
                <?php $i++; ?>
                <?php if ( $i % 3 === 0 ) {?>
                </div>
                <?php } ?>
                <?php endwhile; ?>
            </div>
        </section>
        <div class="divider"></div>
        <!-- end all service-->
        <!-- Split Background -->
        <section class="no-margin-top content-section split-background">
            <?php if ( get_field('main_skill_bg2')) : while ( has_sub_field('main_skill_bg2')) : ?>                            
                <img src="<?php the_sub_field('image') ?>" alt="">
            <?php endwhile; endif; ?>
            <div class="divider black"></div>
        </section>
        <div class="divider"></div>
        <!-- End Split Background-->

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
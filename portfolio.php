<?php
/*
	Template Name: Portfolio
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
        <section class="work-3col gutter no-margin-top content-section">
            <div class="extra-texture"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/extra_white_texture.png"><img class="symbol" src="<?php the_field( 'symbol' ) ?>"></div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" >
                        <div class="text-center">
                            <!-- work filter -->
                            <ul class="portfolio-filter nav nav-tabs nav-tabs-light wow fadeInUp">
                                <li class="nav active"><a href="#" data-filter="*">All</a></li>
                                <li class="nav"><a href="#" data-filter=".design">Design</a></li>
                                <li class="nav"><a href="#" data-filter=".packaging">Packaging</a></li>
                                <li class="nav"><a href="#" data-filter=".web-development">Web Development</a></li>
                                <li class="nav"><a href="#" data-filter=".graphics">Graphics</a></li>
                            </ul>
                            <!-- end work filter -->
                        </div>
                    </div>
                    <div class="col-md-12 grid-gallery overflow-hidden" >
                        <div class="tab-content">
                            <!-- work grid -->
                            <ul class="grid masonry-items">
                                <!-- work item ( external page ) -->
                                <?php $loop = new WP_Query( array( 'post_type' => 'project', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <?php $project_thumbnail = get_field('project_thumbnail'); ?>
                                <li class="<?php $tags = get_the_tags();
                                                    if ($tags) {
                                                        foreach($tags as $tag) {
                                                            $tag = $tag->name;
                                                            $tag = preg_replace('/\s/', '-', $tag);
                                                            $tag = strtolower($tag);
                                                            echo $tag . ' ';
                                                        }
                                                    }
                                            ?>" >
                                            
                                    <figure>
                                        <div class="gallery-img"><a href="<?php the_field('link'); ?>"><img src="<?php echo $project_thumbnail['url']; ?>" alt=""></a></div>
                                        <figcaption>
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php the_field('description'); ?></p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <?php endwhile ?>
                                <!-- end work item -->
                            </ul>
                            <!-- end work grid -->
                        </div>
                    </div>

                </div>
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
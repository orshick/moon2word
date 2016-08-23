<?php
/*
	Template Name: Project Page
*/

$header_image = get_field('header_image');

get_header(); ?>

        <!-- next/previous project -->
        <div class="next-previous-project xs-display-none">
            <div class="next-project">
                <a href="single-project-page2.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/next-project.png" class="next-project-img" alt="Next Project"><span>Next Project</span><!-- next project image --><img src="http://placehold.it/800x500" alt="Next Project"><!-- end next project image --></a>
            </div>
            <div class="previous-project">
                <a href="single-project-page5.html"><!-- previous project image --><img src="http://placehold.it/800x500" alt="Previous Project"><!-- end previous project image --><img src="<?php bloginfo('stylesheet_directory'); ?>/images/previous-project.png" class="previous-project-img" alt="Previous Project"><span>Previous Project</span></a>
            </div>
        </div>
        <!-- end next/previous project -->

        <!-- content section -->
        <!-- end content section -->

        <!-- main project images -->
        <?php if ( !empty($header_image)) :  ?>
        <section id="project-img-small" class="project-img">
            <div class="container">
                <div class="row">
                    	<div class="col-md-12"><img src="<?php echo $header_image['url']; ?>" class="wow" alt="<?php echo $header_image['alt']; ?>"/></div>                	
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Project Blurb -->
        <?php $project_title = get_field('project_title'); if ( !empty($project_title)) :  ?>
        <section class="no-padding">
            <div class="container">
                <div class="row project-content">
                    <div class="col-md-7 col-sm-10 center-col text-center text-med">
                        <h6 class="wow"><strong class="black-text"><?php echo $project_title; ?></strong></h6>
                        <p class="wow"><?php $desc = the_field('project_description'); echo $desc; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- End Project Blurb -->

        <?php 
        	$i = 1;
            

        	while ( $project_image = get_field('project_image_'.$i) && !empty($project_image)) : ?>

	        	<section id="project-img-small" class="no-padding-top project-img">
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-12"><img src="<?php echo $project_image['url'] ?>" class="wow" alt="<?php echo $project_image['alt'] ?>"/></div>
		                </div>
		            </div>
	        	</section>


        	<?php $i++; endwhile; ?>
        <!-- end main project images -->
        <!-- project images section -->
        <!-- end project images -->

        <!-- related projects section -->
        <section class="work-3col gutter work-with-title wide wide-title border-top related-projects xs-no-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow">
                        <h3 class="section-title">Other Projects</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-gallery overflow-hidden" >
                        <div class="tab-content">
                            <!-- work grid -->
                            <ul class="grid masonry-items">
                                <!-- work item -->
                                <li>
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page4.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/GreenCities/greencities-presentation-website_07.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="single-project-page4.html">Coconuts</a></h3>
                                            <p>Fish Mongering</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end work item -->
                                <!-- work item -->
                                <li>
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page5.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/GreenCities/greencities-presentation-website_07.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="single-project-page5.html">Lines Shirt</a></h3>
                                            <p>Logo &amp; Brochure</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end work item -->
                                <!-- work item -->
                                <li>
                                    <figure>
                                        <div class="gallery-img"><a href="single-project-page1.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/GreenCities/greencities-presentation-website_07.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="single-project-page1.html">Dot Agency</a></h3>
                                            <p>Branding &amp; Identity</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <!-- end work item -->
                            </ul>
                            <!-- end work grid -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end related projects section -->

<?php
get_footer();

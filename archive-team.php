<?php get_header(); ?>
    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
            data-background="<?php echo get_template_directory_uri(). '/assets/images/banner/banner-inner-page.jpg'; ?>">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><?php the_archive_title(); ?></h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo get_home_url();?>">Home</a>
                    <span><i class="fa-regular fa-angles-right mx-2"></i><?php echo str_replace("Archives: ", "", get_the_archive_title()); ?></span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Event area start here -->
        <section class="event-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <?php 
                        $args = array(
                        'post_type' => 'team',
                        'posts_per_page' => '-1',
                        );
                        $query = new WP_Query( $args );
                    
                        if ($query-> have_posts() ) : 
                        while($query-> have_posts()  ) : $query-> the_post();
                    ?>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="team__item image">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <div class="team__content">
                                <div class="content">
                                    <h4><a href="<?php the_permalink(); ?>" class="primary-hover"><?php the_title(); ?></a></h4>
                                    <span><?php the_field('subtitle'); ?></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php endwhile; else: _e('No post found','kaliar');
                        endif; 
                    ?>
                </div>
            </div>
        </section>
        <!-- Event area end here -->
    </main>

    <?php get_footer(); ?>
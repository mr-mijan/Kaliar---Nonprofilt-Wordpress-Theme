
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
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; // If we have a 'paged' parameter, set $paged to that value, if not set it to 1
                        $args = array(
                        'post_type' => 'event',
                        'posts_per_page' => '-1',
                        'paged'     => $paged,

                        );
                        $query = new WP_Query( $args );
                    
                        if ($query-> have_posts() ) : 
                        while($query-> have_posts()  ) : $query-> the_post();
                    ?>
                    
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="event__inner-item">
                            <div class="image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <span class="blog-tag"><?php the_field('event_date'); ?></span>
                            </div>
                            <div class="blog__content pt-4">
                                <ul>
                                    <li>
                                    <i class="fa-solid fa-location-dot primary-color"></i>
                                       <span class="primary-hover transition"><?php the_field('event_location'); ?></span>
                                    </li>
                                    <li>
                                    <i class="fa-regular fa-clock primary-color"></i>
                                        <span><?php the_field('event_time') ?></span>
                                    </li>
                                </ul>
                                <h4 class="mt-15 mb-15"><a href="<?php the_permalink(); ?>" class="primary-hover"><?php the_title(); ?></a></h4>
                                <?php the_excerpt(); ?>
                                <a class="mt-4 read-more fw-bold transition" href="<?php the_permalink(); ?>">EXPLORE MORE <i
                                        class="fa-solid fa-arrow-right ms-1"></i></a>
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
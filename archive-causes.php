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
                        'post_type' => 'causes',
                        'posts_per_page' => '3',
                        );
                        $query = new WP_Query( $args );
                    
                        if ($query-> have_posts() ) : 
                        while($query-> have_posts()  ) : $query-> the_post();
                    ?>
                     <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="cause__item">
                            <div class="cause__image image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                                <span class="cause-tag"><?php the_field('causes_type'); ?></span>
                            </div>
                            <div class="cause__content">
                                <h4 class="mb-4 mt-20"><a href="<?php the_permalink(); ?>" class="primary-hover"><?php the_title(); ?></a></h4>
                                <div class="progress-area">
                                    <div class="progress__item">
                                        <div class="progress__content" style="width: <?php the_field('causes_progress'); ?>%;"><span><?php the_field('causes_progress'); ?>%</span></div>
                                    </div>
                                    <div class="progress__goal mt-15">
                                        <h6>Goal : <span><?php the_field('goal'); ?></span></h6>
                                        <h6>Raised : <span><?php the_field('raised'); ?></span></h6>
                                    </div>
                                    <div class="btn-three mt-30">
                                        <span class="btn-circle">
                                        </span>
                                        <a href="<?php the_permalink(); ?>" class="btn-inner">
                                            <span class="btn-text">
                                                DONATE NOW
                                            </span>
                                        </a>
                                    </div>
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
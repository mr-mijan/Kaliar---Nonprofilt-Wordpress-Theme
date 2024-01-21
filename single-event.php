<?php get_header(); ?>
    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
            data-background="<?php echo get_template_directory_uri(). '/assets/images/banner/banner-inner-page.jpg'; ?>">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><?php the_title(); ?></h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo get_home_url();?>">Home <i class="fa-regular fa-angles-right mx-2"></i></a>
                    <a href="<?php echo get_post_type_archive_link('event');?>">Event</a>
                    <span><i class="fa-regular fa-angles-right mx-2"></i><?php the_title(); ?></span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->
        <section class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <div class="blog__item blog-single__left-item shadow-none">
                            <div class="image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="blog__content p-0">
                                <h4 class="mt-40 mb-30 fs-30"><?php the_title(); ?></h4>
                                <div class="event__content p-0 bor-bottom">
                                    <ul class="mb-4 gap-3">
                                        <li>
                                        <i class="fa-solid fa-location-dot primary-color"></i>
                                            <span><?php the_field('event_location') ?></span>
                                        </li>
                                        <li>
                                        <i class="fa-solid fa-calendar-days primary-color"></i>
                                            <span><?php the_field('event_date') ?></span>
                                        </li>
                                        <li>
                                        <i class="fa-regular fa-clock primary-color"></i>
                                            <span><?php the_field('event_time') ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <?php the_content(); ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="event-single__right-item">
                            <?php dynamic_sidebar( 'event_sidebar' ); ?>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <?php get_footer(); ?>
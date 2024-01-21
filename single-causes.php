<?php get_header(); ?>
    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
            data-background="<?php echo get_template_directory_uri(). '/assets/images/banner/banner-inner-page.jpg'; ?>">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><?php the_title(); ?></h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo get_home_url();?>">Home <i class="fa-regular fa-angles-right mx-2"></i></a>
                    <a href="<?php echo get_post_type_archive_link('causes');?>">Causes</a>
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
                        <div class="progress-area px-4 pb-4 pt-35 bor border-top-0">
                            <div class="progress__item">
                                <div class="progress__content" style="width: <?php the_field('causes_progress'); ?>%;"><span><?php the_field('causes_progress'); ?>%</span></div>
                            </div>
                            <div class="progress__goal mt-15">
                                <h6>Goal : <span><?php the_field('goal'); ?></span></h6>
                                <h6>Raised : <span><?php the_field('raised'); ?></span></h6>
                            </div>
                        </div>
                        <div class="blog__content p-0">
                        <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="blog-single__review shadow p-4 mt-60">
                        <?php echo do_shortcode ('[give_form id="82710"]')?>
                    </div>
                </div>
                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="event-single__right-item">
                            <?php dynamic_sidebar( 'causes_sidebar' ); ?>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <?php get_footer(); ?>
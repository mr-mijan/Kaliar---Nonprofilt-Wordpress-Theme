<?php get_header(); ?>
    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
            data-background="<?php echo get_template_directory_uri(). '/assets/images/banner/banner-inner-page.jpg'; ?>">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><?php the_title(); ?></h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo get_home_url();?>">Home <i class="fa-regular fa-angles-right mx-2"></i></a>
                    <a href="<?php echo get_post_type_archive_link('team');?>">Team</a>
                    <span><i class="fa-regular fa-angles-right mx-2"></i><?php the_title(); ?></span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->
        <section class="team-single pt-120 pb-120">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-single__image">
                            <img src="<?php the_post_thumbnail_url( ); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="team-single__content">
                            <div class="title pb-20 mb-20 bor-bottom">
                                <h3><?php the_title(); ?></h3>
                                <span class="primary-color mt-1"><?php the_field('subtitle'); ?></span>
                            </div>
                            <div class="team-single__info">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <?php get_footer(); ?>
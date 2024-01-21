<?php get_header(); ?>

    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
            data-background="<?php echo get_template_directory_uri(  ).'/assets/images/banner/banner-inner-page.jpg'; ?>">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Page Not Found</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo get_home_url(); ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>404</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Error area start here -->
        <section class="error-area pt-120 pb-120">
            <div class="container">
                <div class="error__item">
                    <div class="image mb-60">
                        <img src="<?php echo get_template_directory_uri(  ).'/assets/images/error/404.png'; ?>" alt="image">
                    </div>
                    <?php if(get_theme_mod('kaliar_404_text')){
                        ?>
                        <h2><?php echo esc_html(get_theme_mod('kaliar_404_text')); ?></h2>
                        <?php
                    } else{
                        ?>
                        <h2><?php echo esc_html('Whoops! This Page got Lostin converstion'); ?></h2>
                        <?php
                    } ?>
                    
                    <div class="btn-two mt-50">
                        <span class="btn-circle">
                        </span>
                        <a href="<?php echo get_home_url(); ?>" class="btn-inner">
                            <span class="btn-text"> GO BACK HOME</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Error area end here -->
    </main>
<?php get_footer(); ?>
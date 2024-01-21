<?php get_header(); ?>

<main>
    <!-- Page banner area start here -->
    <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
        data-background="<?php echo get_template_directory_uri(  ).'/assets/images/banner/banner-inner-page.jpg'; ?>">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><?php the_title();?></h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <a href="<?php echo get_home_url(); ?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i><?php the_title();?></span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- Page Content -->
    <?php the_content(); ?>

    </main>
<?php get_footer(); ?>
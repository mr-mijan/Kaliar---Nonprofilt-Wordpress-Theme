<?php get_header(); ?>
    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
            data-background="<?php echo get_template_directory_uri(). '/assets/images/banner/banner-inner-page.jpg'; ?>">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Search resultats for : <?php echo get_search_query()?></h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo get_home_url();?>">Home</a><span><i class="fa-regular fa-angles-right mx-2 text-white"></i><?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count; echo $count . ' - '; wp_reset_query(); ?> Articles were found for keyword  <strong> <?php echo get_search_query()?></span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

    <!-- Blog area start here -->
    <?php get_template_part('template_parts/blog-grid');  ?>
    <!-- Blog area end here -->
    </main>

   <?php get_footer(); ?>
<?php get_header(); ?>
<?php
global $post;
$author_id = $post->post_author;
?>
    <main>
        <!-- Page banner area start here -->
        <section class="banner__inner-page bg-image pt-160 pb-160 bg-image"
            data-background="<?php echo get_template_directory_uri(). '/assets/images/banner/banner-inner-page.jpg'; ?>">
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms"><?php the_title();?></h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <a href="<?php echo get_home_url();?>">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i><?php the_title();?></span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Blog single area start here -->
        <section class="blog-single-area pt-120 pb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 order-lg-1">
                        <div class="blog__item blog-single__left-item shadow-none">
                            <div class="image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="image">
                                <span class="blog-tag"><?php the_category(); ?></span>
                            </div>
                            <div class="blog__content p-0">
                                <h4 class="mt-20 mb-20 fs-30"><?php the_title(); ?></h4>
                                <ul class="pb-4 bor-bottom mb-20">
                                    <li><i class="fa-regular fa-user primary-color"></i>
                                    <span class="primary-hover transition text-capitalize">By <?php echo get_the_author_meta( 'display_name', $author_id ); ?></span>
                                    </li>
                                    <li><i class="fa-regular fa-calendar-days primary-color"></i><span><?php echo get_the_date(); ?></span>
                                    </li>
                                </ul>
                                <?php the_content(); ?>
                                <div class="tags-share mt-40">
                                    <div class="tags">
                                        <?php
                                            $before = '<strong>Tags:</strong>';
                                            $seperator = ''; // blank instead of comma
                                            $after = '';
                                            the_tags( $before, $seperator, $after );
										?>
                                    </div>
                                    <div class="share">
                                        <strong>Share:</strong>
                                        <?php if (function_exists('display_custom_social_share')) : ?>
                                                    <?php display_custom_social_share(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-single__review mt-60">
                            <?php
                            //If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="blog-single__right-item">
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog single area end here -->
    </main>
<?php get_footer(); ?>
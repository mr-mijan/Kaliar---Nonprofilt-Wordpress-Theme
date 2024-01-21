
<section class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            <?php 
                if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
            <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="blog__item">
                    <div class="image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <span class="blog-tag"><?php the_category(); ?></span>
                    </div>
                    <div class="blog__content pt-4">
                        <ul><li><i class="fa-regular fa-user primary-color"></i>
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="primary-hover transition text-capitalize">By <?php the_author(); ?></span></a></li>
                            <li><i class="fa-regular fa-calendar-days primary-color"></i><span><?php echo get_the_date(); ?></span></li>
                        </ul>
                        <h4 class="mt-20 pb-25 bor-bottom"><a href="<?php the_permalink(); ?>" class="primary-hover"><?php the_title(); ?></a></h4>
                        <a class="mt-4" href="<?php the_permalink(); ?>"><span class="read-more fw-bold transition">Read More <i class="fa-solid fa-arrow-right ms-1"></i></span></a>
                    </div>
                </div>
            </div>
            <?php endwhile; else: _e('No post found');
                endif; 
            ?>
        </div>
        <div class="pegi justify-content-center mt-80">
            <?php the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '<i class="fa-solid fa-arrow-left-long primary-color transition"></i>', 'kaliar' ),
                'next_text' => __( '<i class="fa-solid fa-arrow-right-long primary-color transition"></i>', 'kaliar' ),
            ) ); ?>
        </div>
    </div>
</section>
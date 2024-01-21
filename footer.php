 <!-- Footer area start here -->
 <footer class="footer-area secondary-bg overflow-hidden">
        <div class="footer__main-wrp">
            <div class="footer__shape-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="footer__shape__animation" src="<?php echo get_template_directory_uri(). '/assets/images/shape/footer-shape-left.png'; ?>" alt="shape">
            </div>
            <div class="footer__shape-right wow slideInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                <img class="footer__shape__animation-right" src="<?php echo get_template_directory_uri(). '/assets/images/shape/footer-shape-right.png'; ?>"
                    alt="shape">
            </div>
            <div class="container">
                <div class="footer__wrp pt-120 pb-120">
                    <div class="row g-4 justify-content-between">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <?php dynamic_sidebar( 'footer_1' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <?php dynamic_sidebar( 'footer_2' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <?php dynamic_sidebar( 'footer_3' ); ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                    <?php dynamic_sidebar( 'footer_4' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copytext">
            <?php if (get_theme_mod('kaliar_footer_copyright')){
                ?>
                    <p class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms"><?php echo get_theme_mod('kaliar_footer_copyright'); ?></p>
                <?php
                }
                else{
                    ?>
                    <p class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">&copy; All Copyright 2024 by <a
                    href="#" class="text-white primary-hover">Flexitheme</a></p>
                    <?php
                }
                
            ?>
         
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

<?php wp_footer(); ?>
</body>
</html>
<?php
class Kaliar_Latest_Post_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'kaliar_latest_post_widget',
            'Kaliar Latest Post',
            array( 'description' => 'A custom widget to display the latest posts with a user-defined limit and title.' )
        );
    }
    
    // Widget form creation
    public function form( $instance ) {
        $post_limit = isset( $instance['post_limit'] ) ? esc_attr( $instance['post_limit'] ) : 5;
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Latest Posts';
    
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'post_limit' ); ?>">Post Limit:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'post_limit' ); ?>" name="<?php echo $this->get_field_name( 'post_limit' ); ?>" type="number" value="<?php echo $post_limit; ?>" />
        </p>
        <?php
    }
    
    // Widget update
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : 'Latest Posts';
        $instance['post_limit'] = ( !empty( $new_instance['post_limit'] ) ) ? sanitize_text_field( $new_instance['post_limit'] ) : 5;
    
        return $instance;
    }
    
    // Widget display
    public function widget( $args, $instance ) {
        $post_limit = isset( $instance['post_limit'] ) ? intval( $instance['post_limit'] ) : 5;
        $title = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : 'Latest Posts';
    
        // Query latest posts
        $latest_posts = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => $post_limit,
        ) );
    
        // Display widget content
        if ( $latest_posts->have_posts() ) {
            echo $args['before_widget'];
            echo $args['before_title'] . $title . $args['after_title'];
            echo '<ul class="post single-post">';
            while ( $latest_posts->have_posts() ) {
                $latest_posts->the_post();
               ?>
                <li class="mb-3">
                    <div class="image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="con"><span><?php echo get_the_date(); ?></span>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                    </div>
                </li>
               <?php
            }
            echo '</ul>';
            echo $args['after_widget'];
            wp_reset_postdata();
        }
    }
    }
    
    
    function register_kaliar_custom_latest_post_widget() {
    register_widget( 'Kaliar_Latest_Post_Widget' );
    }
    add_action( 'widgets_init', 'register_kaliar_custom_latest_post_widget' );
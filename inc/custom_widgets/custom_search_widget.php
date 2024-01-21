
<?php
// Search Widget
class Kaliar_Custom_Search_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_search_widget',
            'Kaliar Search Widget',
            array( 'description' => 'A custom search widget with an icon button.' )
        );
    }

    // Widget form creation
    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Search';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php
    }

    // Widget update
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : 'Search';

        return $instance;
    }

    // Widget display
    public function widget( $args, $instance ) {
        $title = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : 'Search';

        echo $args['before_widget'];
        if ( !empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
		<div class="serach-bar">
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
        		<button type="submit" class="search-submit">
                <i class="fa-regular fa-magnifying-glass" aria-hidden="true"></i>
            </button>
        </form>
		</div>

        <?php
        echo $args['after_widget'];
    }
}

// Register the widget
function register_custom_search_widget() {
    register_widget( 'Kaliar_Custom_Search_Widget' );
}
add_action( 'widgets_init', 'register_custom_search_widget' );
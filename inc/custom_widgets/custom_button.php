<?php
// Custom Button Widget
class Custom_Button_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_button_widget',
            'Custom Button Widget',
            array( 'description' => 'A custom widget with a button.' )
        );
    }

    // Widget form creation
    public function form( $instance ) {
        $button_text = isset( $instance['button_text'] ) ? esc_attr( $instance['button_text'] ) : 'Click Me';
        $button_link = isset( $instance['button_link'] ) ? esc_url( $instance['button_link'] ) : '#';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'button_text' ); ?>">Button Text:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'button_text' ); ?>" name="<?php echo $this->get_field_name( 'button_text' ); ?>" type="text" value="<?php echo $button_text; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'button_link' ); ?>">Button Link:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'button_link' ); ?>" name="<?php echo $this->get_field_name( 'button_link' ); ?>" type="text" value="<?php echo $button_link; ?>" />
        </p>
        <?php
    }

    // Widget update
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['button_text'] = ( !empty( $new_instance['button_text'] ) ) ? sanitize_text_field( $new_instance['button_text'] ) : 'Click Me';
        $instance['button_link'] = ( !empty( $new_instance['button_link'] ) ) ? esc_url_raw( $new_instance['button_link'] ) : '#';

        return $instance;
    }

    // Widget display
    public function widget( $args, $instance ) {
        $button_text = isset( $instance['button_text'] ) ? esc_attr( $instance['button_text'] ) : 'Click Me';
        $button_link = isset( $instance['button_link'] ) ? esc_url( $instance['button_link'] ) : '#';

        echo $args['before_widget'];
		?>
		<div class="btn-one mt-40">
			<span class="btn-circle desplode-circle" style="left: 64px; top: 55.1719px;"></span>
			<a href="<?php echo $button_link; ?>" class="btn-inner"><span class="btn-text"><?php echo $button_text; ?></span></a>
		<?php
        echo $args['after_widget'];
    }
}

// Register the widget
function register_custom_button_widget() {
    register_widget( 'Custom_Button_Widget' );
}
add_action( 'widgets_init', 'register_custom_button_widget' );
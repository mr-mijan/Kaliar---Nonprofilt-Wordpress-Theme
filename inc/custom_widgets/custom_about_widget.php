<?php
// About Widet
class Kaliar_About_Image_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_image_widget',
            'Kaliar About Widget',
            array( 'description' => 'A custom widget with image upload, title, and text fields.' )
        );
    }

    // Widget form creation
    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $text = isset( $instance['text'] ) ? esc_textarea( $instance['text'] ) : '';
        $image_url = isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';

        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'text' ); ?>">Text:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" rows="5"><?php echo $text; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'image_url' ); ?>">Image URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" type="text" value="<?php echo $image_url; ?>" />
            <input class="button widefat" type="button" value="Upload Image" onclick="uploadImage(this);" />
            <script>
                function uploadImage(button) {
                    var customUploader = wp.media({
                        title: 'Choose Image',
                        button: {
                            text: 'Choose Image'
                        },
                        multiple: false
                    });

                    customUploader.on('select', function () {
                        var attachment = customUploader.state().get('selection').first().toJSON();
                        jQuery(button).prev().val(attachment.url);
                    });

                    customUploader.open();
                }
            </script>
        </p>
        <?php
    }

    // Widget update
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? sanitize_textarea_field( $new_instance['text'] ) : '';
        $instance['image_url'] = ( !empty( $new_instance['image_url'] ) ) ? esc_url_raw( $new_instance['image_url'] ) : '';

        return $instance;
    }

    // Widget display
    public function widget( $args, $instance ) {
        $title = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
        $text = isset( $instance['text'] ) ? wpautop( $instance['text'] ) : '';
        $image_url = isset( $instance['image_url'] ) ? esc_url( $instance['image_url'] ) : '';

        echo $args['before_widget'];
        if ( !empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        if ( !empty( $image_url ) ) {
            echo '<img src="' . $image_url . '" alt="' . $title . '" />';
        }
        echo '<div class="widget-text text-white mt-40">' . $text . '</div>';
        echo $args['after_widget'];
    }
}

// Register the widget
function register_custom_about_image_widget() {
    register_widget( 'Kaliar_About_Image_Widget' );
}
add_action( 'widgets_init', 'register_custom_about_image_widget' );
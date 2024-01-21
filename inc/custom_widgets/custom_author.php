<?php
// Custom Widget
class Kaliar_Authour_Widget extends WP_Widget {

    // Widget setup
    public function __construct() {
        parent::__construct(
            'custom_author_widget', // Base ID
            'Kailar Author Widget', // Widget name
            array(
                'description' => 'A custom widget with title, subtitle, description, and image fields.',
            )
        );
    }

    // Front-end display
    public function widget($args, $instance) {
        $title = $instance['title'];
        $subtitle = $instance['subtitle'];
        $description = $instance['description'];
        $image_url = $instance['image_url'];
        $custom_html = $instance['custom_html'];


        echo $args['before_widget'];
       

        // Display image
        if (!empty($image_url)) {
            echo '<img src="' . esc_url($image_url) . '" alt="" class="widget-image mx-auto d-block">';
        }

        // Display widget title
        if (!empty($title)) {
            // echo $args['before_title'] . $title . $args['after_title'];
            echo '<h5 class="widget-title mt-20 text-center">' . esc_html($title) . '</h5>';
        }

        // Display subtitle
        if (!empty($subtitle)) {
            echo '<p class="widget-subtitle text-center">' . esc_html($subtitle) . '</p>';
        }

        // Display description
        if (!empty($description)) {
            echo '<p class="widget-subtitle mt-20 text-center">' . esc_html($description) . '</p>';
        }
      
        // Display custom HTML
        if (!empty($custom_html)) {
        echo '<div class="widget-custom-html">' . wp_kses_post($custom_html) . '</div>';
        }
        echo $args['after_widget'];
    }

    // Back-end form
    public function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $subtitle = isset($instance['subtitle']) ? esc_attr($instance['subtitle']) : '';
        $description = isset($instance['description']) ? esc_attr($instance['description']) : '';
        $image_url = isset($instance['image_url']) ? esc_url($instance['image_url']) : '';
        $custom_html = isset($instance['custom_html']) ? $instance['custom_html'] : '';


        // Title field
        echo '<p><label for="' . $this->get_field_id('title') . '">Title:</label>';
        echo '<input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '"></p>';

        // Subtitle field
        echo '<p><label for="' . $this->get_field_id('subtitle') . '">Subtitle:</label>';
        echo '<input class="widefat" id="' . $this->get_field_id('subtitle') . '" name="' . $this->get_field_name('subtitle') . '" type="text" value="' . $subtitle . '"></p>';

        // Description field
        echo '<p><label for="' . $this->get_field_id('description') . '">Description:</label>';
        echo '<textarea class="widefat" id="' . $this->get_field_id('description') . '" name="' . $this->get_field_name('description') . '">' . $description . '</textarea></p>';

        // Image field
        echo '<p><label for="' . $this->get_field_id('image_url') . '">Image URL:</label>';
        echo '<input class="widefat" id="' . $this->get_field_id('image_url') . '" name="' . $this->get_field_name('image_url') . '" type="text" value="' . $image_url . '"></p>';
      
        // Custom HTML field
        echo '<p><label for="' . $this->get_field_id('custom_html') . '">Custom HTML:</label>';
        echo '<textarea class="widefat" id="' . $this->get_field_id('custom_html') . '" name="' . $this->get_field_name('custom_html') . '">' . $custom_html . '</textarea></p>';
 }

    // Update widget settings
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['subtitle'] = sanitize_text_field($new_instance['subtitle']);
        $instance['description'] = wp_kses_post($new_instance['description']);
        $instance['image_url'] = esc_url($new_instance['image_url']);
        $instance['custom_html'] = wp_kses_post($new_instance['custom_html']);


        return $instance;
    }
}

// Register the widget
function register_custom_author_widget() {
    register_widget('Kaliar_Authour_Widget');
}

add_action('widgets_init', 'register_custom_author_widget');
?>

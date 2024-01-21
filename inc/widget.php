<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function kaliar_widget_register(){

	// Footer Sidebar 01
	register_sidebar( array(
        'name' => esc_html__('Footer-01', 'kaliar'),
        'id'   => 'footer_1',
		'description'    => esc_html__( 'Add widgets here.', 'kaliar' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title mb-40 text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );


	// Footer Sidebar 02
	register_sidebar( array(
		'name' => esc_html__('Footer-02', 'kaliar'),
		'id'   => 'footer_2',
		'description'    => esc_html__( 'Add widgets here.', 'kaliar' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title mb-40 text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 03
	register_sidebar( array(
		'name' => esc_html__('Footer-03', 'kaliar'),
		'id'   => 'footer_3',
		'description'    => esc_html__( 'Add widgets here.', 'kaliar' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title mb-40 text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 04
	register_sidebar( array(
		'name' => esc_html__('Footer-04', 'kaliar'),
		'id'   => 'footer_4',
		'description'    => esc_html__( 'Add widgets here.', 'kaliar' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="title mb-40 text-white">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );


	// Blog Sidebar
    register_sidebar( array(
        'name' => esc_html__('Blog Sidebar', 'kaliar'),
        'id'   => 'sidebar-1',
		'description'    => esc_html__( 'Add widgets here.', 'kaliar' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="item shadow mb-30 %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h5 class="title">',
		'after_title'    => "</h5>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

	register_sidebar( array(
        'name' => esc_html__('Service Sidebar', 'kaliar'),
        'id'   => 'services-sidebar',
		'description'    => esc_html__( 'Add widgets here.', 'kaliar' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="mb-5">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

	// Event Sidebar
	register_sidebar( array(
        'name' => esc_html__('Event Sidebar', 'kaliar'),
        'id'   => 'event_sidebar',
		'description'    => esc_html__( 'Add widgets here.', 'kaliar' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="item shadow mb-30 %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h5 class="title">',
		'after_title'    => "</h5>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

	// Event Sidebar
	register_sidebar( array(
		'name' => esc_html__('Causes Sidebar', 'kaliar'),
		'id'   => 'causes_sidebar',
		'description'    => esc_html__( 'Add widgets here.', 'kaliar' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="item shadow mb-30%2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h5 class="title">',
		'after_title'    => "</h5>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );
}
add_action( 'widgets_init', 'kaliar_widget_register' );



// Custom Category Widget
class Custom_Category_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'custom_category_widget',
            'Custom Category Widget',
            array( 'description' => 'A custom widget for displaying categories with post count.' )
        );
    }

    // Widget form creation
    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Categories';

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
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : 'Categories';

        return $instance;
    }

    // Widget display
    public function widget( $args, $instance ) {
        $title = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : 'Categories';

        echo $args['before_widget'];
        if ( !empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $categories = get_categories();

        echo '<ul class="category">';
        foreach ( $categories as $category ) {
            echo '<li>';
            echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>';
            echo '<span class="post-count"> (' . $category->count . ')</span>';
            echo '</li>';
        }
        echo '</ul>';

        echo $args['after_widget'];
    }
}

// Register the widget
function register_custom_category_widget() {
    register_widget( 'Custom_Category_Widget' );
}
add_action( 'widgets_init', 'register_custom_category_widget' );



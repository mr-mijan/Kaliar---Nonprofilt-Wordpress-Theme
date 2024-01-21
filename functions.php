<?php
/**
 * kaliar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kaliar
 */

// Walker Nav Menu
require_once('inc/walker_nav_menu.php');

// Theme Default Function
require_once('inc/default.php');

// Widget Register
require_once('inc/widget.php');
// Custom Recent Post Widget Register
require_once('inc/custom_widgets/custom_recentpost_widget.php');
// Custom Recent Event Widget Register
require_once('inc/custom_widgets/custom_recentevent_widget.php');
// Custom About Widget Register
require_once('inc/custom_widgets/custom_about_widget.php');
// Custom Button Widget Register
require_once('inc/custom_widgets/custom_button.php');
// Custom Search Widget Register
require_once('inc/custom_widgets/custom_search_widget.php');
require_once('inc/custom_widgets/custom_author.php');

// Kiriki Customizer Register
require_once('inc/customizer.php');

// // Customizer Register
require_once('inc/social_share.php');

// // Comment Form Placeholder
// require_once('inc/comment-form.php');

// // Custom Post For Services
// require_once('inc/services-custom-post.php');

// // Custom Post For Event
require_once('inc/event-custom-post.php');

// Custom Post For Causes
require_once('inc/causes-custom-post.php');

// Custom Post For Team
require_once('inc/team-custom-post.php');

// Active Plugin
require_once('inc/plugin_active.php');
require_once('inc/demo_content.php');



// // Function to count and update post views
// function set_post_views($post_id) {
//     $count_key = 'post_views_count';
//     $count = get_post_meta($post_id, $count_key, true);
//     if ($count == '') {
//         $count = 0;
//         delete_post_meta($post_id, $count_key);
//         add_post_meta($post_id, $count_key, '0');
//     } else {
//         $count++;
//         update_post_meta($post_id, $count_key, $count);
//     }
// }

// // Function to display post views
// function get_post_views($post_id) {
//     $count_key = 'post_views_count';
//     $count = get_post_meta($post_id, $count_key, true);
//     if ($count == '') {
//         delete_post_meta($post_id, $count_key);
//         add_post_meta($post_id, $count_key, '0');
//         return '0 View';
//     }
//     return $count . ' Views';
// }

// // Function to increment post views on each page load
// function track_post_views($post_id) {
//     if (!is_single()) return;
//     if (empty($post_id)) {
//         global $post;
//         $post_id = $post->ID;
//     }
//     set_post_views($post_id);
// }
// add_action('wp_head', 'track_post_views');


// // Function to calculate estimated reading time
// function calculate_reading_time($content) {
//     $words_per_minute = 200; // Adjust this value based on average reading speed
//     $word_count = str_word_count(strip_tags($content));
//     $reading_time = ceil($word_count / $words_per_minute);

//     return $reading_time;
// }

// // Function to display post reading time
// function display_reading_time() {
//     $post_content = get_post_field('post_content', get_the_ID());
//     $reading_time = calculate_reading_time($post_content);

//     echo '<span class="reading-time">' . sprintf(_n('%d minute to read', '%d minutes to read', $reading_time, 'textdomain'), $reading_time) . '</span>';
// }



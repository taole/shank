<?php
define( 'THEME_BASE_URL', get_theme_root_uri());
define( 'THEME_URL', THEME_BASE_URL.'/bootstrap-basic-child/');
// require_once THEME_URL . 'includes/admin-options.php';
function theme_enqueue_styles() {


    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

}

// // Remove the default Thematic blogtitle function
// function remove_thematic_actions() {
//     remove_action('thematic_header','optionsframework_options',3);
// }
// // Call 'remove_thematic_actions' (above) during WP initialization
// add_action('init','remove_thematic_actions');

// if (!function_exists('optionsframework_options')) {
//     function _optionsframework_options() {
//         $section_title       = array("","","","GALLERY","OUR TEAM","ABOUT","TESTIMONIALS","","CONTACT");
// 		$section_menu        = array("Home","","Info","Gallery","Team","About","Testimonials","","Contact");
// 		$section_slug        = array('home','','info','gallery','team','about','testimonials','','contact');
//     }
// }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>


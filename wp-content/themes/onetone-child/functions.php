<?php
define( 'THEME_BASE_URL', get_theme_root_uri());
define( 'THEME_URL', THEME_BASE_URL.'/onetone-child/');
// require_once THEME_URL . 'includes/admin-options.php';
function theme_enqueue_styles() {
	$section_title       = array("","","","GALLERY","OUR TEAM","ABOUT","TESTIMONIALS","","CONTACT");
	$section_menu        = array("Home","","Info","Gallery","Team","About","Testimonials","","Contact");
	$section_slug        = array('home','','info','gallery','team','about','testimonials','','contact');

	wp_enqueue_script( 'onetone-hello',THEME_URL. 'js/script.js', array( 'jquery' ) );


    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );

}


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>


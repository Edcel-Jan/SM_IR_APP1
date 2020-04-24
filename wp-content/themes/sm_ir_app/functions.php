<?php 

/**
 * 
 * *Calling the custom-post-type.php from partials folder
 * 
 */
require get_template_directory(). '/partials/custom-post-types.php';


/**
 * 
 * *Adding Featured Image Support for all post
 * 
 */
add_theme_support( 'post-thumbnails' );

/* Edcel  */

require get_template_directory() . '/assets/bootstrap-navwalker.php';

function load_css() {
	wp_register_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css', array(),false,'all');
	wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts','load_css');

function load_js() {
	wp_enqueue_script('jquery');
	wp_register_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js', 'jquery',false,true);
	wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts','load_js');

register_nav_menus( array( 
        'header' => 'Header menu', 
        'footer' => 'Footer menu' 
      ));

// register_nav_menus( array(
//     'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
// ) );
//add class


// function add_menu_link_class( $atts, $item, $args ) {
//     if($args->link_class) {
//         $atts['class'] = $args->link_class;
//     }
//     return $atts;
// }
// add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

// function add_menu_list_item_class($classes, $item, $args) {
//     if($args->list_item_class) {
//         $classes[] = $args->list_item_class;
//     }
//     return $classes;
// }
// add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

// add_action( 'after_setup_theme', 'wpt_setup' );
//     if ( ! function_exists( 'wpt_setup' ) ):
//         function wpt_setup() {  
//             register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
//         } endif;

 ?>
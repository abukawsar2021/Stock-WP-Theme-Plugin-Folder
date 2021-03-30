<?php
/*
Plugin Name: Stock Theme Plugin

*/

if(!defined('ABSPATH')){
exit;	
}

// plugin directory path
define( 'STOCK_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/' );
define( 'STOCK_ACC_PATH', plugin_dir_path( __FILE__ ) );



// qurey page as list

function stock_service_page_as_list(){
	$args = wp_parse_args(array(
		'post_type'=>'page',
		'numberposts'=>-1,	
	));
	$posts = get_posts($args);
	$post_options = array(esc_html__('--Select pages--','stock-wp-theme'));
	
	if($posts){
		foreach($posts as $post){
			$post_options[$post->post_title]= $post->ID;			
		}
	}	
return $post_options;	
}


// slider cpt
function stock_theme_slider_cpt() {
    $labels = array(
        'name'                  => _x( 'Sliders', 'stock-wp-theme' ),
        'singular_name'         => _x( 'Slider','stock-wp-theme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'supports'           => array( 'title', 'editor','thumbnail', 'excerpt' ),
    );
 
    register_post_type( 'slider', $args );
}
add_action( 'init', 'stock_theme_slider_cpt' );



// how to query slider as list

 function slider_single_count_list(){
$args = wp_parse_args(array(
  'post_type'=> 'slider',
  'numberposts'=> -1,

));
$posts = get_posts($args);
$post_options = array(esc_html__('Select any slider','stock-wp-theme'));

if($posts){
	foreach($posts as $post){
	 $post_options[$post->post_title] = $post->ID;	
	}	
}
return  $post_options;

}



function stock_project_cpt() {
    $labels = array(
        'name'                  => _x( 'Projects', 'stock-wp-theme' ),
        'singular_name'         => _x( 'Project',  'stock-wp-theme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
    );
 
    register_post_type( 'project', $args );
}
 
add_action( 'init', 'stock_project_cpt' );



function stock_project_tax() {
    $labels = array(
        'name'              => _x( 'Projects Categories', 'stock-wp-theme' ),
        'singular_name'     => _x( 'Project Category', 'stock-wp-theme' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 
		     'slug' => 'genre' 
		),
    );
 
    register_taxonomy( 'project_category', array( 'project' ), $args );
}
add_action( 'init', 'stock_project_tax' );




// print shortcode in widgets
add_filter('widget_text','do_shortcode');


// Loading VC addons
require_once(STOCK_ACC_PATH . 'vc-addons/vc-blocks-load.php');

require_once(STOCK_ACC_PATH . 'theme-shortcodes/sliders-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/logo-carousel-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/service-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/cta-btn-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/behindTheStory-btn.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/counter-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/testimonial-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/googleMap-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/promobox-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/project-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/pricingtable-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/team-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/videoPopup-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/progressBar-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/contactinfo-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/recentPost-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/career-shortcode.php');


// Shortcode depended on Visual Composer

include_once(ABSPATH . 'wp-admin/includes/plugin.php');
if(is_plugin_active(' js_coposer/js_composer.php')){
 /* require_once(STOCK_ACC_PATH . 'theme-shortcode/staff-shortcode.php'); */
	
}
// Registering stcok toolkit filesize

function stock_toolkit_files(){

wp_enqueue_style('owl-carousel',  plugin_dir_url(__FILE__) . 'assets/css/owl-carousel.css');	
wp_enqueue_style('stocktoolkit',  plugin_dir_url(__FILE__) . 'assets/css/stocktoolkit.css');	
wp_enqueue_style('fancybox-css',  plugin_dir_url(__FILE__) . 'assets/css/jquery.fancybox.css');				
wp_enqueue_script('owl-carousel', plugin_dir_url(__FILE__) . 'assets/js/owl-carousel.min.js',array('jquery'), '2.3.4', true);					
wp_enqueue_script('waypoints', plugin_dir_url(__FILE__) . 'assets/js/jquery.waypoints.min.js',array('jquery'), '2.0.2', true);
wp_enqueue_script('counterup', plugin_dir_url(__FILE__) . 'assets/js/jquery.counterup.js',array('jquery'), '1.0', true);
wp_enqueue_script('gmap3', plugin_dir_url(__FILE__) . 'assets/js/gmap3.min.js',array('jquery'), '7.2', true); 	
wp_enqueue_script('isotope', plugin_dir_url(__FILE__) . 'assets/js/isotope.pkgd.min.js',array('jquery'), '3.0.4', true); 	 	
wp_enqueue_script('fancybox-js', plugin_dir_url(__FILE__) . 'assets/js/jquery.fancybox.js',array('jquery'), '1.0', true); 	
}
add_action('wp_enqueue_scripts','stock_toolkit_files');
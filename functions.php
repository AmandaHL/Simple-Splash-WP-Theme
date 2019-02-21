<?php  //enqueue scripts and styles
add_action('wp_enqueue_scripts', 'wyrx_scripts_method');
function wyrx_scripts_method() {
	wp_register_script( 'simplejs', get_template_directory_uri() . '/js/simpleScripts.js' , array ( 'jquery'), '1.0', true);
	wp_enqueue_script( 'simplejs' );
	
	} 
function simple_splash_enqueue_style() {
    wp_enqueue_style( 'ss-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'simple_splash_enqueue_style' );
//add thumbnail support
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails'); 
  set_post_thumbnail_size( 75, 75, true );
}
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'project-thumb', 170, 128, true );
add_image_size( 'smallthumb', 120, 90, true );
}
// do shortcodes
add_filter('widget_text', 'do_shortcode');
 //add excerpt to pages
function _mychildtheme_setup() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', '_mychildtheme_setup', 11 );
 //widgetize the theme
if ( function_exists('register_sidebar') )
    register_sidebars(8);
 //add menu support
function register_menus() {
  register_nav_menus(
    array(
'main-menu' => __('Main Navigation')
)
);
}
add_action( 'init', 'register_menus' );

//add custom metaboxes using cmb2
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}
//Header Lead Text 
add_action( 'cmb2_admin_init', 'top_txt_register_metabox' );
function top_txt_register_metabox() {
$prefix = 'ss_';

$ss_top = new_cmb2_box( array(
	'id'    => $prefix . 'top_txt',
	'title'  => __( 'Top Header Text', 'cmb2' ),
	'object_types' => array( 'page'),
	'show_on_cb' => 'bg_show_if_front_page',
	'closed'     => true, // true to keep the metabox closed by default
) );
$ss_top->add_field( array(
	
	'desc' => 'Enter text to appear at top of page.',
	'id'   => $prefix . 'header_text',
	'type' => 'wysiwyg',
	
) );
}
//Logo
add_action( 'cmb2_admin_init', 'logo_register_metabox' );
function logo_register_metabox() {
$prefix = 'ss_';

$ss_logo = new_cmb2_box( array(
	'id'    => $prefix . 'logo_box',
	'title'  => __( 'Logo with Tagline', 'cmb2' ),
	'object_types' => array( 'page'),
	'show_on_cb' => 'bg_show_if_front_page',
	'closed'     => true, // true to keep the metabox closed by default
) );
$ss_logo->add_field( array(
	
	'desc' => 'Enter text to appear at top of page.',
	'id'   => $prefix . 'logo_file',
	'type' => 'wysiwyg',
	
) );
}

//Contact Section
add_action( 'cmb2_admin_init', 'contact_register_metabox' );
function contact_register_metabox() {
$prefix = 'ss_';

$ss_contact = new_cmb2_box( array(
	'id'    => $prefix . 'contact_box',
	'title'  => __( 'Contact Section', 'cmb2' ),
	'object_types' => array( 'page'),
	'show_on_cb' => 'bg_show_if_front_page',
	'closed'     => true, // true to keep the metabox closed by default
) );
$ss_contact->add_field( array(
	
	'desc' => 'Enter call to action text and contact form shortcode.',
	'id'   => $prefix . 'splash_contact',
	'type' => 'wysiwyg',
	
) );
}

//Add custom post types

//register taxonomies
?>
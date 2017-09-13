<?php  //enqueue scripts and styles
add_action('wp_enqueue_scripts', 'wyrx_scripts_method');
function wyrx_scripts_method() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'signifiedjs', get_template_directory_uri() . '/js/signiScripts.js' , array ( 'jquery'), '1.0', true);
	wp_enqueue_script( 'signifiedjs' );
	
	} 
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
//Home Page Video
add_action( 'cmb2_admin_init', 'video_embed_register_metabox' );
function video_embed_register_metabox() {
$prefix = 'dd_';

$dd_video_embed = new_cmb2_box( array(
	'id'    => $prefix . 'video_box',
	'title'  => __( 'Home Page Video', 'cmb2' ),
	'object_types' => array( 'page'),
	'show_on_cb' => 'bg_show_if_front_page',
	'closed'     => true, // true to keep the metabox closed by default
) );
$dd_video_embed->add_field( array(
	'name' => 'Link to Video',
	'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
	'id'   => $prefix . 'home_video',
	'type' => 'oembed',
	
) );
}
add_action( 'cmb2_admin_init', 'zf_register_repeatable_group_field_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function zf_register_repeatable_group_field_metabox() {
$prefix = 'dd_group_';
	
/**
	 * Repeatable Field Groups
	 */
	$cmb_step_group = new_cmb2_box( array(
		'id'           => $prefix . 'steps',
		'title'        => __( 'Installation Steps', 'cmb2' ),
		'object_types' => array( 'page'),
		'show_on_cb' => 'bg_show_if_front_page',
		'closed'     => true, // true to keep the metabox closed by default
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_step_group->add_field( array(
		'id'          => 'step_box',
		'type'        => 'group',
		'description' => __( 'Use the 4 boxes below to add the Installation Steps. Note: The layout is designed for 4 boxes of content. ' ),
		'options'     => array(
			'group_title'   => __( 'Step {#}', 'cmb2' ), // {#} gets replaced by row number
			/*'add_button'    => __( 'Add Another Box', 'cmb2' ),
			'remove_button' => __( 'Remove Box', 'cmb2' ),*/
			'add_button'    => false,
			'remove_button' => false,
			'sortable'      => true, // beta
			'closed'     => true, // true to have the groups closed by default
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_step_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Title (Step Number)', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_step_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Step Text', 'cmb2' ),
		'id'          => 'featured-text',
		'type'        => 'textarea_small',
	) );

	$cmb_step_group->add_group_field( $group_field_id, array(
		'name' => __( 'Step Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );


}
//Add custom post types

//register taxonomies
?>
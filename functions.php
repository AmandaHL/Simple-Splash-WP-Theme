<?php  //enqueue scripts and styles
add_action('wp_enqueue_scripts', 'wyrx_scripts_method');
function wyrx_scripts_method() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'jqueryRotate', get_template_directory_uri() . '/js/jQueryRotate.2.2.js' , array ( 'jquery'), '1.0', true); 
	wp_enqueue_script( 'jqueryRotate');
	wp_register_script( 'jqueryCycle', 'http://malsup.github.io/jquery.cycle.all.js' , array ( 'jquery'), '1.0', true); 
	wp_enqueue_script( 'jqueryCycle');	
	wp_register_script( 'signifiedjs', get_template_directory_uri() . '/js/signiScripts.js' , array ( 'jquery'), '1.0', true);
	wp_enqueue_script( 'signifiedjs' );
	
	} 
//add thumbnail support
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails'); 
  set_post_thumbnail_size( 150, 112, true );
}
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'works-thumb', 170, 128, true );
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
class Menu_With_Description extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth, $args) {
	
        global $wp_query;
 
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
        $class_names = $value = '';
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
        $class_names = join( ' ', apply_filters( 'cci-thumb', array_filter( $classes ), $item ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';
 
        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
 
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
        // get user defined attributes for thumbnail images
        $attr_defaults = array( 'class' => 'nav_thumb' , 'alt' => esc_attr( $item->attr_title ) , 'title' => esc_attr( $item->attr_title ) );
        $attr = isset( $args->thumbnail_attr ) ? $args->thumbnail_attr : '';
        $attr = wp_parse_args( $attr , $attr_defaults );
 
        $item_output = $args->before;
 
        // thumbnail image output
        $item_output .= ( isset( $args->thumbnail_link ) && $args->thumbnail_link ) ? '<a' . $attributes . '>' : '';
        $item_output .= apply_filters( 'menu_item_thumbnail' , ( isset( $args->thumbnail ) && $args->thumbnail ) ? get_the_post_thumbnail( $item->object_id , ( isset( $args->thumbnail_size ) ) ? $args->thumbnail_size : 'thumb' , $attr ) : '' , $item , $args , $depth );
        $item_output .= ( isset( $args->thumbnail_link ) && $args->thumbnail_link ) ? '</a>' : '';
        // menu link output
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
 
        
        // close menu link anchor
        $item_output .= '</a>';
        $item_output .= $args->after;
 
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

add_filter( 'wp_nav_menu_args' , 'my_add_menu_descriptions' );
function my_add_menu_descriptions( $args ) {
    $args['walker'] = new Menu_With_Description;
    $args['desc_depth'] = 0;
    $args['thumbnail'] = true;
    $args['thumbnail_link'] = false;
    
    $args['thumbnail_attr'] = array( 
		
'class' => 'nav_thumb my_thumb' , 'alt' => 'test' , 'title' => 'test' );
 
    return $args;

}
//Add custom post types
add_action('init', 'works_register');
 
function works_register() {
 
	$labels = array(
		'name' => __('Works'),
		'singular_name' => __('Work'),
		'add_new' => __('Add New', 'Work'),
		'add_new_item' => __('Add New Work'),
		'edit_item' => __('Edit Work Post'),
		'new_item' => __('New Work Post'),
		'view_item' => __('View Work Post'),
		'search_items' => __('Search Works'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'taxonomies' => array('categories','post_tag'),
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'has_archive' => true,
		'supports' => array('title', 'editor' , 'comments', 'excerpt',  'revisions', 'author', 'post-formats','thumbnail')
		
	  ); 
 
	register_post_type( 'works' , $args );
}
//register taxonomies
register_taxonomy("works-tags", array("works"), array("hierarchical" => true, "label" => "Portfolio Tags", "singular_label" => "Portfolio Tags", "rewrite" => true));
//allow tag.php to function properly with post types
function post_type_tags_fix($request) {//allow tag.php to function properly with post types
    if ( isset($request['tag']) && !isset($request['post_type']) )
    $request['post_type'] = 'any';
    return $request;
}
add_filter('request', 'post_type_tags_fix');
?>
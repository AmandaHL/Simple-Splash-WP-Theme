<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="main">
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta property="og:image" content="<?php echo get_template_directory_uri();?>/images/logo.png" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<!--[endif]-->
<?php wp_head(); ?> 
</head>
<body id="top">
<div class="page">
<header>
<?php 
$splash_header_text = do_shortcode(get_post_meta ( $post->ID, 'ss_header_text', true));
?>


<section class="top">
<?php
		if( !empty( $splash_header_text ) ) {   
			echo '<div class="splash-text-top">'
			. $splash_header_text
			.'</div><!--.splash-text-top-->';
			}
?>

</section><!--.top-->
</header>
<div class="main">
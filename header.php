<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
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
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<!--[endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39190332-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
<div id="page">
<header>

<div id="top">

<div id="logo-box">
<div class="logo"><a href="<?php bloginfo('wpurl');?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Colorado Graphic Design and Web Development"  border="0" /></a></div><!--.logo-->
<div class="name-tag">
<img src="<?php echo get_template_directory_uri();?>/images/nametag2.png" alt="Amanda Long Creative Solutions for Print and Web"  border="0" />
</div><!--.name-tag-->
<div class="mob-head help-nav">
<img class="nav-icon" src="<?php echo get_template_directory_uri();?>/images/nav-icon.svg" alt="Mobile Navigation Icon">
</div><!--help-nav-->
</div><!--#logo-box-->

<nav class="main-navigation">
  <?php wp_nav_menu( array(
    'theme_location' => 'main-menu', 
    'menu_class' => 'topnav', 
	)
);
?>
</nav>

</div><!--#top-->
</header>
<div id="main">
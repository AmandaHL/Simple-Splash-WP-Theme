<div id="main-sidebar" class="equal_height">

<div class="widgetbox">
<h2 class="widgettitle">About this Portfolio</h2>
<ul id="port-text">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
<?php endif; ?>
</ul>

<?php
$works_tags = wp_list_categories( array(
  'taxonomy' => 'works-tags',
  'orderby' => 'name',
  'show_count' => 0,
  'pad_counts' => 0,
  'hierarchical' => 1,
  'echo' => 0,
  'title_li' => '<h4>Sort by topic:</h4>'
) );

// Make sure there are terms with articles
if ( $works_tags )
	echo '<ul class="taglist">' . $works_tags . '</ul>';
?>
<div id="testimonial-box">
<h2 class="widgettitle">Client Testimonials</h2>
<ul>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(8) ) : ?>
<?php endif; ?>

</ul>
</div><!--#testimonial-box-->
<div class="clear">&nbsp;</div>
</div><!--.widgetbox-->
</div><!--#sidebar-->
<div class="clear">&nbsp;</div>
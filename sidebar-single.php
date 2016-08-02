<div id="main-sidebar" class="equal_height">

<div class="widgetbox">
	
	<h2 class="widgettitle">Recent Projects</h2>
	<ul class="works-feed">
		<?php query_posts('post_type=works&order=DESC&showposts=4'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li class="post-thumb">	
			<a href="<?php the_permalink() ?>">					
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail('smallthumb');
			} 
			?></a>
			</li>
		<?php endwhile; endif; ?>

	</ul><!--.works-feed-->
<div class="link"><a href="<?php bloginfo('wpurl')?>/portfolio">View Portfolio</a></div>
</div><!--.widgetbox-->

<div class="widgetbox">
<?php
$works_tags = wp_list_categories( array(
  'taxonomy' => 'works-tags',
  'orderby' => 'name',
  'show_count' => 0,
  'pad_counts' => 0,
  'hierarchical' => 1,
  'echo' => 0,
  'title_li' => '<h4>View Projects by Topic:</h4>'
) );

// Make sure there are terms with articles
if ( $works_tags )
	echo '<ul class="taglist">' . $works_tags . '</ul>';
?>
</ul>
</div><!--.widgetbox-->
<div class="clear">&nbsp;</div>

</div><!--#main-sidebar-->
<div class="clear">&nbsp;</div>
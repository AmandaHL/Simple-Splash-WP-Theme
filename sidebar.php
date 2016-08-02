<div id="main-sidebar" class="equal_height">
<div class="widgetbox">
	<h2 class="widgettitle">Recent Work</h2>
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
</div><!--.widgetbox-->
<div id="testimonial-box">
	<h2 class="widgettitle">Client Testimonials</h2>
	<ul>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(8) ) : ?>
	<?php endif; ?>

	</ul>
</div><!--#testimonial-box-->
<div class="clear">&nbsp;</div>

</div><!--#main-sidebar-->
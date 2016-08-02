<?php
/**
 * Template Name: HomePage 
*/
get_header();?>


<div id="content">
		
<div id="headline">
<img class="banner" src="<?php echo get_template_directory_uri();?>/images/banner.png"/>
</div><!--#headline-->
<!--<h1>FORM IS FUNCTION</h1>-->

<div id="ddd-box">
<div id="ddd-images">
<div class="image-frame one">

<h4><a href="/along/services">design</a></h4>
</div><div class="image-frame two">

<h4><span class="arrows">&lt;</span><a href="/along/services">development</a><span class="arrows">&gt;</span></h4>
</div><div class="image-frame three">

<h4><a href="/along/services">direction</a></h4>
</div>
</div><!--#ddd-image-->
</div><!--#ddd-box-->

<div id="midbox-home">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page-content" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
</div><!--#midbox-home-->

</div><!--#content-->
</div><!--#main-->
<?php get_footer();?>
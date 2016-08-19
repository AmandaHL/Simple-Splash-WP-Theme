<?php
/**
 * Template Name: HomePage 
*/
get_header();?>


<div class="content">
<?php get_template_part('banner');?>

<div class="home-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page-content" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
</div><!--.home-content-->

<h2 id="services">SERVICES<a class="up-icon" href="#top"><img src="<?php echo get_template_directory_uri();?>/images/up-icon.svg" alt="Back to Top"></a></h2>

<section class="services">
<?php get_template_part('services');?>
</section><!--services-->

<h2 id="projects">PROJECTS<a class="up-icon" href="#top"><img src="<?php echo get_template_directory_uri();?>/images/up-icon.svg" alt="Back to Top"></a></h2>

<section class="recent-work">
<?php get_template_part('projects');?>
</section><!--.recent-work-->

<h2 id="about">ABOUT MY WORK<a class="up-icon" href="#top"><img src="<?php echo get_template_directory_uri();?>/images/up-icon.svg" alt="Back to Top"></a></h2>

<section class="about">
<?php get_template_part('about');?>
</section><!--.about-->

</div><!--.content-->
</div><!--.main-->
<?php get_footer();?>
<?php
/**
 * Template Name: HomePage 
*/
get_header();?>


<div class="content">
<section class="hero">
<div>
<?php get_template_part('home-video');?>
</div>
</section><!--hero-->
<section id="decconek" class="home-content">
<h2>Save Time & Labor Costs While Exceeding Brick-to-Deck Construction Requirements</h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page-content" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
</div><!--.home-content-->


<section id="installation" class="installation 4col">
<h2>Decconek® Lets You More Easily & Cost-Effectively Attach a Code-Compliant Deck</h2>
<div>
<?php get_template_part('steps');?>
</div>
</section><!--installation-->


<section class="contact" id="contact">
<h2>Contact Us for More Information</h2>
<div>
<h4>Please contact us using the form below or call <span class="highlight">937-219-0825</span> for a free quote.</h4>
<?php echo do_shortcode('[si-contact-form form="1"]'); ?>

</div>
</section><!--contact-->

</div><!--.content-->
</div><!--.main-->
<?php get_footer();?>
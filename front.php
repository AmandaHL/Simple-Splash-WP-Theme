<?php
/**
 * Template Name: Home Page 
*/
get_header();?>
<?php 
$splash_contact = do_shortcode(get_post_meta( $post->ID, 'ss_splash_contact', true));
$splash_logo = get_post_meta( $post->ID, 'ss_logo_file', true);
?>

<div class="content">
	<section id="vejje" class="home-content">
		<div class="logo-box">
			<div class="logo"><?php
					if( !empty( $splash_logo ) ) {   
						echo wpautop($splash_logo);
						}
			?></div><!--.logo-->
		</div><!--.logo-box-->
	</section><!--.home-content-->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="about">
			<div>
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			</div>
		</section>
	<?php endwhile; endif; ?>

	<section class="contact" id="contact">
		<div>
			<?php
				if( !empty( $splash_contact ) ) {   
					echo $splash_contact;
					}
			?>
		</div>
	</section><!--contact-->

</div><!--.content-->

<?php get_footer();?>
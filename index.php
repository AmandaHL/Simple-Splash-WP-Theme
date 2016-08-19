<?php get_header();?>
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>	<!--.breadcrumbs-->

<div id="content">
<h2 class="page-title"><?php the_title();?></h2>
<div id="container">	
<section>	

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page-content" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
<div class="clear">&nbsp;</div>
		</div>
		<?php endwhile; endif; ?>
    
</section>
</div><!--#container-->
</div><!--#content-->
</div><!--#main-->
<?php get_footer();?>
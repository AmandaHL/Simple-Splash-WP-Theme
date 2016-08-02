<?php
/**
 * Template Name: Journal Post
*/
get_header();?>
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>	<!--.breadcrumbs-->
<div id="content">

<h2 class="page-title">Professional Journal</h2>
<div id="container">	
	
<div id="body-general" class="equal_height">
 <div class="page-content" >   
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h3 class="post-title"><?php the_title(); ?></h3>
		
		<div class="blog-post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">


	<?php the_content(); ?>
	
</div><!--entry-->
		</div>

		<?php endwhile; endif; ?>

<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>
</div><!--.page-content-->

</div><!--#body-general-->
 <?php get_sidebar('blog');?>    
</div><!--#container-->
</div><!--#content-->
</div><!--#main-->
<?php get_footer();?>
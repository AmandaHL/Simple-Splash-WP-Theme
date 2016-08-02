<?php
/**
 * Template Name: blog 
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
 <div class="page-content">   
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<h3 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<div class="blog-post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">


	<?php the_excerpt('Read the rest of this entry »'); ?>
	
</div><!--entry-->
		</div>
		<?php endwhile; endif; ?>
</div><!--#body-general-->
</div><!--.page-content-->
 <?php get_sidebar('blog');?>    
</div><!--#container-->
</div><!--#content-->
</div><!--#main-->
<?php get_footer();?>
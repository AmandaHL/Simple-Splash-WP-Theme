<?php /*
Template Name: Tag Archive
*/ ?>
<?php get_header(); ?>
<div id="content">
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>	<!--#breadcrumbs-->
<h2 class="page-title"><?php
	printf( __( 'Work: %s', 'signified' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h2>
<div id="port-container" class="equal_height">		
<div class="port-section">

<div class="parent-box">
<?php while (have_posts()) : the_post(); ?>
<div class="works-post">

<div class="works-thumb">						
	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  	the_post_thumbnail('works-thumb');
	} 
	?>
</div><!--.works-thumb-->
<div class="toggle-content">
        <h4><?php the_title(); ?></h4>
	<?php the_content();?>
  <div class="x-image">X</div>     
</div><!--.toggle-content-->

</div><!--.works-post-->

<?php endwhile; ?>

                                             

</div><!--.parent-box-->
<div class="clear">&nbsp;</div>
            </div><!--.port-section-->

<?php get_sidebar('single');?>
</div><!--end port-container-->
</div><!--#content-->
</div><!--#main-->
<?php get_footer();?>
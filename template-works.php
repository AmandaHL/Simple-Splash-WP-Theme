<?php
/**
Single Post Template: Works Post
*/
get_header();?>
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>	<!--.breadcrumbs-->
<div id="content">

<h2 class="page-title">Recent Work</h2>
<div id="port-container">	
<div class="port-section">	
<div class="parent-box">
<?php while (have_posts()) : the_post(); ?>
<div class="works-post">

        <h4><?php the_title(); ?></h4>
	<?php the_content();?>
      <div class="clear">&nbsp;</div>

</div><!--.works-post-->

<?php endwhile; ?>

                                             

</div><!--.parent-box-->
 </div><!--.port-section-->
<?php get_sidebar('single');?>
</div><!--#port-container-->

</div><!--#content-->
</div><!--#main-->
<?php get_footer();?>
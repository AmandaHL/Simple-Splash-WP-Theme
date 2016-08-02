<?php
/**
 * The template for displaying the Portfolio Page.
 * Template Name: Portfolio
 *
 */
 get_header();?>
<div id="content">
<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>	<!--#breadcrumbs-->
<h2 class="page-title"><?php the_title();?></h2>
<div id="port-container" class="equal_height">		
<section>	
<div class="port-section">

<?php
$args=array(
      'posts_per_page' => 0,
      'orderby' => 'date',
      'order' => 'DESC',
	'post_type' => 'works',
      'caller_get_posts'=>1
    );

    $my_query = new WP_Query($args);
$day_check = '';
while ($my_query->have_posts()) : $my_query->the_post();
  $post_date = mysql2date("Y", $post->post_date_gmt);
  if ($post_date != $day_check) {
   if ($day_check != '') {
      echo '</div><!--.parent-box--><div class="clear">&nbsp;</div>'; // close .parent-box div here
    }
    echo '<div class="parent-box"><h3>' . $post_date . '</h3>';
  }
?>

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
	<div class="clear">&nbsp;</div>
 <div class="x-image">X</div>
</div><!--.toggle-content-->

</div><!--.works-post-->

<?php
$day_check = $post_date;
endwhile; ?>

                                             <?php if ( $my_query->have_posts() ) : ?>
<?php endif; ?>

</div><!--.parent-box-->
<div class="clear">&nbsp;</div>
            </div><!--.port-section-->



<?php get_sidebar('port');?>
</section>
</div><!--port-container-->	
</div><!--#content-->

</div><!--#main-->
<?php get_footer();?>
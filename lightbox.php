<?php
/**
Single Post Template: Lightbox
*/
?>
<div id="<?php echo $post->ID; ?>" class="fancybox-inline">
<?php while (have_posts()) : the_post(); ?>
<h2 class="page-title"><?php the_title();?></h2>
<div class="client">
<div class="client-logo">
	<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail();
			} 
	?>
</div><!--.client-logo-->	
<div class="description">
	<?php the_content(); ?>
</div><!--.description-->

<?php endwhile; ?>
  

</div><!--.client-->
<div class="projects">
<?php

$args = array(
    'post_type'      => 'works',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

        <div id="parent-<?php the_ID(); ?>" class="project-details">
<div class="center">
	<?php echo the_excerpt();?>
            <?php the_content();?>
</div><!--center-->	
        </div>

    <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>
                                           
</div><!--projects-->
</div>
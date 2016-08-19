<?php
$works = new WP_Query( array(
            'posts_per_page' => -1,
            'post_type' => 'works',
		'post_parent' => 0,
            'orderby' => 'DESC'
        )
);
$args = array(
            'post_type' => 'works',
            'order' => 'DESC'
);
    $filters = get_categories($args);
?>

<ul class="port-filters">
<li class="show">Show:</li>
<li class="all"><a href="#">All</a></li>
 <?php foreach ( $filters as $cat ) { ?>
   <li data-category="<?php echo $cat->cat_ID; ?>" class="<?php            
        echo 'tab-' . $cat->cat_ID . '';     
   ?>"><a href="#"><?php echo $cat->name; ?></a></li>
  <?php } ?>
</ul>


<div class="works-feed">

<?php while ($works->have_posts()) : $works->the_post(); ?>
<?php $categories = get_the_terms( $post->ID, 'category' );?>
  <div class="<?php
     foreach($categories as $cat) {               
        echo 'cat-' . $cat->term_id . ' ';     
    }?>">
			<div class="post-thumb">
			<a class="fancybox-inline" id="<?php echo 'thumb-' . $cat->term_id .' ';?>"  href="<?php the_permalink(); ?>#<?php echo $cat->term_id; ?>">				
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail();
			} 
			?></a>
</div>
			<div class="roles"><?php the_excerpt();?></div>
			
</div>
<?php endwhile; ?>

	</div><!--.works-feed-->
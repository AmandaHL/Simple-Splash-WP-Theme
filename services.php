<?php 
$services = new WP_Query('page_id=12');
while($services->have_posts()) : $services->the_post();
the_content();
endwhile;
?>
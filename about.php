<?php 
$about = new WP_Query('page_id=4');
while($about->have_posts()) : $about->the_post();
the_content();
endwhile;
?>
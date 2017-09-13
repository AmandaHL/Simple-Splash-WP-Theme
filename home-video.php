<?php
/*
Build the slideshow using the Home Slider metabox content.
*/
$url = esc_url( get_post_meta( get_the_ID(), 'dd_home_video', 1 ) );
$iframe = get_post_meta(get_the_ID(), 'dd_home_iframe', true);
if( !empty( $url ) ) { 
echo wp_oembed_get( $url );
}
?>
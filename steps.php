<?php
/*
Display the Featured Content boxes on the Home Page
*/
 $boxes = get_post_meta(get_the_ID(), 'step_box', true);
 if( !empty( $boxes ) ) {   
	echo '<div class="step-wrapper">';
    // Checks and displays the retrieved values
    foreach ( (array) $boxes as $key => $box ) {

    $img = $title = $text = $link = '';

    if ( isset( $box ['title'] ) ) {
        $title = esc_html( $box['title'] );
    }

    if ( isset( $box ['featured-text'] ) ) {
        $text = wpautop( $box['featured-text'] );
    }

    if ( isset( $box ['image_id'] ) ) {
        $img = wp_get_attachment_image( $box['image_id'], 'share-pick', null);
    }
 	if ( isset( $box ['link_box'] ) ) {
    $link = esc_html(  $box['link_box'] );
    }
    //Output the Boxes
    echo '<div class="step-box"><div class="step-box-image">'. $img .'</div><div class="textwrap"><div class="step-box-title">Step  <span>'.$title.'</span></div><div class="step-box-text">'. $text .'</div></div><!--textwrap--></div><!--.step-box-->';
}
echo '</div><!--.step-box-wrapper-->';
}
?>
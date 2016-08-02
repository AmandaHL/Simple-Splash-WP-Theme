<?php
/**
 * The template for displaying the footer.
 *
 * Contains closing for the div#page  element.
 */
?>
<footer>
<div class="main-footer">
<div id="mid-footer">
<p>If you are interested in receiving a quote for your upcoming project, would like to leave a testimonial, or if you are a designer or developer interested in project collaboration, please contact me using the following contact form.</p>
<p>I will follow up with you within 48 hours.</p>

<p class="disclaimer">NOTE: If you are a solicitor or hoping I’ll outsource projects to you overseas, I am not interested... please move on.</p>
<img src="<?php echo get_template_directory_uri();?>/images/star.png" alt="graphic design and web development" />
</div><!--#mid-footer-->
<div id="right-footer">
<?php echo do_shortcode('[si-contact-form form="1"]'); ?>
<div id="social-icons">
<!--<ul id="footer-sidebar2">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : ?>
<?php endif; ?>
</ul>-->
<div id="icons">
<a href="http://wordpress.org"><img src="<?php echo get_template_directory_uri();?>/images/wp.png" alt="wordpress logo"/></a>
<a href="http://iwanet.org"><img src="<?php echo get_template_directory_uri();?>/images/iwagry.png" alt="IWA" /></a>
<a href="http://www.greengeeks.com/cgi-bin/affiliates/clickthru.cgi?id=ahlong"><img class="gg-icon" src="http://www.greengeeks.com/images/affiliatetags/120x60-001.gif"></a>
</div>
</div><!--#social-icons-->
</div><!--#right-footer-->

</div><!--.main-footer-->
<div class="mob-footer">
<div id="mid-footer">
<p>If you are interested in receiving a quote for your upcoming project, would like to leave a testimonial, or if you are a designer or developer interested in project collaboration, please contact me using the following contact form.</p>
<p>I will follow up with you within 48 hours.</p>

<p class="disclaimer">NOTE: If you are a solicitor or hoping I’ll outsource projects to you overseas, I am not interested... please move on.</p>
<img src="<?php echo get_template_directory_uri();?>/images/star.png" alt="graphic design and web development" />
</div><!--#mid-footer-->
<div id="right-footer">
<?php echo do_shortcode('[si-contact-form form="1"]'); ?>
<div id="social-icons">
<!--<ul id="footer-sidebar2">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : ?>
<?php endif; ?>
</ul>-->
<div id="icons">
<a href="http://wordpress.org"><img src="<?php echo get_template_directory_uri();?>/images/wp.png" alt="wordpress logo"/></a>
<a href="http://iwanet.org"><img src="<?php echo get_template_directory_uri();?>/images/iwagry.png" alt="IWA" /></a>
<a href="http://www.greengeeks.com/cgi-bin/affiliates/clickthru.cgi?id=ahlong"><img class="gg-icon" src="http://www.greengeeks.com/images/affiliatetags/120x60-001.gif"></a>
</div>
</div><!--#social-icons-->
</div><!--#right-footer-->
</div><!--.mobile-footer-->
</footer>
<div id="copyright"><p>&copy; <?php echo date('Y'); ?>. Amanda Long | DesignFormation. All rights reserved.</p></div>
</div><!--#page-->
<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains closing for the div#page  element.
 */
?>
<footer>
<div class="main-footer">
<div class="left-footer">
<p>Available in North America exclusively from</p>
<img src="<?php echo get_template_directory_uri();?>/images/logo-footer.png" alt="Decconek Distributing LLC" />
<p>P.o. Box 751431 • Dayton, Ohio 45475<br>937-219-0825 </p>
</div><!--.left-footer-->
<div class="mid-footer">
</div><!--.mid-footer-->
<div class="right-footer">

</div><!--.right-footer-->
</div><!--.main-footer-->



<div class="mob-footer">

<div class="mid-footer">
</div><!--.mid-footer-->
<div class="right-footer">
</div><!--.right-footer-->
</div><!--.mobile-footer-->

<div class="copyright"><p>&copy; <?php echo date('Y'); ?>. Decconek Distributing LLC. All rights reserved.</p></div>
</footer>
</div><!--.page-->
<?php wp_footer(); ?>
</body>
</html>
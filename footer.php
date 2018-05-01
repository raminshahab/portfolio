<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer" data-aos="fade-up">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
            <ul class="inline-list">
              <li><img src="/wp-content/themes/FoundationPress/dist/assets/images/icon-email.svg"></li>
			        <li><img src="/wp-content/themes/FoundationPress/dist/assets/images/icon-facebook.svg"></li>
				      <li><img src="/wp-content/themes/FoundationPress/dist/assets/images/icon-linkedin.svg"></li>
			      </ul>
        </div>
    </div>
  <div class="info-box">
  	<div class="foot-note">
  		<p>Ramin Shahab @<span class="highlight"><?php echo date('Y');?></span></p>
  	</div>
  </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
AOS.init({duration: 1000});
</script>

<?php wp_footer(); ?>

</body>
</html>
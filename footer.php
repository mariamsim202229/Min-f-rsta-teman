<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-first-theme
 */

?>

<footer id="colophon" class="site-footer container">
	<div class="footer-logo">
		<img src="<?php echo get_template_directory_uri(); ?>/images/loga2.png" alt="">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf(esc_html__('Established 2024'));
		?>
	</div>

	<div class="site-info">
		<ion-icon name="logo-facebook"></ion-icon>
		<ion-icon name="logo-instagram"></ion-icon>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<!-- ION ICONS -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php wp_footer(); ?>

</body>

</html>
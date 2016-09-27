<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spatialinstability
 */

?>
	<!-- Pre footer -->


	<footer class="image">
		<div class="scanLines">
			<div class="scanLinesLeft">
				<div class="wrapper">

					<div class="footer-main">
						<?php get_sidebar(); ?>
					</div>

					<div class="footer-credits">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> <?php echo bloginfo('name' ); ?>. <?php _e('All Rights Reserved', 'spatialinstability'); ?>. <a href="<?php _e('/terms-conditions/', 'spatialinstability'); ?>"><?php _e('Terms & Conditions', 'icor'); ?>.</a>
						</p>

						<div class= "social-icons">
							<a href='#'>
								<i class="fa fa-youtube-play fa-lg"></i>
							</a>
							<a href='#'>
								<i class="fa fa-vimeo fa-lg"></i>
							</a>
							<a href='#'>
								<i class="fa fa-google-plus fa-lg"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

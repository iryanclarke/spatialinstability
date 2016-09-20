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
	<?php
		$type = 'projects';
		$args=array(
			'post_type' => $type,
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'caller_get_posts'=> 1
		);
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
				<?php
			endwhile;
		}
		wp_reset_query();  // Restore global post data stomped by the_post().
		?>


	<!-- Pre footer -->
	<div class="pre-footer">
		<div class="footer-cta">
			<div class="footer-text">
				  <h2 class="small"><?php _e('Contact', 'spatialinstability'); ?></h2>
					<h2><?php _e('Request A Quote', 'spatialinstability'); ?></h2>
					<p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'spatialinstability'); ?></p>
					<a href="/contact-us">
						<button>
							<?php _e('Learn More', 'spatialinstability'); ?>
						</button>
					</a>
			</div>
		</div>
		<div class="footer-cta">
			<div class="footer-text">
				  <h2 class="small"><?php _e('Customer Service', 'spatialinstability'); ?></h2>
					<h2><?php _e('In Need of Support?', 'spatialinstability'); ?></h2>
					<p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'spatialinstability'); ?></p>
					<a href="/contact-us">
						<button>
							<?php _e('Get Help Now', 'spatialinstability'); ?>
						</button>
					</a>
			</div>
		</div>
	</div><!-- #Pre Footer -->

	<footer class="image">
		<div class="scanLines">
			<div class="scanLinesLeft">
				<div class="wrapper">

					<div class="footer-main">
						<?php get_sidebar(); ?>
					</div>

					<div class="footer-credits">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> <?php echo bloginfo('name' ); ?>. <?php _e('All Rights Reserved', 'spatialinstability'); ?>. <a href="<?php _e('/terms-conditions/', 'spatialinstability'); ?>"><?php _e('Terms & Conditions', 'spatialinstability'); ?>.</a>
						</p>

						<div class= "social-icons">
							<a href='#'>
								<i class="fa fa-facebook fa-lg"></i>
							</a>
							<a href='#'>
								<i class="fa fa-twitter fa-lg"></i>
							</a>
							<a href='#'>
								<i class="fa fa-linkedin fa-lg"></i>
							</a>
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

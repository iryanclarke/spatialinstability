<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package spatialinstability
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<!-- Hero Banner -->
				<div class="parallax hero-banner filter-blue">
					<div class="hero-image">
						<?php //the_post_thumbnail(); ?>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholders/470883268.jpg" style="top: 0px;">
						<div class="small-info">
							<h1><?php esc_html_e( 'Sorry, that page can&rsquo;t be found.', 'spatialinstability' ); ?></h1>
							<h3><?php esc_html_e( 'Try using one of the menu links', 'spatialinstability' ); ?></h3>

						</div>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

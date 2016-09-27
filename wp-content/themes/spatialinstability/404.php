<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package icor
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<!-- Hero Banner -->
				<div class="parallax hero-banner" style="background-image: url(
				  <?php
				     echo get_stylesheet_directory_uri();
				     echo "/images/placeholders/404.jpg";

				  ?>
				  ">
				  <div class="hero-image scanLines">

				  </div>

					<div class="small-info">
						<h1><?php esc_html_e( 'Sorry, that page can&rsquo;t be found.', 'icor' ); ?></h1>
						<h3><?php esc_html_e( 'Try using one of the menu links', 'icor' ); ?></h3>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

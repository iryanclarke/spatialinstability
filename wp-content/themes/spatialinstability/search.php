<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package icor
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<!-- Hero Banner -->
		<div class="parallax hero-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); echo "/images/placeholders/icor-building.jpg";?>);">
			<div class="hero-image scanLines">
			</div>
		</div>
		<div class="hero-sub-banner">
			<div class="sub-text">
				<h1><?php printf( esc_html__( 'Search Results for: %s', 'icor' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div>
		</div>


		<div class="page-content">
			<!-- News CMS content -->
			<div class="page-cms">
				<div id="events-archive" class="events-flex">

					<?php
					if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

				</div>
			</div>
		</div>	<!-- #post-content -->



		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

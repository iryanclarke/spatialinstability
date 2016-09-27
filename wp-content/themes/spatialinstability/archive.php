<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package icor
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- Hero Banner -->
		<div class="parallax hero-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); echo "/images/placeholders/icor-building.jpg";?>);">
			<div class="hero-image scanLines">
			</div>
		</div>
		<div class="hero-sub-banner">
			<div class="sub-text">
				<h1><?php _e('Archive', 'icor'); ?></h1>
			</div>
		</div>

		<div class="page-content">
			<div class="page-cms">
				<div id="events-archive" class="events-flex">

					<?php
						$custom_query = new WP_Query('&post_type=post');
						while($custom_query->have_posts()) : $custom_query->the_post();

							get_template_part( 'template-parts/content', 'events' );

					?>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
				</div>
			</div>
		</div>	<!-- #post-content -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

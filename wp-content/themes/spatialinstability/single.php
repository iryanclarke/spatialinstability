<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package spatialinstability
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();
		?>


		<div class="post-content">
			<div class="post-sidebar">

				<!-- Use this is social is in sidebar, if not, use Monarch
			 <div class="post-social">

			 </div>
		   -->
			</div>
			<div class="post-cms">
				<p class="date">
					<?php echo get_the_date(); ?>
				</p>
				<h2><?php the_title(); ?></h2>
				<?php
				get_template_part( 'template-parts/content', 'page' );

				?>

				<div class="post-nav">
						<?php
						the_post_navigation();
						?>
				</div>

			</div>
		</div>	<!-- #post-content -->
		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

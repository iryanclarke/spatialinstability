<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package spatialinstability
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- Hero Banner -->
		<div class="parallax hero-banner filter-black">
			<div class="hero-image">
				<img src="
				<?php
				 if(has_post_thumbnail()) {
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
						$thumb_url = $thumb_url_array[0];
						echo $thumb_url;
				 }
				 else {
					 echo "/wp-content/uploads/2016/07/stock-photo-55174312-asian-engineer-in-factory.jpg";
				 }
				?>" style="top: 0px;">
				<div class="small-info">
					<h1><?php esc_html_e( 'Archive', 'spatialinstability' ); ?></h1>
				</div>
			</div>
		</div><!-- #Hero Banner -->

		<div class="post-content">
			<div class="post-sidebar">
				<hr/>
				<h2> Categories </h2>

				<?php
					$catArgs = array(
								'taxonomy'=>'category'
								// post_type isn't a valid argument, no matter how you use it.
								);
					$categories = get_categories('taxonomy=category&post_type=news'); ?>
					 <?php foreach ($categories as $category) : ?>
							<div class="job-cat">
								<h3>
									<?php
										if( $category->name != 'Uncategorized'){
											echo $category->name;
										} ?>
								</h3>
							</div>
					 <?php endforeach; ?>
			</div>
			<!-- News CMS content -->
			<div class="post-cms">
				<hr/>
				<div class="news-flex">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'news' );

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>	<!-- #post-content -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

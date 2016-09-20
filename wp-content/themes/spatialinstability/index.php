<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
					<?php //the_post_thumbnail(); ?>
					<img src="
					<?php
							$page_slug ='homepage';
							$page_data = get_page_by_path($page_slug);
							$page_id = $page_data->ID;
							$thumb_id = get_post_thumbnail_id($page_id);

							if($thumb_id){
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
								echo $thumb_url;
							}
						 else {
							 echo get_stylesheet_directory_uri();	
							 echo "/images/placeholders/city-architechture.jpg";
						 }
					?>" style="top: 0px;">
					<div class="small-info">
						<h1>What Is It?</h1>
					</div>
				</div>
			</div>

			<div class="post-content">
				<div class="post-cms">
					<?php
								while ( have_posts() ) : the_post();
								  get_template_part( 'template-parts/content', 'page' );
								endwhile;

					?>
				</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

<?php
/*
Template Name: News
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
							 echo "/images/placeholders/chairs.jpg";
						 }
					?>" style="top: 0px;">
					<div class="small-info">
						<h1><?php esc_html_e( 'News', 'spatialinstability' ); ?><</h1>
						<p><?php $key="Subtitle"; echo get_post_meta($post->ID, $key, true); ?></p>
					</div>
				</div>
			</div>

			<div class="post-content">
				<!-- News CMS content -->
				<div class="post-cms">
					<div class="blog-flex">

						<?php
							$custom_query = new WP_Query('&cat=-9');
							while($custom_query->have_posts()) : $custom_query->the_post();
						?>
							<div class="blog-item">
								<a href="<?php the_permalink();?>" />
									<div class="blog-img filter-grey">
										<img src="
											<?php
											 if(has_post_thumbnail()) {
													$thumb_id = get_post_thumbnail_id();
													$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
													$thumb_url = $thumb_url_array[0];
													echo $thumb_url;
											 }
											 else {
												 echo "/wp-content/themes/health-plus/images/placeholders/Link-11.jpg";
											 }
											?>" style="top: 0px;">
										</div>
									</a>
									<div class="blog-content">
										<h3><a href="<?php the_permalink();?>" /><?php the_title(); ?></a></h3>
										<p class="date">
											<?php echo get_the_date('d/m/Y'); ?>
										</p>
										<p><?php the_excerpt(); ?></p>
										<div class="info-button">
											<a href="<?php the_permalink();?>">Read More</a>
										</div>
									</div>
							</div><!-- End .blog-item -->
							<hr/>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); // reset the query ?>
					</div>
				</div>
			</div>	<!-- #post-content -->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

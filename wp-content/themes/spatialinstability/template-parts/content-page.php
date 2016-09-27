<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package icor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'icor' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-footer">
		<?php
			// edit_post_link(
			// 	sprintf(
			// 		/* translators: %s: Name of current post */
			// 		esc_html__( 'Edit %s', 'icor' ),
			// 		the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// 	),
			// 	'<span class="edit-link">',
			// 	'</span>'
			// );
		?>
	</div><!-- .entry-footer -->
</article><!-- #post-## -->

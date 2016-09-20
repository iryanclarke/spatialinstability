<?php

add_action( 'footer_credits', 'baytek_footer_credits', 11, 2 );

if ( ! function_exists('baytek_footer_credits') ) :

	function baytek_footer_credits($author) { ?>

		<div class="footer-credits">
			<div class="copyright">
				
			</div>

			<div class="author">
				<span><?php _e('Design by', 'bradyspoolandspa'); ?> <a href="http://www.baytek.ca/" target="_blank">baytek</a></span>
			</div>
		</div>

	<?php }

endif;



add_action( 'divi_library_item', 'display_divi_library_item', 10, 1 );

if ( ! function_exists('display_divi_library_item') ) :

	/**
	 * Displays the stored Divi Library section 'events-news-top-banner'. 
	 * Intended to be used within template files. Will throw PHP Error Notice if not found.
	 * @author Chad <chad@baytek.ca>
	 * @see http://php.net/manual/en/function.trigger-error.php
	 *
	 */
	function display_divi_library_item( $divi_libraryitem_title = null ) {

		// If they didn't tell us what to grab, get outta here!
		if ( empty( $divi_libraryitem_title )) return;

		// Get the post from the DB for the global Divi library item for what was passed 
		$library_item = get_page_by_title( $divi_libraryitem_title, 'OBJECT', 'et_pb_layout' );


		// If library item requested was not found return an error
		if ( empty( $library_item) ) {
			trigger_error( 
				sprintf( "%s : %s",
					__( 'Divi library item requested does not exist', 'spatialinstability'), 
					$divi_libraryitem_title
				),
				E_USER_NOTICE 
			);

			return;
		}

		
		echo do_shortcode( $library_item->post_content );

	}

endif;
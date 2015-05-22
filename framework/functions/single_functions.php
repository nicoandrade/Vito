<?php
/* Single Functions ----- */
	if ( ! function_exists( 'ql_new_content_more' ) ){
		function ql_new_content_more($more) {
		       global $post;
		       return ' <br><a href="' . esc_url( get_permalink() ) . '" class="more-link btn btn-ql">'.__('Read more', 'eneaa').'</a>';
		}   
	}// end function_exists
		add_filter( 'the_content_more_link', 'ql_new_content_more' );


	if ( ! function_exists( '_wp_render_title_tag' ) ) :
		function ql_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
		}
		add_action( 'wp_head', 'ql_render_title' );
	endif;
?>
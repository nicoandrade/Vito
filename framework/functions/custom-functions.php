<?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) :
		function ql_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
		}
		add_action( 'wp_head', 'ql_render_title' );
	endif;

	//Change the Read More link

	if ( ! function_exists( 'ql_modify_read_more_link' ) ) :
		function ql_modify_read_more_link() {
			return '<a class="more-link btn btn-ql" href="' . esc_url( get_permalink() ) . '">'. __('Read More', 'eneaa') . '</a>';
		}
	endif;
	add_filter( 'the_content_more_link', 'ql_modify_read_more_link' );

?>
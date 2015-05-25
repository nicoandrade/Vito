<?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) :
		function vito_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
		}
		add_action( 'wp_head', 'vito_render_title' );
	endif;

	//Change the Read More link

	if ( ! function_exists( 'vito_modify_read_more_link' ) ) :
		function vito_modify_read_more_link() {
			return '<a class="more-link btn btn-ql" href="' . esc_url( get_permalink() ) . '">'. __('Read More', 'vito') . '</a>';
		}
	endif;
	add_filter( 'the_content_more_link', 'vito_modify_read_more_link' );

?>
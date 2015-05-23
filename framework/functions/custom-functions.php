<?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) :
		function ql_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
		}
		add_action( 'wp_head', 'ql_render_title' );
	endif;
?>
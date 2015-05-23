<?php
if ( ! function_exists( 'ql_enqueue_scripts' ) ){
	function ql_header_styles() {

		//Get all options
		$ql_options = get_option('quemalabs_options');

		/*
			Print CSS colors
			==========================================================
		*/
		function ql_print_colors($color, $items_arr, $css_prop){
			$v_count = count($items_arr);
			$s_count = 1;
			foreach ($items_arr as $css_line) {
			    if ($v_count == $s_count) {
					echo $css_line . "\n";
				}else{
					echo $css_line . ",\n";	
				}
				$s_count++;
			}
			echo "{";
				echo $css_prop.": ".$color."!important;";
			echo "}";
		}//ql_print_colors()


	  ?>


		<!-- Custom Styles -->
	    <style type="text/css">

		/*
			Body
			---> Background Color
			=============================
		*/
		<?php
		$ql_body_background = "#" . get_background_color();
		$ql_body_background_html = array(
			"body"
		);
		ql_print_colors($ql_body_background, $ql_body_background_html, 'background-color');
		?>


		/*
			Header
			---> Text Color
			=============================
		*/
		<?php
		$ql_header_textcolor = "#" . get_header_textcolor();
		$ql_header_textcolor_html = array(
			"#header",
			"#jqueryslidemenu ul.nav > li > a"
		);
		ql_print_colors($ql_header_textcolor, $ql_header_textcolor_html, 'color');
		?>

		/*
			Content
			---> Text Color
			=============================
		*/
		<?php
		$ql_content_color = $ql_options['content_typography_color'];
		$ql_content_color_html = array(
			"body"
		);
		ql_print_colors($ql_content_color, $ql_content_color_html, 'color');
		?>

		/*
			Links
			---> Text Color
			=============================
		*/
		<?php
		$ql_links_color = $ql_options['links_typography_color'];
		$ql_links_color_html = array(
			".entry a, .widget a, #footer a, .metadata a"
		);
		ql_print_colors($ql_links_color, $ql_links_color_html, 'color');
		?>

		/*
			Headings
			---> Text Color
			=============================
		*/
		<?php
		$ql_headings_color = $ql_options['headings_color'];
		$ql_headings_color_html = array(
			"h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a"
		);
		ql_print_colors($ql_headings_color, $ql_headings_color_html, 'color');
		?>

	

	    </style>

	  <?php

	  
	}
}//end if function_exists

add_action( 'wp_head', 'ql_header_styles' );
?>
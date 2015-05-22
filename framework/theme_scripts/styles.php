<?php
if ( ! function_exists( 'ql_enqueue_scripts' ) ){
	function ql_header_styles() {

		//Fonts
		$content_typography_color = of_get_option('content_typography_color');
		$content_typography_font = of_get_option('content_typography_font');
		$content_typography_weight = of_get_option('content_typography_weight');

		$links_typography_color = of_get_option('links_typography_color');
		$links_typography_font = of_get_option('links_typography_font');
		$links_typography_weight = of_get_option('links_typography_weight');



		$featured_color = of_get_option('featured_color');

		$contrast_color = of_get_option('contrast_color');

		$headings_color = of_get_option('headings_color');


		//Header
		$header_color = of_get_option('header_color');
		$header_color_text = of_get_option('header_color_text');

		//Sidebar Nav
		$sidebar_nav_color = of_get_option('sidebar_nav_color');
		$sidebar_nav_color_menu = of_get_option('sidebar_nav_color_menu');
		$sidebar_nav_color_text = of_get_option('sidebar_nav_color_text');
		$sidebar_nav_color_social = of_get_option('sidebar_nav_color_social');

		$body_color = of_get_option('background_color');
		$background_pattern = of_get_option('background_pattern');
		$background_image = of_get_option('background_image');



		/*
			Featured Color
			---> Border Color
			==========================================================
		*/
		$ql_Featured_border_color = array(
			".hero_border",
			".widget_post_tabs .tab-content",
			".widget_post_tabs .nav-tabs > .active > a",
			".bypostauthor .comment-entry",
			".service_item .service_icon i",
			".widget_search #s:focus",
			".woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover",
			".woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle",
			"#respond #submit-respond",
			".btn-ql2:hover"
		);

		/*
			Featured Color
			---> Border Bottom Color
			==========================================================
		*/
		$ql_Featured_border_color_bottom = array(
			"#footer h4, .masonry_item .masonry_desc, .title_underline",
			"article",
			".page_title",
			".ql_tagline",
			".ql_underline_title",
			"#header",
			".filter_list h4",
			".sub_footer_wrap"
		);

		/*
			Featured Color
			---> Border Top Color
			==========================================================
		*/
		$ql_Featured_border_color_top = array(
			"#header",
			".portfolio_item .ql_hover .short_line",
			".portfolio_post",
			".footer_wrap",
			".sub_footer_wrap"
		);

		/*
			Featured Color
			---> Background Color
			==========================================================
		*/
		$ql_Featured_background_color = array(
			".service_item .service_icon i",
			".circle_service:hover .circle_icon",
			"ul.fancy_tags li a",
			"#respond #submit-respond:hover, #contact-form #submit-form:hover",
			".btn-cta",
			".simple_btn",
			".portfolio_item a .ql_hover .p_icon",
			"ul.source li.active a",
			".hero_bck",
			".ql_title:before",
			".ql_nav_tabs li.active a",
			".ql_latest_work .ql_lw_item a.ql_info_footer:hover",
			".date_slider",
			".woocommerce #content div.product form.cart .button:hover, .woocommerce div.product form.cart .button:hover, .woocommerce-page #content div.product form.cart .button:hover",
			".woocommerce a.button:hover, .woocommerce-page a.button:hover, .woocommerce button.button:hover, .woocommerce-page button.button:hover, .woocommerce input.button:hover, .woocommerce-page input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce-page #respond input#submit:hover, .woocommerce #content input.button:hover",
			".woocommerce #payment #place_order:hover, .woocommerce-page #payment #place_order:hover",
			"#ql_woo_cart .widget_shopping_cart_content a.button:hover",
			".ql_nav_close:hover",
			".btn-ql2:hover"
		);

		/*
			Featured Color
			---> Color
			==========================================================
		*/
		$ql_Featured_color = array(
			".logo_container .ql_logo",
			".hero_color",
			".service_item:hover .service_icon i",
			".circle_service:hover h3",
			".post_title h3 a:hover",
			".post_icon i",
			".metadata ul li:hover i",
			"ul.fancy_tags li a:hover",
			"#respond #submit-respond, #contact-form #submit-form",
			".widget_recent_posts ul li h6 a, .widget_popular_posts ul li h6 a",
			"footer .twitter_widget ul li i",
			".simple_btn:hover",
			"h2.intro_line strong",
			".filter_list ul li a:hover",
			".filter_list ul li.active a",
			"ul.source li a:hover",
			"ul.source li.active a:hover",
			"#sidebar .twitter_widget ul li i",
			"#sidebar .widget_recent_comments ul li:before",
			"#sidebar .widget_recent_comments ul li i",
			"#sidebar .widget_recent_comments ul li a:hover",
			".metadata ul li:hover:before",
			".woocommerce ul.products li.product a.button, .woocommerce-page ul.products li.product a.button",
			".woocommerce #content div.product form.cart .button, .woocommerce div.product form.cart .button, .woocommerce-page #content div.product form.cart .button, .woocommerce-page div.product form.cart .button",
			".woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active, .woocommerce #content div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active",
			".ql_woo_cart_close:hover",
			"#ql_woo_cart .widget_shopping_cart_content a.button",
			".ql_info_footer"
		);
		







		/*
			Text Color
			---> Color
			==========================================================
		*/
		$ql_Text_color = array(
			".metadata ul li strong",
			"#jqueryslidemenu ul.nav > li > ul > li a"
		);






		/*
			Body Color
			---> Background Color
			==========================================================
		*/
		$ql_Body_background_color = array(
			".service_item:hover .service_icon i",
			"ul.fancy_tags li a:hover",
			"footer .quick_contact .form input:focus",
			"footer .quick_contact .form textarea:focus",
			".preloader"
		);
		




		
		/*
			Contrast Color
			---> Color
			==========================================================
		*/
		$ql_Contrast_color = array(
			".contrast_color",
			".date_slider",
			"#header .jqueryslidemenu > ul > li > a",
			".simple_btn",
			".day_t",
			".service_item .service_icon i",
			".contact_info .contact_info li i",
			".banner_cta > div a.btn",
			"ul.fancy_tags li a",
			"#respond .add-on, #contact-form .add-on",
			"#respond #submit-respond:hover, #contact-form #submit-form:hover",
			".btn-cta",
			".btn-primary",
			".btn-primary:hover",
			".portfolio_item a .ql_hover .p_icon",
			".woocommerce ul.products li.product a.button:hover, .woocommerce-page ul.products li.product a.button:hover",
			".woocommerce #content div.product form.cart .button:hover, .woocommerce div.product form.cart .button:hover, .woocommerce-page #content div.product form.cart .button:hover",
			".woocommerce a.button:hover, .woocommerce-page a.button:hover, .woocommerce button.button:hover, .woocommerce-page button.button:hover, .woocommerce input.button:hover, .woocommerce-page input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce-page #respond input#submit:hover, .woocommerce #content input.button:hover",
			"#ql_woo_cart .widget_shopping_cart .widgettitle",
			"#ql_woo_cart .widget_shopping_cart_content a.button:hover",
			"#ql_woo_cart .widget_shopping_cart_content .total",
			".ql_nav_close:hover",
			".btn-ql2:hover"
		);

		/*
			Contrast Color
			---> Background Color
			==========================================================
		*/
		$ql_Contrast_background_color = array(
			"#respond #submit-respond,",
			"#contact-form #submit-form",
			".woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle",

			".woocommerce a.button.alt:hover, .woocommerce-page a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce-page button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce-page input.button.alt:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce-page #respond input#submit.alt:hover, .woocommerce #content input.button.alt:hover, .woocommerce-page #content input.button.alt:hover",
			".ql_woo_cart_close:hover",
			"#ql_woo_cart .widget_shopping_cart_content a.button",
			".ql_info_footer",
			".contrast_bck"
		);

		/*
			Contrast Color
			---> Border Color
			==========================================================
		*/
		$ql_Contrast_border_color = array(

		);








		/*
			Header Color
			---> Background Color
			==========================================================
		*/
		$ql_Header_color = array(
			"#header",
			".ql_home_video #header"
		);

		/*
			Header Text Color
			---> Text Color
			==========================================================
		*/
		$ql_Header_color_text = array(		
			"#jqueryslidemenu ul.nav > li a",
			"#jqueryslidemenu .in .nav .open li a"
		);

		/*
			Header Text Color
			---> Background Color
			==========================================================
		*/
		$ql_Header_color_text_bck = array(
			"#header .navbar-toggle .icon-bar"
		);




		/*
			Sidebar Nav Color
			---> Background Color
			==========================================================
		*/
		$ql_Sidebar_nav_color = array(
			".nav_sidebar",
			"#ql_woo_cart"
		);
		/*
			Sidebar Nav Color
			---> Border Color
			==========================================================
		*/
		$ql_Sidebar_nav_border_color = array(
			".ql_author-widget .ql_author_image"
		);
		/*
			Sidebar Nav Menu Color
			---> Text Color
			==========================================================
		*/
		$ql_Sidebar_nav_menu_color = array(
			".nav_sidebar #jqueryslidemenu ul.nav > li > a",
			".nav_sidebar #jqueryslidemenu ul.nav > li > ul > li a",
			".ql_author-widget .ql_author_name"
		);
		/*
			Sidebar Nav Text Color
			---> Text Color
			==========================================================
		*/
		$ql_Sidebar_nav_text_color = array(
			".nav_sidebar"
		);
		/*
			Sidebar Nav Social Icons Color
			---> Text Color
			==========================================================
		*/
		$ql_Sidebar_nav_social_color = array(
			".nav_sidebar .nav_social li a",
			".sub_nav_header ul li i",
			".sub_nav_header ul li",
			".sub_nav_header ul li a"
		);
		/*
			Sidebar Nav Text Color
			---> Border Color
			==========================================================
		*/
		$ql_Sidebar_nav_border_color = array(
			".nav_sidebar .hr-small"
		);


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
		body{
			font-weight: <?php echo $content_typography_weight; ?>;
			<?php 
			if ( of_get_option('font_system' ) != '1' ) {
			?>
			font-family: <?php echo stripslashes($content_typography_font);?>;
			<?php
			}
			?>
			color: <?php echo $content_typography_color; ?>;
			background-color: <?php echo $body_color; ?>;
		}

		a{
			font-weight: <?php echo $links_typography_weight; ?>;
			<?php 
			if ( of_get_option('font_system' ) != '1' ) {
			?>
			font-family: <?php echo stripslashes($links_typography_font);?>;
			<?php
			}
			?>
			color: <?php echo $links_typography_color; ?>;
		}

		h1, h2, h3, h4, h5, h1 a, h2 a, h3 a, h4 a, h5 a{
			color: <?php echo $headings_color; ?>;
		}






		/*
			Featured Color
			---> Border Color
			=============================
		*/
		<?php
		//Color in HEX, Array with Items, CSS property
		ql_print_colors($featured_color, $ql_Featured_border_color, 'border-color');

		?>
		/*
			Featured Color
			---> Border Bottom Color
			=============================
		*/
		<?php
		ql_print_colors($featured_color, $ql_Featured_border_color_bottom, 'border-bottom-color');
		?>
		
		/*
			Featured Color
			---> Border Top Color
			=============================
		*/
		<?php
		ql_print_colors($featured_color, $ql_Featured_border_color_top, 'border-top-color');
		?>


		/*
			Featured Color
			---> Background Color
			=============================
		*/
		<?php
		ql_print_colors($featured_color, $ql_Featured_background_color, 'background-color');
		?>

		
		/*
			Featured Color
			---> Color
			=============================
		*/
		<?php
		ql_print_colors($featured_color, $ql_Featured_color, 'color');
		?>

		
		



		/*
			Text Color
			---> Color
			=============================
		*/
		<?php
		ql_print_colors($content_typography_color, $ql_Text_color, 'color');
		?>






		/*
			Body Color
			---> Background Color
			=============================
		*/
		<?php
		ql_print_colors($body_color, $ql_Body_background_color, 'background-color');
		?>








		/*
			Contrast Color
			---> Color
			=============================
		*/
		<?php
		ql_print_colors($contrast_color, $ql_Contrast_color, 'color');
		?>


		/*
			Contrast Color
			---> Color
			=============================
		*/
		<?php
		ql_print_colors($contrast_color, $ql_Contrast_background_color, 'background-color');
		?>


		/*
			Contrast Color
			---> Border Color
			=============================
		*/
		<?php
		ql_print_colors($contrast_color, $ql_Contrast_border_color, 'border-color');
		?>










		/*
			Header Color
			---> Background Color
			=============================
		*/
		<?php
		ql_print_colors($header_color, $ql_Header_color, 'background-color');
		?>


		/*
			Header Color
			---> Text Color
			=============================
		*/
		<?php
		ql_print_colors($header_color_text, $ql_Header_color_text, 'color');
		?>

		/*
			Header Color
			---> Background Color
			=============================
		*/
		<?php
		ql_print_colors($header_color_text, $ql_Header_color_text_bck, 'background-color');
		?>


		/*
			Sidebar Nav Color
			---> Background Color
			=============================
		*/
		<?php
		ql_print_colors($sidebar_nav_color, $ql_Sidebar_nav_color, 'background-color');
		?>
		/*
			Sidebar Nav Color
			---> Border Color
			=============================
		*/
		<?php
		ql_print_colors($sidebar_nav_color, $ql_Sidebar_nav_border_color, 'border-color');
		?>
		/*
			Sidebar Nav Menu Color
			---> Text Color
			=============================
		*/
		<?php
		ql_print_colors($sidebar_nav_color_menu, $ql_Sidebar_nav_menu_color, 'color');
		?>
		/*
			Sidebar Nav Text Color
			---> Text Color
			=============================
		*/
		<?php
		ql_print_colors($sidebar_nav_color_text, $ql_Sidebar_nav_text_color, 'color');
		?>
		/*
			Sidebar Nav Social Icons Color
			---> Text Color
			=============================
		*/
		<?php
		ql_print_colors($sidebar_nav_color_social, $ql_Sidebar_nav_social_color, 'color');
		?>
		/*
			Sidebar Nav Text Color
			---> Text Color
			=============================
		*/
		<?php
		ql_print_colors($sidebar_nav_color_text, $ql_Sidebar_nav_border_color, 'border-color');
		?>

	    </style>

	  <?php

	  
	}
}//end if function_exists

add_action( 'wp_head', 'ql_header_styles' );
?>
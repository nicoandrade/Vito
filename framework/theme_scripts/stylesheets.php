<?php
	
	//=============================================================
	//Theme Stylesheets
	//=============================================================
if ( ! function_exists( 'ql_enqueue_stylesheets' ) ){
	function ql_enqueue_stylesheets() {
		
		//Google Font =======================================================
		wp_register_style('ql_googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400italic,400,700');
        wp_enqueue_style( 'ql_googleFonts');
        //=================================================================
		
		//Bootstrap =======================================================
		wp_register_style('bootstrap', QL_THEME_CSS . '/bootstrap.css', array(), '3.1', 'all');  
		wp_enqueue_style('bootstrap');  
		//=================================================================

		//Main Stylesheet =================================================
		wp_register_style('main-stylesheet', get_bloginfo('stylesheet_url'), array('bootstrap'), '1.0', 'all');  
		wp_enqueue_style('main-stylesheet');  
		//=================================================================

	}
}
	add_action('wp_enqueue_scripts', 'ql_enqueue_stylesheets');




if ( ! function_exists( 'ql_enqueue_admin_stylesheets' ) ){
	function ql_enqueue_admin_stylesheets() {
		//Admin Stylesheet =================================================
			wp_register_style('admin-stylesheet', QL_THEME_CSS . '/admin_styles.css', array(), '1.0', 'all');  
			wp_enqueue_style('admin-stylesheet');  
		//=================================================================
	}
}
	add_action( 'admin_print_styles', 'ql_enqueue_admin_stylesheets' );
?>
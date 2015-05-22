<?php
	
	//=============================================================
	//Theme Scripts
	//=============================================================
	
	//Register JS Scripts for later use
if ( ! function_exists( 'ql_enqueue_scripts' ) ){
	function ql_enqueue_scripts() {
		
		//HTML5Shiv =============================================
		wp_register_script('html5shiv', THEME_JS . '/html5shiv.min.js', '3.7.3', true);
		wp_enqueue_script('html5shiv');
		//=================================================================	
		
		//hoverIntent Plugin ==============================================
		wp_register_script('hoverIntent', THEME_JS . '/jquery.hoverIntent.minified.js', array('jquery'), '6.0', true );
		wp_enqueue_script('hoverIntent');
		//=================================================================

		//Modernizr Plugin ==============================================
		wp_register_script('modernizr', THEME_JS . '/modernizr.min.js', '2.8.3', true );
		wp_enqueue_script('modernizr');
		//=================================================================

		//Pace  =============================================
		wp_register_script('pace', THEME_JS . '/pace.min.js', array(), '0.2.0', true);
		wp_enqueue_script('pace');
		//=================================================================

		//jQuery Easing Plugin ============================================
		wp_register_script('easing', THEME_JS . '/jquery.easing.1.3.js', array('jquery'), '1.3', true);
		wp_enqueue_script('easing');
		//=================================================================
		
		//Bootstrap JS ========================================
		wp_register_script('bootstrap', THEME_JS . '/bootstrap.min.js', array(), '2.1.0', true);
		wp_enqueue_script('bootstrap');
		//=================================================================
		
		//Comment Reply ===================================================
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		//=================================================================



		//Customs Scripts =================================================
		wp_register_script('theme-custom', THEME_JS . '/script.js', array('jquery', 'bootstrap'), '1.0', true );
		wp_enqueue_script('theme-custom');
		//=================================================================
	}
}//end if function_exists
	add_action('wp_enqueue_scripts', 'ql_enqueue_scripts');






/*
Enqueue Script for Live previw in the Theme Customizer

*/
if ( ! function_exists( 'ql_customizer_live_preview' ) ){
	function ql_customizer_live_preview()
	{
		wp_enqueue_script( 'ql-themecustomizer',			//Give the script an ID
			  THEME_JS.'/theme-customizer.js',//Point to file
			  array( 'jquery','customize-preview' ),	//Define dependencies
			  '',						//Define a version (optional) 
			  true						//Put script in footer?
		);
	}
}//end if function_exists
add_action( 'customize_preview_init', 'ql_customizer_live_preview' );
?>
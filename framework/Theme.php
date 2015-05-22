<?php
if(!class_exists('ql_Theme')){
/**
 * Theme Class
 */
class ql_Theme {

	/**
	 * Here are loaded all the initial files, constant, etc.
	 */
	function __construct($theme_info){
	

		/* Define theme's constants. */
		$this->constants($theme_info);

		/* Add Theme support */
		$this->theme_support();
		
		/* Add Stylesheets for the Theme (CSS) */
		$this->stylesheets();

		/* Add JS Scripts for the Theme (JS) */
		$this->scripts();
		
		/* Add Theme Functions */
		$this->theme_functions();
		
		/* Create all the widget areas */
		$this->widget_areas();

		/* Customizer */
		$this->customizer();
				
		
		/* Set the Full Width Image value */
		if ( ! isset( $content_width ) ) $content_width = 649;
		
	}
	
	
	
	
	/**
	 * Defines the constant paths for use within the theme.
	 */
	private function constants($theme_info) {
		define('QL_THEME_NAME', $theme_info['theme_name']);
		define('QL_THEME_SLUG', $theme_info['theme_slug']);
		define('QL_THEME_VERSION', $theme_info['theme_version']);
		define('QL_THEME_AUTHOR', $theme_info['theme_author']);
		define('QL_THEME_AUTHOR_URI', $theme_info['theme_author_uri']);

		define('QL_THEME_DIR', get_template_directory());
		define('QL_THEME_URI', get_template_directory_uri());

		
		define('QL_THEME_CSS', QL_THEME_URI . '/css');
		define('QL_THEME_JS', QL_THEME_URI . '/js');
		define('QL_THEME_IMAGES', QL_THEME_URI . '/images');


		define('QL_THEME_FRAMEWORK', QL_THEME_DIR . '/framework');
		define('QL_THEME_FRAMEWORK_URI', QL_THEME_URI . '/framework');

		define('QL_THEME_ADMIN', QL_THEME_FRAMEWORK_URI . '/admin');
		define('QL_THEME_FUNCTIONS', QL_THEME_FRAMEWORK . '/functions');
		define('QL_THEME_SCRIPTS', QL_THEME_FRAMEWORK . '/theme_scripts');
		define('QL_THEME_POST_TYPES', QL_THEME_FRAMEWORK . '/post_types');
		define('QL_THEME_META_BOXES', QL_THEME_FRAMEWORK . '/meta_boxes');
		define('QL_THEME_META_BOXES_URI', QL_THEME_FRAMEWORK_URI . '/meta_boxes');
		define('QL_THEME_WIDGET_AREAS', QL_THEME_FRAMEWORK . '/widget_areas');
		define('QL_THEME_WIDGETS', QL_THEME_FRAMEWORK . '/widgets');
		define('QL_THEME_SHORTCODES', QL_THEME_FRAMEWORK . '/shortcodes');
		define('QL_THEME_FULLSCREEN', QL_THEME_FRAMEWORK . '/fullscreen');
		define('QL_THEME_PLUGINS', QL_THEME_FRAMEWORK . '/plugins');
		define('QL_THEME_PLUGINS_URI', QL_THEME_FRAMEWORK_URI . '/plugins');

		
		define('QL_THEME_LENGUAGES', QL_THEME_DIR . '/languages');



		//Constant for Child Themes
		define('QL_CHILD_THEME_DIR', get_stylesheet_directory());
		define('QL_CHILD_THEME_URI', get_stylesheet_directory_uri());
		
		define('QL_CHILD_THEME_CSS', QL_CHILD_THEME_URI . '/css');
		define('QL_CHILD_THEME_JS', QL_CHILD_THEME_URI . '/js');
		define('QL_CHILD_THEME_IMAGES', QL_CHILD_THEME_URI . '/images');

		define('QL_CHILD_THEME_FRAMEWORK', QL_CHILD_THEME_DIR . '/framework');
		define('QL_CHILD_THEME_FRAMEWORK_URI', QL_CHILD_THEME_URI . '/framework');

		define('QL_CHILD_THEME_ADMIN', QL_CHILD_THEME_FRAMEWORK_URI . '/admin');
		define('QL_CHILD_THEME_FUNCTIONS', QL_CHILD_THEME_FRAMEWORK . '/functions');
		define('QL_CHILD_THEME_SCRIPTS', QL_CHILD_THEME_FRAMEWORK . '/theme_scripts');
		define('QL_CHILD_THEME_POST_TYPES', QL_CHILD_THEME_FRAMEWORK . '/post_types');
		define('QL_CHILD_THEME_META_BOXES', QL_CHILD_THEME_FRAMEWORK . '/meta_boxes');
		define('QL_CHILD_THEME_META_BOXES_URI', QL_CHILD_THEME_FRAMEWORK_URI . '/meta_boxes');
		define('QL_CHILD_THEME_WIDGET_AREAS', QL_CHILD_THEME_FRAMEWORK . '/widget_areas');
		define('QL_CHILD_THEME_WIDGETS', QL_CHILD_THEME_FRAMEWORK . '/widgets');
		define('QL_CHILD_THEME_SHORTCODES', QL_CHILD_THEME_FRAMEWORK . '/shortcodes');
		define('QL_CHILD_THEME_FULLSCREEN', QL_CHILD_THEME_FRAMEWORK . '/fullscreen');
		define('QL_CHILD_THEME_PLUGINS', QL_CHILD_THEME_FRAMEWORK . '/plugins');
		define('QL_CHILD_THEME_PLUGINS_URI', QL_CHILD_THEME_FRAMEWORK_URI . '/plugins');

		
		define('QL_CHILD_THEME_LENGUAGES', QL_CHILD_THEME_DIR . '/languages');
	}
	
	
	
	
	

	
	/**
	 * Add Stylesheets for the Theme (CSS)
	 */
	public function stylesheets(){

		//Stylesheets
		ql_require_file("/stylesheets.php", QL_THEME_SCRIPTS, QL_CHILD_THEME_SCRIPTS);


		//Custom Styles from Admin Panel
		//ql_require_file("/styles.php", QL_THEME_SCRIPTS, QL_CHILD_THEME_SCRIPTS);
		
	}



	/**
	 * Add JS Scripts for the Theme (JS)
	 */
	public function scripts(){

		//Stylesheets
		ql_require_file("/scripts.php", QL_THEME_SCRIPTS, QL_CHILD_THEME_SCRIPTS);
		
	}

	
	
	
	
	/**
	 * Add Theme Support
	 */
	public function theme_support(){		
		function ql_setup() {

			load_theme_textdomain( 'eneaa', get_template_directory() . '/languages' );

			add_theme_support( 'post-thumbnails' );

			if ( function_exists( 'add_image_size' ) ) {
				//Blog Thumbnails
				add_image_size( 'post', 953, 536, true );
			}
		
			// Add RSS links to <head> section
			add_theme_support('automatic-feed-links');
			
			//Add Menu Manager---------------------------
			add_theme_support( 'nav-menus' );

			register_nav_menus( array('menu-1' => __( 'Navigation Menu' , 'quemalabs_admin')));

			//Title support---------------------------
			add_theme_support( 'title-tag' );

			// Setup the WordPress core custom background feature.
			add_theme_support( 'custom-background', apply_filters( 'ql_custom_background_args', array(
				'default-color'      => "#F1F1F1",
				'default-attachment' => 'fixed',
			) ) );

			//HTML5 support
			add_theme_support( 'html5', array(
				'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );

			// Styles for TinyMCE
		    add_editor_style( QL_THEME_CSS . '/custom-editor-style.css' );
		    $font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' );
    		add_editor_style( $font_url );


			add_theme_support( 'custom-header', apply_filters( 'ql_custom_header_args', array(
				'default-text-color'     => "#777777",
				'width'                  => 953,
				'height'                 => 110,
				'wp-head-callback'       => 'ql_header_style',
			) ) );
		}
		add_action( 'after_setup_theme', 'ql_setup' );
	}
	
	
	
	/**
	 * Add Theme Functions
	 */
	public function theme_functions(){

		//Custom Comments		
		ql_require_file("/custom_comments.php", QL_THEME_FUNCTIONS, QL_CHILD_THEME_FUNCTIONS);
		
		//Single Functions		
		ql_require_file( "/single_functions.php", QL_THEME_FUNCTIONS, QL_CHILD_THEME_FUNCTIONS);

		//Custom Filters		
		ql_require_file( "/custom_filters.php", QL_THEME_FUNCTIONS, QL_CHILD_THEME_FUNCTIONS);

		//Custom Header
		ql_require_file("/custom-header.php", QL_THEME_FUNCTIONS, QL_CHILD_THEME_FUNCTIONS);	

	}
	
	
		

	
	/**
	 * Create all the widget areas
	 */
	public function widget_areas(){
		ql_require_file("/widget_areas.php", QL_THEME_WIDGET_AREAS, QL_CHILD_THEME_WIDGET_AREAS);
	}
	
	/**
	 * Create all the widget areas
	 */
	public function customizer(){
		/**
		 * Front End Customizer
		 *
		 * WordPress 3.4 Required
		 */

		ql_require_file('/theme_customizer.php', QL_THEME_FUNCTIONS, QL_CHILD_THEME_FUNCTIONS);
	}


	
	

}//class Theme

}//if !class_exists
?>
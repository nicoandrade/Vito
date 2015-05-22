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
		
		/* Add support for lenguages */
		$this->lenguages();

		/* Add Stylesheets for the Theme (CSS) */
		$this->stylesheets();

		/* Add JS Scripts for the Theme (JS) */
		$this->scripts();
		
		/* Enable Plugins Activations */
		$this->plugins_activation();

		/* Add Theme support */
		$this->theme_support();

		
		/* Add Theme Functions */
		$this->theme_functions();
		
		/* Create all the widget areas */
		$this->widget_areas();
				
		
		/* Set the Full Width Image value */
		if ( ! isset( $content_width ) ) $content_width = 649;
		
	}
	
	
	
	
	/**
	 * Defines the constant paths for use within the theme.
	 */
	private function constants($theme_info) {
		define('THEME_NAME', $theme_info['theme_name']);
		define('THEME_SLUG', $theme_info['theme_slug']);
		define('THEME_VERSION', $theme_info['theme_version']);
		define('THEME_AUTHOR', $theme_info['theme_author']);
		define('THEME_AUTHOR_URI', $theme_info['theme_author_uri']);

		define('THEME_DIR', get_template_directory());
		define('THEME_URI', get_template_directory_uri());

		
		define('THEME_CSS', THEME_URI . '/css');
		define('THEME_JS', THEME_URI . '/js');
		define('THEME_IMAGES', THEME_URI . '/images');


		define('THEME_FRAMEWORK', THEME_DIR . '/framework');
		define('THEME_FRAMEWORK_URI', THEME_URI . '/framework');

		define('THEME_ADMIN', THEME_FRAMEWORK_URI . '/admin');
		define('THEME_FUNCTIONS', THEME_FRAMEWORK . '/functions');
		define('THEME_SCRIPTS', THEME_FRAMEWORK . '/theme_scripts');
		define('THEME_POST_TYPES', THEME_FRAMEWORK . '/post_types');
		define('THEME_META_BOXES', THEME_FRAMEWORK . '/meta_boxes');
		define('THEME_META_BOXES_URI', THEME_FRAMEWORK_URI . '/meta_boxes');
		define('THEME_WIDGET_AREAS', THEME_FRAMEWORK . '/widget_areas');
		define('THEME_WIDGETS', THEME_FRAMEWORK . '/widgets');
		define('THEME_SHORTCODES', THEME_FRAMEWORK . '/shortcodes');
		define('THEME_FULLSCREEN', THEME_FRAMEWORK . '/fullscreen');
		define('THEME_PLUGINS', THEME_FRAMEWORK . '/plugins');
		define('THEME_PLUGINS_URI', THEME_FRAMEWORK_URI . '/plugins');

		
		define('THEME_LENGUAGES', THEME_DIR . '/languages');



		//Constant for Child Themes
		define('CHILD_THEME_DIR', get_stylesheet_directory());
		define('CHILD_THEME_URI', get_stylesheet_directory_uri());
		
		define('CHILD_THEME_CSS', CHILD_THEME_URI . '/css');
		define('CHILD_THEME_JS', CHILD_THEME_URI . '/js');
		define('CHILD_THEME_IMAGES', CHILD_THEME_URI . '/images');

		define('CHILD_THEME_FRAMEWORK', CHILD_THEME_DIR . '/framework');
		define('CHILD_THEME_FRAMEWORK_URI', CHILD_THEME_URI . '/framework');

		define('CHILD_THEME_ADMIN', CHILD_THEME_FRAMEWORK_URI . '/admin');
		define('CHILD_THEME_FUNCTIONS', CHILD_THEME_FRAMEWORK . '/functions');
		define('CHILD_THEME_SCRIPTS', CHILD_THEME_FRAMEWORK . '/theme_scripts');
		define('CHILD_THEME_POST_TYPES', CHILD_THEME_FRAMEWORK . '/post_types');
		define('CHILD_THEME_META_BOXES', CHILD_THEME_FRAMEWORK . '/meta_boxes');
		define('CHILD_THEME_META_BOXES_URI', CHILD_THEME_FRAMEWORK_URI . '/meta_boxes');
		define('CHILD_THEME_WIDGET_AREAS', CHILD_THEME_FRAMEWORK . '/widget_areas');
		define('CHILD_THEME_WIDGETS', CHILD_THEME_FRAMEWORK . '/widgets');
		define('CHILD_THEME_SHORTCODES', CHILD_THEME_FRAMEWORK . '/shortcodes');
		define('CHILD_THEME_FULLSCREEN', CHILD_THEME_FRAMEWORK . '/fullscreen');
		define('CHILD_THEME_PLUGINS', CHILD_THEME_FRAMEWORK . '/plugins');
		define('CHILD_THEME_PLUGINS_URI', CHILD_THEME_FRAMEWORK_URI . '/plugins');

		
		define('CHILD_THEME_LENGUAGES', CHILD_THEME_DIR . '/languages');
	}
	
	
	
	
	/**
	 * Load the lenguage for the Theme
	 */
	public function lenguages(){

		load_theme_textdomain( 'eneaa', THEME_LENGUAGES );
		$locale = get_locale();
		$locale_file = THEME_LENGUAGES."/$locale.php";
		if ( is_readable($locale_file) )
			require_once($locale_file);
	}
	

	
	/**
	 * Add Stylesheets for the Theme (CSS)
	 */
	public function stylesheets(){

		//Stylesheets
		ql_require_file("/stylesheets.php", THEME_SCRIPTS, CHILD_THEME_SCRIPTS);


		//Custom Styles from Admin Panel
		//ql_require_file("/styles.php", THEME_SCRIPTS, CHILD_THEME_SCRIPTS);
		
	}



	/**
	 * Add JS Scripts for the Theme (JS)
	 */
	public function scripts(){

		//Stylesheets
		ql_require_file("/scripts.php", THEME_SCRIPTS, CHILD_THEME_SCRIPTS);
		
	}

	
	

	/**
	 * Enable Plugins Activations
	 */
	public function plugins_activation(){
		ql_require_file("/ql_tgm_plugin_activation.php", THEME_FUNCTIONS, CHILD_THEME_FUNCTIONS);
	}




	
	
	
	/**
	 * Add Theme Support
	 */
	public function theme_support(){		
		function ql_setup() {
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

			add_theme_support( 'html5', array(
				'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			) );
		}
		add_action( 'after_setup_theme', 'ql_setup' );
	}
	
	
	
	/**
	 * Add Theme Functions
	 */
	public function theme_functions(){

		//Custom Comments		
		ql_require_file("/custom_comments.php", THEME_FUNCTIONS, CHILD_THEME_FUNCTIONS);
		
		//Single Functions		
		ql_require_file( "/single_functions.php", THEME_FUNCTIONS, CHILD_THEME_FUNCTIONS);

		//Custom Filters		
		ql_require_file( "/custom_filters.php", THEME_FUNCTIONS, CHILD_THEME_FUNCTIONS);		

	}
	
	
		

	
	/**
	 * Create all the widget areas
	 */
	public function widget_areas(){
		ql_require_file("/widget_areas.php", THEME_WIDGET_AREAS, CHILD_THEME_WIDGET_AREAS);
	}
	
	

	
	

}//class Theme

}//if !class_exists
?>
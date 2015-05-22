<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {


	//CUSTOM QUEMA LABS-----------------------------------------
	 // $optionsframework_settings = of_get_option('optionsframework');
	 // $optionsframework_settings['id'] = 'quemalabs_options';
	 // update_option('optionsframework', $optionsframework_settings);


	return 'quemalabs_options';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fie lds, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'quemalabs_admin'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	//Fonts options
	$font_options = array(
		'"Helvetica Neue", Helvetica, sans-serif' => 'Helvetica',
		'Verdana' => 'Verdana',
		'Georgia' => 'Georgia',
		'Trebuchet' => 'Trebuchet',
		'Tahoma' => 'Tahoma' 
		);

	// Test data
	$test_array = array(
		'one' => __('One', 'quemalabs_admin'),
		'two' => __('Two', 'quemalabs_admin'),
		'three' => __('Three', 'quemalabs_admin'),
		'four' => __('Four', 'quemalabs_admin'),
		'five' => __('Five', 'quemalabs_admin')
		);


	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'quemalabs_admin'),
		'two' => __('Pancake', 'quemalabs_admin'),
		'three' => __('Omelette', 'quemalabs_admin'),
		'four' => __('Crepe', 'quemalabs_admin'),
		'five' => __('Waffle', 'quemalabs_admin')
		);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
		);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '13px',
		'face' => 'Helvetica',
		'style' => 'normal',
		'color' => '#737373' );

	// Typography Options
	$typography_options = array(
		'sizes' => false,
		'faces' => array( 'Helvetica' => '"Helvetica Neue", Helvetica, sans-serif','Verdana' => 'Verdana','Georgia' => 'Georgia','Trebuchet' => 'Trebuchet', 'Tahoma' => 'Tahoma' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => '#737373'
		);

	//True/False options
	$options_true_false = array("true" => "True","false" => "False");


	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  QL_THEME_IMAGES ;


	$shortname = "ql_"; //deprecated








	$options = array();

	$options[] = array(
		'name' => __('General Settings', 'quemalabs_admin'),
		'type' => 'heading');


	$options[] = array(
		'name' => __('Theme Info', 'quemalabs_admin'),
		'desc' => '<strong>Name:</strong> '. QL_THEME_NAME . '<br />' .
		'<strong>Version:</strong> '. QL_THEME_VERSION . '<br />' .
		'<strong>Author:</strong> ' . QL_THEME_AUTHOR,
		'type' => 'info');



	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
		);

	$options[] = array(
		'name' => __('Favicon', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');



	$options[] = array(
		'name' => __('Custom Favicon', 'quemalabs_admin'),
		'desc' => __("Upload a 16px x 16px Png/Gif image that will represent your website's favicon.", 'quemalabs_admin'),
		'id' =>  'custom_favicon',
		'type' => 'upload');

    $options[] = array(
		'name' => __('', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

	

	$options['sidebar_side'] = array(
		'name' => __('Sidebar side', 'quemalabs_admin'),
		'desc' => __('Select if you want the Sidebar on the right or left.', 'quemalabs_admin'),
		'id' => "sidebar_side",
		'std' => "right",
		'type' => "images",
		'options' => array(
			'right' => $imagepath . '/2cr.png',
			'left' => $imagepath . '/2cl.png'
		));







	$options[] = array(
		'name' => __('Header', 'quemalabs_admin'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Custom Logo', 'quemalabs_admin'),
		'desc' => __("Upload a logo for your theme, or specify the image address of your online logo. (http://yoursite.com/logo.png)", 'quemalabs_admin'),
		'id' =>  'logo',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Custom Logo Retina size', 'quemalabs_admin'),
		'desc' => __("Upload the logo for retina screens. (Same logo, twice the size)", 'quemalabs_admin'),
		'id' =>  'logo_retina',
		'type' => 'upload');

	$options[] = array(
		'name' => __('', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

	$options['show_desc'] = array(
		'name' => __("Show Tagline", 'quemalabs_admin'),
		'desc' => __("Show tagline in the header", 'quemalabs_admin'),
		'id' =>  'show_desc',
		'std' => true,
		'type' => 'checkbox' );

	$options[] = array(
		'name' => __('', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

		$options['header_style'] = array(
		'name' => __('Header Style', 'quemalabs_admin'),
		'desc' => __('Select Header style.', 'quemalabs_admin'),
		'id' => "header_style",
		'std' => "1",
		'type' => "images",
		'options' => array(
			'1' => $imagepath . '/header2.png',
			'2' => $imagepath . '/full_header.png'
			//'3' => $imagepath . '/header3.png'
		));







	$options[] = array(
		'name' => __('Styling', 'quemalabs_admin'),
		'type' => 'heading');


	$options[ 'featured_color'] = array(
		'name' => __('Featured Color', 'quemalabs_admin'),
		'desc' => __('Select the featured color for the Theme.', 'quemalabs_admin'),
		'id' =>  'featured_color',
		'std' => '#444444',
		'class' => 'mini',
		'type' => 'color' );

	$options[ 'contrast_color'] = array(
		'name' => __('Contrast Color', 'quemalabs_admin'),
		'desc' => __('This color should contrast with the Featured Color.', 'quemalabs_admin'),
		'id' =>  'contrast_color',
		'std' => '#FFFFFF',
		'class' => 'mini',
		'type' => 'color' );

	$options['background_color'] = array(
		'name' => __('Background Color', 'quemalabs_admin'),
		'desc' => __('Select the background color for the Theme.', 'quemalabs_admin'),
		'id' =>  'background_color',
		'std' => '#FFFFFF',
		'class' => 'mini',
		'type' => 'color' );

	$options['headings_color'] = array(
		'name' => __('Headings Color', 'quemalabs_admin'),
		'desc' => __('Select the background color for the Theme.', 'quemalabs_admin'),
		'id' =>  'headings_color',
		'std' => '#000000',
		'class' => 'mini',
		'type' => 'color' );

	$options[] = array(
		'name' => __('Header', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

    $options['header_color'] = array(
		'name' => __('Background Color', 'quemalabs_admin'),
		'desc' => __('Select the background color for the header.', 'quemalabs_admin'),
		'id' =>  'header_color',
		'std' => '#ffffff',
		'class' => 'mini',
		'type' => 'color' );

    $options['header_color_text'] = array(
		'name' => __('Text Color', 'quemalabs_admin'),
		'desc' => __('Select the color for text in the header.', 'quemalabs_admin'),
		'id' =>  'header_color_text',
		'std' => '#777777',
		'class' => 'mini',
		'type' => 'color' );

    $options[] = array(
		'name' => __('Sidebar Nav', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

    $options['sidebar_nav_color'] = array(
		'name' => __('Background Color', 'quemalabs_admin'),
		'desc' => __('Select the background color for the sidebar navigation.', 'quemalabs_admin'),
		'id' =>  'sidebar_nav_color',
		'std' => '#363636',
		'class' => 'mini',
		'type' => 'color' );

    $options['sidebar_nav_color_menu'] = array(
		'name' => __('Menu Color', 'quemalabs_admin'),
		'desc' => __('Select color for the sidebar navigation menu.', 'quemalabs_admin'),
		'id' =>  'sidebar_nav_color_menu',
		'std' => '#ffffff',
		'class' => 'mini',
		'type' => 'color' );

    $options['sidebar_nav_color_text'] = array(
		'name' => __('Text Color', 'quemalabs_admin'),
		'desc' => __('Select color for the sidebar navigation text.', 'quemalabs_admin'),
		'id' =>  'sidebar_nav_color_text',
		'std' => '#777777',
		'class' => 'mini',
		'type' => 'color' );

    $options['sidebar_nav_color_social'] = array(
		'name' => __('Social Icons Color', 'quemalabs_admin'),
		'desc' => __('Select color for the sidebar navigation social icons.', 'quemalabs_admin'),
		'id' =>  'sidebar_nav_color_social',
		'std' => '#c3c3c3',
		'class' => 'mini',
		'type' => 'color' );

    $options[] = array(
		'name' => __('', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Custom CSS', 'quemalabs_admin'),
		'desc' => __('Quickly add some CSS to your theme by adding it to this block.', 'quemalabs_admin'),
		'id' =>  'custom_css',
		'std' => '',
		'type' => 'textarea');












	$options[] = array( "name" => "Footer",
		"type" => "heading");    


	$options[] = array(
		'name' => __('Footer Text', 'quemalabs_admin'),
		'desc' => __('Custom HTML and Text that will appear at the bottom of your site.', 'quemalabs_admin'),
		'id' =>  'footer_text',
		'type' => 'textarea',
		'std' => "Copyright &copy; ".date('Y')." <a href='".esc_url(home_url())."' title='".get_bloginfo('name')."'>".get_bloginfo('name')."</a>.");

	$options[] = array(
		'name' => __('Designed by Quema Labs', 'quemalabs_admin'),
		'desc' => __('If you are happy with the Theme you can give us credit just by adding a small link.', 'quemalabs_admin'),
		'id' =>  'quemalabs_credit',
		'std' => true,
		'type' => 'checkbox' );


	$options[] = array(
		'name' => __('Footer Social Icons', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');


	$options[] = array( "name" => "Facebook Link",
		"desc" => "The URL for the social icons on the header. Example: http://facebook.com/MyCompany",
		"id" =>  "hlink_facebook",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Twitter Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_twitter",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Flickr Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_flickr",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Youtube Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_youtube",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Vimeo Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_vimeo",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "LinkedIn Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_linkedin",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Skype Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_skype",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Forrst Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_forrst",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Google +1 Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_google",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Tumblr Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_tumblr",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Dribbble Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_dribbble",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Instagram Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_instagram",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Foursquare Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_foursquare",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Pinterest Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_pinterest",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "RSS Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "hlink_rss",
		"std" => get_bloginfo('rss2_url'),
		"type" => "text",
		"subheading" => "h4"
		); 








	$options[] = array( "name" => "Sidebar Nav",
		"type" => "heading");

	$options[] = array(
		'name' => __('Info to display in the Sidebar Nav.', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Cover Image', 'quemalabs_admin'),
		'desc' => __("Image as cover background on the Sidebar Nav", 'quemalabs_admin'),
		'id' => 'sidebar_user_cover',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Image', 'quemalabs_admin'),
		'desc' => __("Your image. Square size.", 'quemalabs_admin'),
		'id' =>  'sidebar_user_image',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Name', 'quemalabs_admin'),
		'desc' => __('Your name.', 'quemalabs_admin'),
		'id' =>  'sidebar_user_name',
		'type' => 'text',
		'std' => "");

	$options[] = array(
		'name' => __('Description', 'quemalabs_admin'),
		'desc' => __('Your description.', 'quemalabs_admin'),
		'id' =>  'sidebar_user_desc',
		'type' => 'textarea',
		'std' => "");

	$options['about_page'] = array(
		'name' => __('About Page', 'quemalabs_admin'),
		'desc' => __('Select your about page to link in the Sidebar Navigation.', 'quemalabs_admin'),
		'id' => 'about_page',
		'std' => '',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $options_pages );


	$options[] = array(
		'name' => __('Social Icons', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');


	$options[] = array( "name" => "Facebook Link",
		"desc" => "The URL for the social icons on the header. Example: http://facebook.com/MyCompany",
		"id" =>  "sidebar_hlink_facebook",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Twitter Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_twitter",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Flickr Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_flickr",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Youtube Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_youtube",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Vimeo Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_vimeo",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "LinkedIn Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_linkedin",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Skype Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_skype",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Forrst Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_forrst",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Google +1 Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_google",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Tumblr Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_tumblr",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Dribbble Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_dribbble",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Instagram Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_instagram",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Foursquare Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_foursquare",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "Pinterest Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_pinterest",
		"std" => "",
		"type" => "text",
		"subheading" => "h4"
		); 
	$options[] = array( "name" => "RSS Link",
		"desc" => "The URL for the social icons on the header.",
		"id" =>  "sidebar_hlink_rss",
		"std" => get_bloginfo('rss2_url'),
		"type" => "text",
		"subheading" => "h4"
		); 








	$options[] = array( 'name' => __('Typography', 'quemalabs_admin'),
		'type' => 'heading');


	$options[] = array(
		'name' => __('Content Typography', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

	$options['content_typography_font'] = array(
		'name' => __('Content Font', 'quemalabs_admin'),
		'desc' => __('Select the font for your text.', 'quemalabs_admin'),
		'id' => 'content_typography_font',
		'std' => 'Helvetica',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $font_options);

	$options['content_typography_color'] = array(
		'name' => __('Content Font Color', 'quemalabs_admin'),
		'desc' => __('Select the color for your text.', 'quemalabs_admin'),
		'id' =>  'content_typography_color',
		'std' => '#555555',
		'class' => 'mini',
		'type' => 'color' );

	$options['content_typography_weight'] = array(
		'name' => __('Content Font Weight', 'quemalabs_admin'),
		'desc' => __('Select the font weight for your text.', 'quemalabs_admin'),
		'id' => 'content_typography_weight',
		'std' => 'normal',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => array('normal' => __('Normal', 'quemalabs_admin'),'bold' => __('Bold', 'quemalabs_admin')) );


	$options[] = array(
		'name' => __('Links Typography', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');

	$options['links_typography_font'] = array(
		'name' => __('Links Font', 'quemalabs_admin'),
		'desc' => __('Select the font for your links.', 'quemalabs_admin'),
		'id' => 'links_typography_font',
		'std' => 'Helvetica',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $font_options);

	$options['links_typography_color'] = array(
		'name' => __('Links Font Color', 'quemalabs_admin'),
		'desc' => __('Select the color for your links.', 'quemalabs_admin'),
		'id' =>  'links_typography_color',
		'std' => '#000000',
		'class' => 'mini',
		'type' => 'color' );

	$options['links_typography_weight'] = array(
		'name' => __('Links Font Weight', 'quemalabs_admin'),
		'desc' => __('Select the font wheight for your links.', 'quemalabs_admin'),
		'id' => 'links_typography_weight',
		'std' => 'normal',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => array('normal' => __('Normal', 'quemalabs_admin'),'bold' => __('Bold', 'quemalabs_admin')) );

	$options[] = array(
		'name' => __('Font Systems', 'quemalabs_admin'),
		'desc' => __('', 'quemalabs_admin'),
		'type' => 'info');



	


	$options[] = array( "name" => __('About Page', 'quemalabs_admin'),
					"type" => "heading");    

	$options[] = array(
			'name' => __('Cover Image', 'quemalabs_admin'),
			'desc' => __("Image as cover in your Author page", 'quemalabs_admin'),
			'id' => $shortname. 'author_cover',
			'type' => 'upload');

	$options[] = array(
			'name' => __('Author Image', 'quemalabs_admin'),
			'desc' => __("Your profile image as Author. If not image is specified, gravatar will be used. Ideal size: 148x148px", 'quemalabs_admin'),
			'id' => $shortname. 'author_image',
			'type' => 'upload');



	$options[] = array(
		'name' => __('Portfolio', 'quemalabs_admin'),
		'type' => 'heading');

	$options[] = array( "name" => "Portfolio Items",
		"desc" => __('Number of items to display in Portfolio page.', 'quemalabs_admin'),
		"id" =>  "portfolio_amount",
		"std" => "12",
		"class" => "mini", //mini, tiny, small
		"type" => "text",
		"subheading" => "h4"
		);

	$options['single_portfolio_layout'] = array(
		'name' => __('Single Portfolio Layout', 'quemalabs_admin'),
		'desc' => __('Changes the layout when you view a portfolio item.', 'quemalabs_admin'),
		'id' => 'single_portfolio_layout',
		'std' => '1',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => array('1' => __('Layout 1', 'quemalabs_admin'),'2' => __('Layout 2', 'quemalabs_admin')) );
	

	$options['portfolio_page'] = array(
		'name' => __('Portfolio Page', 'quemalabs_admin'),
		'desc' => __('Select your portfolio page to link in Single portfolio items.', 'quemalabs_admin'),
		'id' => 'portfolio_page',
		'std' => '',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $options_pages );











	$options[] = array(
		'name' => __('Portfolios Generator', 'quemalabs_admin'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Portfolios', 'quemalabs_admin'),
		'desc' => 'Create portfolios for later use on pages.',
		'id' =>  'portfolios',
		'std' => '',
		'type' => 'portfolio');







	$options[] = array(
		'name' => __('Sidebars Generator', 'quemalabs_admin'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Sidebars', 'quemalabs_admin'),
		'desc' => 'Create sidebar for later use on pages.',
		'id' => $shortname. 'sidebars',
		'std' => '',
		'type' => 'sidebar');





	return $options;
}














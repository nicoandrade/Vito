<?php
/**
 * Front End Customizer
 *
 * WordPress 3.4 Required
 */
 
add_action( 'customize_register', 'vito_quemalabs_options_register' );

function vito_quemalabs_options_register($wp_customize) {


	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->remove_control('blogdescription');
	$wp_customize->get_setting('header_textcolor')->transport='postMessage';	

	/*
	Site Title
	=====================================================
	*/
	$wp_customize->add_section( 'title_tagline', array(
	     'title'    => __( 'Site Title', 'vito' ),
	     'priority' => 20,
	) );


	/*
	Color Section (Default)
	=====================================================
	*/
	$wp_customize->add_setting( 'quemalabs_options[headings_color]', array(
		'default' => '#333333',
		'transport'  => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'vito_headings_color', array(
		'label'      => __( 'Headings Color', 'vito' ),
		'section'    => 'colors',
		'settings'   => 'quemalabs_options[headings_color]'
	) ) );

	$wp_customize->add_setting( 'quemalabs_options[content_typography_color]', array(
		'default' => '#777777',
		'transport'  => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'vito_content_typography_color', array(
		'label'      => __( 'Content Color', 'vito' ),
		'section'    => 'colors',
		'settings'   => 'quemalabs_options[content_typography_color]'
	) ) );

	$wp_customize->add_setting( 'quemalabs_options[links_typography_color]', array(
		'default' => '#68B1D5',
		'transport'  => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'vito_links_typography_color', array(
		'label'      => __( 'Links Color', 'vito' ),
		'section'    => 'colors',
		'settings'   => 'quemalabs_options[links_typography_color]'
	) ) );


	/*
	Social Icons
	=====================================================
	*/
	$wp_customize->add_section( 'vito_social_icons', array(
	     'title'    => __( 'Social Icons', 'vito' ),
	     'priority' => 50,
	) );

	$wp_customize->add_setting('quemalabs_options[social_facebook]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_facebook', array(
        'label'      => __('Facebook', 'vito'),
        'description' => __('Add your social URL:', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_facebook]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_twitter]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_twitter', array(
        'label'      => __('Twitter', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_twitter]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_instagram]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_instagram', array(
        'label'      => __('Instagram', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_instagram]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_flickr]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_flickr', array(
        'label'      => __('Flickr', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_flickr]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_youtube]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_youtube', array(
        'label'      => __('Youtube', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_youtube]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_vimeo-square]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_vimeo-square', array(
        'label'      => __('Vimeo', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_vimeo-square]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_linkedin]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_linkedin', array(
        'label'      => __('LinkedIn', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_linkedin]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_skype]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_skype', array(
        'label'      => __('Skype', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_skype]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_google-plus]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_google-plus', array(
        'label'      => __('Google Plus', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_google-plus]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_tumblr]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_tumblr', array(
        'label'      => __('Tumblr', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_tumblr]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_dribbble]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_dribbble', array(
        'label'      => __('Dribbble', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_dribbble]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_foursquare]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_foursquare', array(
        'label'      => __('Foursquare', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_foursquare]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_pinterest]', array(
        'default'        => '',
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_pinterest', array(
        'label'      => __('Pinterest', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_pinterest]',
    ));

    $wp_customize->add_setting('quemalabs_options[social_rss]', array(
        'default'        => get_bloginfo('rss2_url'),
        'transport'  => 'postMessage',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'type'           => 'option',
    ));
    $wp_customize->add_control('vito_social_rss', array(
        'label'      => __('RSS', 'vito'),
        'section'    => 'vito_social_icons',
        'settings'   => 'quemalabs_options[social_rss]',
    ));

}


/*
Enqueue Script for Live previw in the Theme Customizer
*/
if ( ! function_exists( 'vito_customizer_live_preview' ) ){
	function vito_customizer_live_preview()
	{
		wp_enqueue_script( 'ql-themecustomizer',			//Give the script an ID
			  VITO_THEME_JS.'/theme-customizer.js',//Point to file
			  array( 'jquery','customize-preview' ),	//Define dependencies
			  '',						//Define a version (optional) 
			  true						//Put script in footer?
		);
	}
}//end if function_exists
add_action( 'customize_preview_init', 'vito_customizer_live_preview' );
?>
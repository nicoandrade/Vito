<?php
/**
 * Front End Customizer
 *
 * WordPress 3.4 Required
 */
 
add_action( 'customize_register', 'ql_quemalabs_options_register' );

function ql_quemalabs_options_register($wp_customize) {


	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';
	$wp_customize->get_setting('header_textcolor')->transport='postMessage';	

	/**
	 * This is optional, but if you want to reuse some of the defaults
	 * or values you already have built in the options panel, you
	 * can load them into $options for easy reference
	 */
	 
	$options = optionsframework_options();




	$wp_customize->add_setting( 'quemalabs_options[show_desc]', array(
		'default' => $options['show_desc']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control( 'quemalabs_options_show_desc', array(
		'label' => $options['show_desc']['name'],
		'section' => 'title_tagline',
		'settings' => 'quemalabs_options[show_desc]',
		'type' => $options['show_desc']['type']
	) );

	/* Styling  */

	$wp_customize->add_section( 'quemalabs_options_styling', array(
		'title' => __( 'Styling', 'quemalabs_admin' ),
		'priority' => 100
	) );
	/*
	$wp_customize->add_setting( 'quemalabs_options[example_text]', array(
		'default' => $options['example_text']['std'],
		'type' => 'option'
	) );

	$wp_customize->add_control( 'quemalabs_options_example_text', array(
		'label' => $options['example_text']['name'],
		'section' => 'quemalabs_options_styling',
		'settings' => 'quemalabs_options[example_text]',
		'type' => $options['example_text']['type']
	) );
	
	$wp_customize->add_setting( 'quemalabs_options[example_select]', array(
		'default' => $options['example_select']['std'],
		'type' => 'option'
	) );

	$wp_customize->add_control( 'quemalabs_options_example_select', array(
		'label' => $options['example_select']['name'],
		'section' => 'quemalabs_options_styling',
		'settings' => 'quemalabs_options[example_select]',
		'type' => $options['example_select']['type'],
		'choices' => $options['example_select']['options']
	) );
*/


	$wp_customize->add_setting( 'quemalabs_options[featured_color]', array(
		'default' => $options['featured_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'quemalabs_options_featured_color', array(
		'label'      => $options['featured_color']['name'],
		'description' => $options['featured_color']['desc'],
		'section'    => 'quemalabs_options_styling',
		'settings'   => 'quemalabs_options[featured_color]'
	) ) );



	$wp_customize->add_setting( 'quemalabs_options[contrast_color]', array(
		'default' => $options['contrast_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'quemalabs_options_contrast_color', array(
		'label'      => $options['contrast_color']['name'],
		'description' => $options['contrast_color']['desc'],
		'section'    => 'quemalabs_options_styling',
		'settings'   => 'quemalabs_options[contrast_color]'
	) ) );



	$wp_customize->add_setting( 'quemalabs_options[background_color]', array(
		'default' => $options['background_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'quemalabs_options_background_color', array(
		'label'      => $options['background_color']['name'],
		'description' => $options['background_color']['desc'],
		'section'    => 'quemalabs_options_styling',
		'settings'   => 'quemalabs_options[background_color]'
	) ) );



	$wp_customize->add_setting( 'quemalabs_options[headings_color]', array(
		'default' => $options['headings_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'quemalabs_options_headings_color', array(
		'label'      => $options['headings_color']['name'],
		'description' => $options['headings_color']['desc'],
		'section'    => 'quemalabs_options_styling',
		'settings'   => 'quemalabs_options[headings_color]'
	) ) );











	/* Header  */

	$wp_customize->add_section( 'quemalabs_options_header', array(
		'title' => __( 'Header', 'quemalabs_admin' ),
		'priority' => 103
	) );


	$wp_customize->add_setting( 'quemalabs_options[header_style]', array(
		'default' => $options['header_style']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control( 'quemalabs_options_header_style', array(
		'label' => $options['header_style']['name'],
		'description' => $options['header_style']['desc'],
		'section' => 'quemalabs_options_header',
		'settings' => 'quemalabs_options[header_style]',
		'type' => 'select',
		'choices' => array(
			'1' => __('1', 'quemalabs_admin'),
			'2' => __('2', 'quemalabs_admin')
		)  
	) );










	/* Layout  */

	$wp_customize->add_section( 'quemalabs_options_layout', array(
		'title' => __( 'Layout', 'quemalabs_admin' ),
		'priority' => 104
	) );



	$wp_customize->add_setting( 'quemalabs_options[sidebar_side]', array(
		'default' => $options['sidebar_side']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control( 'quemalabs_options_sidebar_side', array(
		'label' => $options['sidebar_side']['name'],
		'description' => $options['sidebar_side']['desc'],
		'section' => 'quemalabs_options_layout',
		'settings' => 'quemalabs_options[sidebar_side]',
		'type' => 'select',
		'choices' => array(
			'right' => __('Right', 'quemalabs_admin'),
			'left' => __('Left', 'quemalabs_admin')
		)  
	) );












	/* Header Color  */

	$wp_customize->add_section( 'quemalabs_options_header_color', array(
		'title' => __( 'Header Color', 'quemalabs_admin' ),
		'priority' => 104
	) );

	$wp_customize->add_setting( 'quemalabs_options[header_color]', array(
		'default' => $options['header_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'quemalabs_options_header_color', array(
		'label'      => $options['header_color']['name'],
		'section'    => 'quemalabs_options_header_color',
		'description' => $options['header_color']['desc'],
		'settings'   => 'quemalabs_options[header_color]'
	) ) );

	$wp_customize->add_setting( 'quemalabs_options[header_color_text]', array(
		'default' => $options['header_color_text']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'quemalabs_options_header_color_text', array(
		'label'      => $options['header_color_text']['name'],
		'description' => $options['header_color_text']['desc'],
		'section'    => 'quemalabs_options_header_color',
		'settings'   => 'quemalabs_options[header_color_text]'
	) ) );













	/* Typography */

	$wp_customize->add_section( 'quemalabs_options_typography', array(
		'title' => __( 'Typography', 'quemalabs_admin' ),
		'priority' => 110
	) );

	$wp_customize->add_setting( 'quemalabs_options[content_typography_color]', array(
		'default' => $options['content_typography_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'quemalabs_options_content_typography_color', array(
		'label'      => $options['content_typography_color']['name'],
		'section'    => 'quemalabs_options_typography',
		'settings'   => 'quemalabs_options[content_typography_color]'
	) ) );



	$wp_customize->add_setting( 'quemalabs_options[content_typography_font]', array(
		'default' => $options['content_typography_font']['std'],
		'type' => 'option'
	) );
	$wp_customize->add_control( 'quemalabs_options_content_typography_font', array(
		'label' => $options['content_typography_font']['name'],
		'section' => 'quemalabs_options_typography',
		'settings' => 'quemalabs_options[content_typography_font]',
		'type' => $options['content_typography_font']['type'],
		'choices' => $options['content_typography_font']['options']
	) );



	$wp_customize->add_setting( 'quemalabs_options[links_typography_color]', array(
		'default' => $options['links_typography_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'quemalabs_options_links_typography_color', array(
		'label'      => $options['links_typography_color']['name'],
		'section'    => 'quemalabs_options_typography',
		'settings'   => 'quemalabs_options[links_typography_color]'
	) ) );



	$wp_customize->add_setting( 'quemalabs_options[links_typography_font]', array(
		'default' => $options['links_typography_font']['std'],
		'type' => 'option'
	) );
	$wp_customize->add_control( 'quemalabs_options_links_typography_font', array(
		'label' => $options['links_typography_font']['name'],
		'section' => 'quemalabs_options_typography',
		'settings' => 'quemalabs_options[links_typography_font]',
		'type' => $options['links_typography_font']['type'],
		'choices' => $options['links_typography_font']['options']
	) );





}

?>
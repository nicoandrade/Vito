<?php
/**
 * Front End Customizer
 *
 * WordPress 3.4 Required
 */
 
add_action( 'customize_register', 'ql_quemalabs_options_register' );

function ql_quemalabs_options_register($wp_customize) {


	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->remove_control('blogdescription');
	$wp_customize->get_setting('header_textcolor')->transport='postMessage';	

	/*
	Site Title
	=====================================================
	*/
	$wp_customize->add_section( 'title_tagline', array(
	     'title'    => __( 'Site Title', 'eneaa' ),
	     'priority' => 20,
	) );


	/*
	Color Section (Default)
	=====================================================
	*/
	$wp_customize->add_setting( 'headings_color', array(
		'default' => '#333333',
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'headings_color', array(
		'label'      => __( 'Headings Color', 'eneaa' ),
		'section'    => 'colors',
		'settings'   => 'headings_color'
	) ) );

	$wp_customize->add_setting( 'content_typography_color', array(
		'default' => '#444444',
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'content_typography_color', array(
		'label'      => 'Content Color',
		'section'    => 'colors',
		'settings'   => 'content_typography_color'
	) ) );








	/* Typography */
/*
	$wp_customize->add_section( 'typography', array(
		'title' => __( 'Typography', 'quemalabs_admin' ),
		'priority' => 110
	) );

	$wp_customize->add_setting( 'content_typography_color', array(
		'default' => $options['content_typography_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'content_typography_color', array(
		'label'      => $options['content_typography_color']['name'],
		'section'    => 'typography',
		'settings'   => 'content_typography_color'
	) ) );



	$wp_customize->add_setting( 'content_typography_font', array(
		'default' => $options['content_typography_font']['std'],
		'type' => 'option'
	) );
	$wp_customize->add_control( 'content_typography_font', array(
		'label' => $options['content_typography_font']['name'],
		'section' => 'typography',
		'settings' => 'content_typography_font',
		'type' => $options['content_typography_font']['type'],
		'choices' => $options['content_typography_font']['options']
	) );



	$wp_customize->add_setting( 'links_typography_color', array(
		'default' => $options['links_typography_color']['std'],
		'transport'  => 'postMessage',
		'type' => 'option'
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'links_typography_color', array(
		'label'      => $options['links_typography_color']['name'],
		'section'    => 'typography',
		'settings'   => 'links_typography_color'
	) ) );



	$wp_customize->add_setting( 'links_typography_font', array(
		'default' => $options['links_typography_font']['std'],
		'type' => 'option'
	) );
	$wp_customize->add_control( 'links_typography_font', array(
		'label' => $options['links_typography_font']['name'],
		'section' => 'typography',
		'settings' => 'links_typography_font',
		'type' => $options['links_typography_font']['type'],
		'choices' => $options['links_typography_font']['options']
	) );

*/



}

?>
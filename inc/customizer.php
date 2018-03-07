<?php
/**
 * Tirtha Theme Customizer.
 *
 * @package Tirtha
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tirtha_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'my_social_settings', array(
			'title'    => __('Social Icons', 'tirtha'),
			'priority' => 1,
            'description' => __('Add URL to display social icons in footer.', 'tirtha')
	) );

    $wp_customize->add_setting( 'Facebook', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'Facebook', array(
			'label'    => __( "Facebook url:", 'tirtha' ),
			'section'  => 'my_social_settings',
			'type'     => 'text',
			'priority' => 1,
	) );
    $wp_customize->add_setting( 'Google_plus', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'Google_plus', array(
			'label'    => __( "Google plus url:", 'tirtha' ),
			'section'  => 'my_social_settings',
			'type'     => 'text',
			'priority' => 2,
	) );
     $wp_customize->add_setting( 'Linkedin', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control('Linkedin', array(
			'label'    => __( "Linkedin url:", 'tirtha' ),
			'section'  => 'my_social_settings',
			'type'     => 'text',
			'priority' => 3,
	) );

    $wp_customize->add_setting( 'Twitter', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_control( 'Twitter', array(
			'label'    => __( "Twitter url:", 'tirtha' ),
			'section'  => 'my_social_settings',
			'type'     => 'text',
			'priority' => 4,
	) );

	$wp_customize->add_section( 'header_logo_settings', array(
			'title'    => __('Header Logo', 'tirtha'),
			'priority' => 40,
	) );

	$wp_customize->add_setting( 'header_logo', array(
		'transport' => 'postMessage',
		'default' => '',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
    'label'    => __( 'Upload Logo', 'tirtha' ),
    'section'  => 'header_logo_settings',
    'settings' => 'header_logo',
) ) );


}
add_action( 'customize_register', 'tirtha_customize_register' );

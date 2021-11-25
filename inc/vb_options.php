<?php
// add personal color

function mytheme_setup_theme_supported_features() {

	add_theme_support( 'editor-color-palette',
		array(
			array( 'name' => 'darkBlue', 'slug'  => 'darkBlue', 'color' => get_option( 'color_1' ) ),
			array( 'name' => 'metalBlue', 'slug'  => 'metalBlue', 'color' => get_option( 'color_2' ) ),
			array( 'name' => 'darkGrey', 'slug'  => 'darkGrey', 'color' => get_option( 'color_3' ) ),
			array( 'name' => 'lightGrey', 'slug'  => 'lightGrey', 'color' => get_option( 'color_4' ) ),
			array( 'name' => 'pinkRed', 'slug'  => 'pinkRed', 'color' => get_option( 'color_5' ) ),
		)
	);
    // desactivate custom
    add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );


// Recuperer les couleurs dans l'admin

// Example of custom color defined in the Customizer

// $wp_customize->add_setting('primary_color', array(
// 	'default'             => '99CC00',
// 	'sanitize_callback'   => 'sanitize_hex_color',
// 	'capability'          => 'edit_theme_options',
// 	'type'                => 'theme_mod',
// 	'transport'           => 'refresh', 
// ));
// $wp_customize->add_control( new WP_Customize_Color_control($wp_customize, 'primary_color_ctrl', array(
// 	'label'      => __('Primary color', 'your-textdomain'),
// 	'section'    => 'colors',
// 	'settings'   => 'primary_color',	
// )));


// Gutenberg Custom color palette

// add_theme_support( 'editor-color-palette', array(
//     array(
//         'name' => esc_html__( 'Primary color', 'your-textdomain' ),
//         'slug' => 'primary-color',
//         'color' => get_theme_mod('primary_color', '#99CC00'),
//     ),
//     array(
//         'name' => esc_html__( 'Secondary color', 'your-textdomain' ),
//         'slug' => 'secondary-color',
//         'color' => get_theme_mod('secondary_color', '#606060'),
//     ),
// ));	
<?php 

function blojer_customizer( $wp_customize ){

	// Copyright info
	$wp_customize-> add_section( 'sec_copyright', array(
		'title' => __( 'Copyright', 'blojer' ) ,
		'description' => __( 'Please, type here your copyright', 'blojer' )
	) );

	$wp_customize-> add_setting( 'set_copyright', array(
		'type' => 'theme_mod',
		'default' => __( 'Copyright X - All Rights Reserved', 'blojer' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_copyright', array(
		'label' => __( 'Copyright Information', 'blojer' ),
		'description' => __( 'Please, type your copyright here.', 'blojer' ),
		'section' => 'sec_copyright',
		'settings' => 'set_copyright',
		'type' => 'text'
	) );


    // Header Logo title
	$wp_customize-> add_section( 'sec_logo_title', array(
		'title' => __( 'Logo title', 'blojer' ) ,
		'description' => __( 'Please, type here your logo_title', 'blojer' )
	) );

	$wp_customize-> add_setting( 'set_logo_title', array(
		'type' => 'theme_mod',
		'default' => __( 'Blojer Lee', 'blojer' ),
		'sanitize_callback' => 'esc_attr'
	) );

	$wp_customize-> add_control( 'ctrl_logo_title', array(
		'label' => __( 'Logo title', 'blojer' ),
		'description' => __( 'Please, type your logo_title here.', 'blojer' ),
		'section' => 'sec_logo_title',
		'settings' => 'set_logo_title',
		'type' => 'text'
	) );
}

add_action( 'customize_register', 'blojer_customizer' );
<?php

function mmwp_customize_register( $wp_customize ) {

    // Add Sections For Customier


    $wp_customize->add_section('hero', array(
        'title' => 'Hero Section',
        'description' => 'This is the hero settings',
    ));

    // Require Customizer Sections
    require get_stylesheet_directory(  ) .  '/inc/customizer-sections/hero-section.php';


    $wp_customize->add_section('about', array(
        'title' => 'About Section',
        'description' => 'This is the about settings',
    ));

    $wp_customize->add_section('faq', array(
        'title' => 'FAQ Section',
        'description' => 'This is the faq settings',
    ));

    $wp_customize->add_section('mid-banner', array(
        'title' => 'Mid Banner Section',
        'description' => 'This is the middle banner settings',
    ));



}

add_action( 'customize_register', 'mmwp_customize_register' );
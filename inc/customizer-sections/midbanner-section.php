<?php

// Heading for Banner
$wp_customize->add_setting('mid-banner-heading-text', array(
    'default' => 'Banner Title',
    'type' => 'theme_mod'
));

$wp_customize->add_control('mid-banner-heading-text', array(
    'label' => 'Banner Heading',
    'section' => 'mid-banner',
));


// Text For Banner 
$wp_customize->add_setting('mid-banner-text', array(
    'default' => 'banner text should go here',
    'type' => 'theme_mod'
));

$wp_customize->add_control('mid-banner-text', array(
    'label' => 'Banner Text',
    'section' => 'mid-banner',
));


// Background Color for banner
$wp_customize->add_setting( 'midbanner-bg-color', array(
    'default' => '#fff',
    'type' => 'theme_mod'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'midbanner-bg-color', array(
    'label' => 'Mid-Banner Background Color',
    'section' => 'mid-banner',
    'settings' => 'midbanner-bg-color'
)));

// Text color for banner
$wp_customize->add_setting( 'midbanner-text-color', array(
    'default' => '#000',
    'type' => 'theme_mod'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'midbanner-text-color', array(
    'label' => 'Mid-Banner Text Color',
    'section' => 'mid-banner',
    'settings' => 'midbanner-text-color'
)));
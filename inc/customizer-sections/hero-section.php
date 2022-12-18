<?php

// Hero Heading H1
$wp_customize->add_setting('hero-heading-text', array(
    'default' => 'Modern Me Theme',
    'type' => 'theme_mod'
));

$wp_customize->add_control('hero-heading-text', array(
    'label' => 'Hero H1',
    'section' => 'hero',
));

// Hero Subtext
$wp_customize->add_setting('hero-sub-text', array(
    'default' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum,magnam',
    'type' => 'theme_mod'
));

$wp_customize->add_control('hero-sub-text', array(
    'label' => 'Hero subtext',
    'section' => 'hero',
));

/**
 * Below is all buttons settings: Button text, Button Link 
 */

// Hero CTA Text
$wp_customize->add_setting('hero-cta-text', array(
    'default' => 'READ MORE',
    'type' => 'theme_mod'
));

$wp_customize->add_control('hero-cta-text', array(
    'label' => 'Hero CTA Text',
    'section' => 'hero',
));


// Hero CTA Link
$wp_customize->add_setting('hero-cta-link', array(
    'default' => '#',
    'type' => 'theme_mod'
));

$wp_customize->add_control('hero-cta-link', array(
    'label' => 'Hero CTA link',
    'section' => 'hero',
));



/**
 * Hero Colors
 */

 // Hero Background Color Settings
$wp_customize->add_setting( 'hero-bg-color', array(
    'default' => '#0e0e0e',
    'type' => 'theme_mod'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero-bg-color', array(
    'label' => 'Hero Background Color',
    'section' => 'hero',
    'settings' => 'hero-bg-color'
)));

 // Hero Text Color Settings
 $wp_customize->add_setting( 'hero-text-color', array(
    'default' => '#ffffff',
    'type' => 'theme_mod'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero-text-color', array(
    'label' => 'Hero Text Color',
    'section' => 'hero',
    'settings' => 'hero-text-color'
)));

// Hero CTA Button Color
$wp_customize->add_setting( 'hero-cta-color', array(
    'default' => '#ea004e',
    'type' => 'theme_mod'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero-cta-color', array(
    'label' => 'Hero CTA Color',
    'section' => 'hero',
    'settings' => 'hero-cta-color'
)));
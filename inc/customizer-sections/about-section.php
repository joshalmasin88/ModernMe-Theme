<?php

$wp_customize->add_setting('about-image', array(
    'default' => get_stylesheet_directory_uri() . '/images/bit.png',
    'type' => 'theme_mod'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about-image', array(
    'label' => 'About Us Image',
    'section' => 'about',
    'settings' => 'about-image'
)));
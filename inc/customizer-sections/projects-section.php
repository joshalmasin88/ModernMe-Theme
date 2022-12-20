<?php

// Projects Section Background Color
$wp_customize->add_setting( 'projects-bg-color', array(
    'default' => '#0e0e0e',
    'type' => 'theme_mod'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'projects-bg-color', array(
    'label' => 'Projects Background Color',
    'section' => 'custom-projects',
    'settings' => 'projects-bg-color'
)));
<?php

register_sidebar(
    array(
        'name'          => __( 'About Text Area', 'understrap' ),
        'id'            => 'about-text-area',
        'description'   => 'About section text area',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
);

register_sidebar(
    array(
        'name'          => __( 'FAQ Section', 'understrap' ),
        'id'            => 'faq-area',
        'description'   => 'FAQ section text area',
        'before_widget' => '<div class="col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
);
<?php 



    function create_post_type() {
      
      register_post_type( 'projects', 
        array(
          'labels' => array(
            'name' => __( 'Projects' ), 
            'singular_name' => __( 'Project' ), 
          ),
          'public' => true,
          'supports' => array ( 'title','custom-fields' ),
          'hierarchical' => true,
          'menu_icon' => 'dashicons-portfolio',
          'rewrite' => array ( 'slug' => __( 'project' ) ) 
        )
      );
    
    }
    add_action( 'init', 'create_post_type' );
    

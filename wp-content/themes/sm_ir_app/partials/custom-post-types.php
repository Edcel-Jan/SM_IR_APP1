<?php

/**
 * 
 * *Creating custom post type in WP.
 * *Edcel, below is a sample custom post type, 
 * *Creating pages and posts are okay, but front-end/ios guy may have difficulties in pulling the data
 * *as it is from totally different end point
 * 
 * ?We're using custom post types to create custom type of content, see below example.
  */

function sm_investments_corporation() {
  /* SM Investments Corporation */ 
  register_post_type( 'sm-investments-corp', /* don't use long titles here */
      array(
          'labels' => array(
              'name' => __( 'SM Investments Corporation' ),/* This is the main page name */
              'singular_name' => __( 'SM Investments Corporation' )
          ),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array('slug' => 'sm-investments-corporation'),
          'show_in_rest' => true, /* This part is important as it enables the custom post type to show in WP REST API */
          'menu_icon' => 'dashicons-admin-site', /* https://developer.wordpress.org/resource/dashicons/ */
          'supports' => array( 'title', 'editor', 'thumbnail' ) 
      )
  );
  /* Sustainability */
  register_post_type( 'sustainability',
      array(
        'labels' => array(
            'name' => __( 'Sustainability' ),
            'singular_name' => __( 'Sustainability' )
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'sustainability'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-image-filter',
        'supports' => array( 'title', 'editor', 'thumbnail' ) 
    )
  );
}
add_action( 'init', 'sm_investments_corporation' );
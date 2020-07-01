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
        array (
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

    /* Retail */
    register_post_type( 'retail',
        array(
            'labels' => array(
                'name' => __( 'Retail' ),
                'singular_name' => __( 'Retail' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'retail'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-cart',
            'supports' => array( 'title', 'editor', 'thumbnail' ) 
        )
    );

     /* banking */
    register_post_type( 'banking',
        array(
            'labels' => array(
                'name' => __( 'Banking' ),
                'singular_name' => __( 'Banking' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'retail'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-store',
            'supports' => array( 'title', 'editor', 'thumbnail' ) 
        )
    );

     /* property */
     register_post_type( 'property',
        array(
            'labels' => array(
                'name' => __( 'Property' ),
                'singular_name' => __( 'Property' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'property'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-admin-multisite',
            'supports' => array( 'title', 'editor', 'thumbnail' ) 
        )
    );

     /* Equity Investments */
     register_post_type( 'equity_investments',
        array(
            'labels' => array(
                'name' => __( 'Equity Investments' ),
                'singular_name' => __( 'Equity Investments' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'equity_investments'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-chart-bar',
            'supports' => array( 'title', 'editor', 'thumbnail' ) 
        )
    );

     /* Awards and Recognition */
     register_post_type( 'awards_and_recog',
        array(
            'labels' => array(
                'name' => __( 'Awards And Recognition' ),
                'singular_name' => __( 'Awards And Recognition' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'awards_and_recognition'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-awards',
            'supports' => array( 'title', 'editor', 'thumbnail' ) 
        )
    );

    /* Philippines */
    register_post_type( 'philippines',
        array(
            'labels' => array(
                'name' => __( 'Philippines' ),
                'singular_name' => __( 'Philippines' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'philippines'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-flag',
            'supports' => array( 'title', 'editor', 'thumbnail' ) 
        )
    );

    
}
add_action( 'init', 'sm_investments_corporation' );
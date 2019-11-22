<?php
// Register Custom Post Type
function news_post_type() {

  $labels = array(
    'name'                  => _x( 'News', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'News', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'News', 'ith' ),
    'name_admin_bar'        => __( 'News', 'ith' )
  );
  $args = array(
    'label'                 => __( 'News', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-welcome-widgets-menus',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true
  );
  register_post_type( 'news', $args );

}
add_action( 'init', 'news_post_type', 0 );


// Register Partners Post Type
function partner_post_type() {

  $labels = array(
    'name'                  => _x( 'Partners', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Partners', 'ith' ),
    'name_admin_bar'        => __( 'Partners', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Partner', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-businessperson',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'partner', $args );

}
add_action( 'init', 'partner_post_type', 0 );


// Register Event Post Type
function event_post_type() {

  $labels = array(
    'name'                  => _x( 'Events', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Events', 'ith' ),
    'name_admin_bar'        => __( 'Events', 'ith' ),
    'archives'              => __( 'Events', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Event', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-location-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true
  );
  register_post_type( 'event', $args );

}
add_action( 'init', 'event_post_type', 0 );

// Register Service Post Type
function service_post_type() {

  $labels = array(
    'name'                  => _x( 'Services', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Services', 'ith' ),
    'name_admin_bar'        => __( 'Services', 'ith' ),
    'archives'              => __( 'Services', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Service', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'service_cat' ),
    'hierarchical'          => true,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-list-view',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'service', $args );

}
add_action( 'init', 'service_post_type', 0 );


// Register Resources Post Type
function resource_post_type() {

  $labels = array(
    'name'                  => _x( 'Resources', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Resources', 'ith' ),
    'name_admin_bar'        => __( 'Resources', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Resource', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'resource', $args );

}
add_action( 'init', 'resource_post_type', 0 );
<?php
// Register Custom Taxonomy
function service_cat_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'ith' ),
    'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'ith' ),
    'menu_name'                  => __( 'Category', 'ith' ),
    'all_items'                  => __( 'Category', 'ith' )
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'service_cat', array( 'service' ), $args );

}
add_action( 'init', 'service_cat_taxonomy', 0 );

// Register Resource Category Taxonomy
function resource_cat_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'ith' ),
    'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'ith' ),
    'menu_name'                  => __( 'Categories', 'ith' )
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'resource_cat', array( 'resource' ), $args );

}
add_action( 'init', 'resource_cat_taxonomy', 0 );
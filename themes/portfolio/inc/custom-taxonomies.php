<?php

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * https://codex.wordpress.org/Function_Reference/register_taxonomy
 */


 // TO-DO: Refactor into class.
function add_custom_taxonomies() {

  // Technology Taxonomy
  register_taxonomy('technology', 'project', array(
    'hierarchical' => true,
    'public' => true,
    'labels' => array(
      'name' => _x( 'Technologies', 'taxonomy general name' ),
      'singular_name' => _x( 'Technology', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Technologies' ),
      'all_items' => __( 'All Technologies' ),
      'parent_item' => __( 'Parent Technology' ),
      'parent_item_colon' => __( 'Parent Technology:' ),
      'edit_item' => __( 'Edit Technology' ),
      'update_item' => __( 'Update Technology' ),
      'add_new_item' => __( 'Add New Technology' ),
      'new_item_name' => __( 'New Technology Name' ),
      'menu_name' => __( 'Technologies' ),
    ),
    'rewrite' => array(
      'slug' => 'technologies', 
      'with_front' => false, 
      'hierarchical' => true
    ),
  ));

  // Project Type Taxonomy
  register_taxonomy('project_type', 'project', array(
    'hierarchical' => true,
    'public' => true,
    'labels' => array(
      'name' => _x( 'Project Types', 'taxonomy general name' ),
      'singular_name' => _x( 'Project Type', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Project Types' ),
      'all_items' => __( 'All Project Types' ),
      'parent_item' => __( 'Parent Project Type' ),
      'parent_item_colon' => __( 'Parent Project Type:' ),
      'edit_item' => __( 'Edit Project Type' ),
      'update_item' => __( 'Update Project Type' ),
      'add_new_item' => __( 'Add New Project Type' ),
      'new_item_name' => __( 'New Project Type Name' ),
      'menu_name' => __( 'Project Types' ),
    ),
    'rewrite' => array(
      'slug' => 'project-types', 
      'with_front' => false, 
      'hierarchical' => true
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
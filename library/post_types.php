<?php
/**
 * Custom Post Types
 *
 * @package WordPress
 * @subpackage cebo
 * @since Dream Home 1.0
 */

///////////////////////////////////////////////////////////////////////////// Custom Post Type Offers
add_action('init', 'offer_items');
function offer_items()
{
  $labels = array(
    'name' => _x('Offer', 'post type general name'),
    'singular_name' => _x('Offer', 'post type singular name'),
    'add_new' => _x('Add New', 'Offer'),
    'add_new_item' => __('Add New Offer'),
    'edit_item' => __('Edit Offer'),
    'new_item' => __('New Offer'),
    'view_item' => __('View Offer'),
    'search_items' => __('Search Offer'),
    'not_found' =>  __('No Offer found'),
    'not_found_in_trash' => __('No Offer found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'offer' ),
    'capability_type' => 'post',
    //'menu_icon' => get_bloginfo('template_url').'/images/icon_project.png',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','custom-fields','editor','author','excerpt','comments','thumbnail')
  );
  register_post_type('offer',$args);
}

/*
create_offertype_taxonomies();
function create_offertype_taxonomies()
{
  // Taxonomy
  $labels = array(
    'name' => _x( 'Offer Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Offer Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Offer Types' ),
    'all_items' => __( 'All Offer Types' ),
    'parent_item' => __( 'Parent Offer Type' ),
    'parent_item_colon' => __( 'Parent Offer Type:' ),
    'edit_item' => __( 'Edit Offer Type' ),
    'update_item' => __( 'Update Offer Type' ),
    'add_new_item' => __( 'Add New Offer Type' ),
    'new_item_name' => __( 'New Offer Type Name' ),
  ); 	

  register_taxonomy('offertype', array('offer'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'offertype' ),
  ));

}
*/

add_action( 'init', 'popup_post_type' );
function popup_post_type() {
  register_post_type( 'popup',
    array(
      'labels' => array(
        'name' => __( 'Popup' ),
        'singular_name' => __( 'Popup' )
      ),
      'public' => true,
      'rewrite' => array('slug' => 'popup'),
      'menu_icon' => 'dashicons-megaphone',
      'supports' => array('title','author','custom-fields', 'author', 'editor','thumbnail')
    )
  );
}


?>
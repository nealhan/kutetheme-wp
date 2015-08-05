<?php

if ( !defined('ABSPATH')) exit;

function register_post_type_init() {
    
    $labels = array(
        'name'          => __( 'Mega Menu', THEME_LANG ),
        'singular_name' => __( 'Mega Menu Item', THEME_LANG ),
        'add_new'       => __( 'Add New', THEME_LANG ),
        'add_new_item'  => __( 'Add New Menu Item', THEME_LANG ),
        'edit_item'     => __( 'Edit Menu Item', THEME_LANG ),
        'new_item'      => __( 'New Menu Item', THEME_LANG ),
        'view_item'     => __( 'View Menu Item', THEME_LANG ),
        'search_items'  => __( 'Search Menu Items', THEME_LANG ),
        'not_found'     => __( 'No Menu Items found', THEME_LANG ),
        'not_found_in_trash' => __( 'No Menu Items found in Trash', THEME_LANG ),
        'parent_item_colon'  => __( 'Parent Menu Item:', THEME_LANG ),
        'menu_name'     => __( 'Mega Menu', THEME_LANG ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical'        => false,
        'description'         => __('Mega Menus.', THEME_LANG),
        'supports'            => array( 'title', 'editor' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 40,
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => false,
        'exclude_from_search' => true,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => false,
        'capability_type'     => 'page'
    );

    register_post_type( 'megamenu', $args );
}
add_action( 'init', 'register_post_type_init' );
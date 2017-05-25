<?php

//add actions to the theme
add_action('init','movie_post_type');

//callback and functions
    function movie_post_type()
    {
        $labels = [
            'name' => 'Movies',
            'singular_name' => 'Movie',
            'menu_name' => 'Movies',
            'name_admin_bar' => 'Movie'
        ];

        $args = array(
            'public' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_menu' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 2,
            'menu_icon' => 'dashicons-video-alt3',
            'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
            'has_archive' => true,
            'rewrite' => true,
            'description'   => 'the description');
        register_post_type('movie',$args);
    }


add_action( 'init', 'register_custom_taxonomies', 0 );
function register_custom_taxonomies()
{
    register_taxonomy( 'movie_categories', 'movie', array(
        "hierarchical" => true,
        "label" => "Category",
        "singular_label" => "category",
        'query_var' => true,
        'rewrite' => array( 'slug' => 'category', 'with_front' => false ),
        'public' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        '_builtin' => false,
        'show_in_nav_menus' => false
    ));
}
<?php

function movie_app_add_theme_support(){
    add_theme_support("post-thumbnails");
}
add_action('after_setup_theme','movie_app_add_theme_support');

function movie_app_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
        return $post_thumbnail_img[0];
    }
}
// ADD NEW COLUMN
function movie_app_columns_head($defaults) {
    $defaults['featured_image'] = 'Cover Image';
    $defaults['movie_categories'] = 'Category';
    $defaults['_duration'] = 'Duration';
    $defaults['_trailer'] = 'Trailer';
    return $defaults;
}
// SHOW THE FEATURED IMAGE
function movie_app_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = movie_app_get_featured_image($post_ID);
        if ($post_featured_image) {
            echo '<img height="75" src="' . $post_featured_image . '" />';
        }
    }
    if($column_name == 'movie_categories'){
        if (!empty(wp_get_post_terms($post_ID,'movie_categories')[0]->name))
            echo wp_get_post_terms($post_ID,'movie_categories')[0]->name;
        else
            echo "لم يحدد";
    }

    if($column_name == '_duration'){
        echo get_post_meta($post_ID,'_duration',true) != '' ? get_post_meta($post_ID,'_duration',true) : '0' ;
    }
    if($column_name == '_trailer'){
        echo get_post_meta($post_ID,'_duration',true) != '' ? "<i class='fa fa-check'></i>" : "<i class='fa fa-close'></i>" ;
    }
}
add_filter('manage_posts_columns', 'movie_app_columns_head');
add_action('manage_posts_custom_column', 'movie_app_columns_content', 10, 2);

// html5 support
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
<?php
function movie_load_scripts($hook){

    wp_enqueue_style("materialize",get_template_directory_uri().'/css/materialize.css',[],'1','all');
    wp_enqueue_style("owl",get_template_directory_uri().'/css/owl.carousel.css',[],'1','all');
    wp_enqueue_style("owl.theme",get_template_directory_uri().'/css/owl.theme.default.css',[],'1','all');
    wp_enqueue_style("font-awesome",get_template_directory_uri().'/css/font-awesome.css',[],'1','all');
    wp_enqueue_style("styles",get_template_directory_uri().'/css/styles.css',[],'1','all');
    wp_enqueue_style("fancybox",get_template_directory_uri().'/css/jquery.fancybox.css',[],'1','all');

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery' , get_template_directory_uri() . '/js/jquery.js', false, '1.11.3', true );
    wp_enqueue_script( 'jquery' );
    //wp_enqueue_script( 'fancybox.pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '3.3.6', true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), '3.3.6', true );
    wp_enqueue_script( 'fancybox-thumb', get_template_directory_uri() . '/js/jquery.fancybox-thumbs.js', array('jquery'), '3.3.6', true );
    wp_enqueue_script( 'materialize', get_template_directory_uri() . '/js/materialize.js', array('jquery'), '3.3.6', true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );


}

function admin_load_scripts($hook){
    wp_enqueue_style("font-awesome",get_template_directory_uri().'/css/font-awesome.css',[],'1','all');
    wp_enqueue_script( 'admin', get_template_directory_uri() . '/js/admin.js', array('jquery'), '3.3.6', true );
   }

add_action('wp_enqueue_scripts','movie_load_scripts');
add_action('admin_enqueue_scripts','admin_load_scripts');

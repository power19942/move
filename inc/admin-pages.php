<?php

add_action('admin_menu',function (){
    add_menu_page('Movie Settings Page','Movie Settings','manage_options','movie_settings','movie_settings_callback');
    add_submenu_page( 'movie_settings', 'Settings', 'Settings', 'manage_options', 'movie_settings', 'movie_settings_create_page' );
    add_submenu_page( 'movie_settings', 'Movie Page', 'Movie Page', 'manage_options', 'movie_page', 'movie_page_create_page' );
});

add_action('admin_init',function (){
    register_setting('movie_setting','test_data');
    add_settings_section( 'movie-options', 'Movie Option', 'movie_options', 'movie_settings');
    add_settings_field( 'movie-name', 'Movie Name', 'movie_name', 'movie_options', 'movie-options');

});


function movie_settings_callback(){
    echo 'Selected palette: ' . $redux_demo['opt-palette-color'];
    echo $post;
}

function movie_settings_create_page(){
   ?>
    <h1>Sunset Theme Support</h1>
    <?php settings_errors(); ?>

    <form method="post" action="options.php" class="sunset-general-form">
        <?php settings_fields( 'movie_setting' ); ?>
        <?php do_settings_sections( 'movie-options' ); ?>
        <?php submit_button(); ?>
    </form>
<?php
}

function movie_options(){
    echo 'the options';
}
function movie_name(){
    echo 'the name';
}
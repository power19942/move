<?php
function movie_add_meta_boxes() {
    add_meta_box( 'movie_rate', 'IMDB', 'movie_imbd_callback', 'movie', 'normal' );
    add_meta_box( 'movie_duration', 'Duration', 'movie_duration_callback', 'movie', 'normal' );
    add_meta_box( 'movie_year', 'Year', 'movie_year_callback', 'movie', 'normal' );
    add_meta_box( 'movie_trailer', 'Trailer', 'movie_trailer_callback', 'movie', 'normal' );
    add_meta_box( 'movie_background', 'Movie Background', 'movie_background_callback', 'movie', 'normal' );
    add_meta_box( 'movie_watch_drive', 'Google Drive', 'movie_watch_drive_callback', 'movie', 'normal' );
}

function movie_imbd_callback( $post ) {
    wp_nonce_field( 'movie_save_mdbi_data', 'movie_mdbi_metabox_nonce' );
    $value = get_post_meta( $post->ID, '_imdb_rate', true );
//    preg_match('//')
    echo '<label for="sunset_contact_email_field">Rate of 10 : </label>';
    echo '<input type="number" min="1" max="10" id="imdb_field" name="imdb_field" value="' . esc_attr( $value ) . '" size="2" />';
}
function movie_duration_callback( $post ) {
    wp_nonce_field( 'movie_save_duration_data', 'movie_duration_metabox_nonce' );
    $value = get_post_meta( $post->ID, '_duration', true );
//    preg_match('//')
    echo '<label for="sunset_contact_email_field">Movie Duration : </label>';
    echo '<input type="text"  id="duration_field" name="duration_field" value="' . esc_attr( $value ) . '" />';
}
function movie_year_callback( $post ) {
    wp_nonce_field( 'movie_save_year_data', 'movie_year_metabox_nonce' );
    $value = get_post_meta( $post->ID, '_year', true );
//    preg_match('//')
    echo '<label for="sunset_contact_email_field">Movie year : </label>';
    echo '<input type="text"  id="year_field" name="year_field" value="' . esc_attr( $value ) . '" />';
}
function movie_trailer_callback( $post ) {
    wp_nonce_field( 'movie_save_trailer_data', 'movie_trailer_metabox_nonce' );
    $value = get_post_meta( $post->ID, '_trailer', true );
//    preg_match('//')
    echo '<label for="sunset_contact_email_field">Trailer URL : </label>';
    echo '<input type="url"  id="trailer_field" name="trailer_field" value="' . esc_attr( $value ) . '" />';
}
function movie_background_callback( $post ) {
    wp_nonce_field( 'movie_save_background_data', 'movie_background_metabox_nonce' );
    $value = get_post_meta( $post->ID, '_background', true ) !='' ? get_post_meta( $post->ID, '_background', true ) :'http://placehold.it/500x300' ;
//    preg_match('//')
     echo '<img width="500" height="300" id="movie-background" src="'.$value.'" /><br><button class="button-secondary button-large" id="upload-button" >Add</button>';
    echo '<input type="hidden"  id="background_field" name="background_field" value="' . esc_attr( $value ) . '" />';
}
function movie_watch_drive_callback( $post ) {
    wp_nonce_field( 'movie_save_watch_drive_data', 'movie_watch_drive_metabox_nonce' );
    $value = get_post_meta( $post->ID, '_watch_drive', true ) ;
    echo '<input type="url"  id="watch_drive_field" name="watch_drive_field" value="' . esc_attr( $value ) . '" />';
}

function movie_save_mdbi_data( $post_id ) {
    if( ! isset( $_POST['movie_mdbi_metabox_nonce'] ) ){
        return;
    }

    if( ! wp_verify_nonce( $_POST['movie_mdbi_metabox_nonce'], 'movie_save_mdbi_data') ) {
        return;
    }

    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }

    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if( ! isset( $_POST['imdb_field'] ) ) {
        return;
    }
    $my_data = sanitize_text_field( $_POST['imdb_field'] );

    update_post_meta( $post_id, '_imdb_rate', $my_data );

}
function movie_save_duration_data( $post_id ) {
    if( ! isset( $_POST['movie_duration_metabox_nonce'] ) ){
        return;
    }

    if( ! wp_verify_nonce( $_POST['movie_duration_metabox_nonce'], 'movie_save_duration_data') ) {
        return;
    }

    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }

    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if( ! isset( $_POST['duration_field'] ) ) {
        return;
    }
    $my_data = sanitize_text_field( $_POST['duration_field'] );

    update_post_meta( $post_id, '_duration', $my_data );

}
function movie_save_year_data( $post_id ) {
    if( ! isset( $_POST['movie_year_metabox_nonce'] ) ){
        return;
    }

    if( ! wp_verify_nonce( $_POST['movie_year_metabox_nonce'], 'movie_save_year_data') ) {
        return;
    }

    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }

    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if( ! isset( $_POST['year_field'] ) ) {
        return;
    }
    $my_data = sanitize_text_field( $_POST['year_field'] );

    update_post_meta( $post_id, '_year', $my_data );

}
function movie_save_trailer_data( $post_id ) {
    if( ! isset( $_POST['movie_trailer_metabox_nonce'] ) ){
        return;
    }

    if( ! wp_verify_nonce( $_POST['movie_trailer_metabox_nonce'], 'movie_save_trailer_data') ) {
        return;
    }

    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }

    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if( ! isset( $_POST['trailer_field'] ) ) {
        return;
    }
    $my_data = sanitize_text_field( $_POST['trailer_field'] );
    $replace = str_replace('watch?v=','embed/',$my_data);
    update_post_meta( $post_id, '_trailer', $replace );

}
function movie_save_background_data( $post_id ) {
    if( ! isset( $_POST['movie_background_metabox_nonce'] ) ){
        return;
    }

    if( ! wp_verify_nonce( $_POST['movie_background_metabox_nonce'], 'movie_save_background_data') ) {
        return;
    }

    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }

    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if( ! isset( $_POST['background_field'] ) ) {
        return;
    }
    $my_data = sanitize_text_field( $_POST['background_field'] );
    update_post_meta( $post_id, '_background', $my_data );

}
function movie_save_watch_drive_data( $post_id ) {
    if( ! isset( $_POST['movie_watch_drive_metabox_nonce'] ) ){
        return;
    }

    if( ! wp_verify_nonce( $_POST['movie_watch_drive_metabox_nonce'], 'movie_save_watch_drive_data') ) {
        return;
    }

    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }

    if( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if( ! isset( $_POST['watch_drive_field'] ) ) {
        return;
    }
    $my_data = sanitize_text_field( $_POST['watch_drive_field'] );
    update_post_meta( $post_id, '_watch_drive', $my_data );

}

add_action( 'add_meta_boxes', 'movie_add_meta_boxes' );
add_action('save_post','movie_save_mdbi_data');
add_action('save_post','movie_save_duration_data');
add_action('save_post','movie_save_year_data');
add_action('save_post','movie_save_trailer_data');
add_action('save_post','movie_save_background_data');
add_action('save_post','movie_save_watch_drive_data');















function change_featured_image_metabox_title() {
    remove_meta_box( 'postimagediv', 'movie', 'side' );
    add_meta_box( 'postimagediv', __( 'Movie Cover', 'km' ), 'post_thumbnail_meta_box', 'movie', 'side' );
    //echo '<h1>rem</h1>';
}
add_action('do_meta_boxes', 'change_featured_image_metabox_title' );

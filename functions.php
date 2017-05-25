<?php
require get_template_directory().'/inc/enqueue.php';
require  get_template_directory().'/inc/support.php';
require  get_template_directory().'/inc/custom-post-type.php';
require  get_template_directory().'/inc/meta-boxes.php';
require  get_template_directory().'/inc/admin-pages.php';
require  get_template_directory().'/inc/widgets.php';
require  get_template_directory().'/inc/redux-test.php';


function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function add_custom_types_to_tax( $query ) {
    if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

// Get all your post types
        $post_types = get_post_types();

        $query->set( 'post_type', $post_types );
        return $query;
    }
}
add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );
add_filter('show_admin_bar', '__return_false');

register_sidebar();
add_action('after_setup_theme',function (){
   register_nav_menu('main','main menu in the header');
});

/*******************************************************/
/******************test redux********************/
/*******************************************************/


Redux::setSection( $opt_name, array(
    'title'      => __( 'Palette Colors', 'redux-framework-demo' ),
    'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/palette-color/" target="_blank">docs.reduxframework.com/core/fields/palette-color/</a>',
    'id'         => 'color-palette',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'opt-palette-color',
            'type'     => 'palette',
            'title'    => __( 'Palette Color Option', 'redux-framework-demo' ),
            'subtitle' => __( 'Only color validation can be done on this field type', 'redux-framework-demo' ),
            'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
            'default'  => 'red',
            'palettes' => array(
                'red'  => array(
                    '#ef9a9a',
                    '#f44336',
                    '#ff1744',
                ),
                'pink' => array(
                    '#fce4ec',
                    '#f06292',
                    '#e91e63',
                    '#ad1457',
                    '#f50057',
                ),
                'cyan' => array(
                    '#e0f7fa',
                    '#80deea',
                    '#26c6da',
                    '#0097a7',
                    '#00e5ff',
                ),
            )
        ),
    )
) );
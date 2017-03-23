<?php

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 */

/** Disable Redux Demo Mode **/
function disable_redux_demo() {
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'disable_redux_demo');

/** Remove Redux Menu Under Tools **/
add_action( 'admin_menu', 'remove_redux_menu',12 );
function remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}

/** Custom Excerpts **/
function integral_custom_excerpts($limit) {
    return wp_trim_words(get_the_content(), $limit);
}

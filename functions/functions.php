<?php
/**
 * Registers the scripts for the theme.
 */
function include_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js', null, null, false);

    wp_enqueue_script('bootstrap-js', THEME_BOOTSTRAP_JS_URL . '/bootstrap.min.js', array( 'jquery' ), null, true);
}
add_action('wp_enqueue_scripts', 'include_scripts');

/**
 * Registers the styles for the theme.
 */
function include_styles() {
    wp_enqueue_style('style', get_stylesheet_uri(), null, null, 'all');

    wp_enqueue_style('bootstrap-css', THEME_BOOTSTRAP_CSS_URL . '/bootstrap.min.css', array( 'style' ), null, 'all');

    wp_enqueue_style('bootstrap-responsive', THEME_BOOTSTRAP_CSS_URL . '/bootstrap-responsive.min.css', array( 'bootstrap-css' ), null, 'all');
}
add_action('wp_enqueue_scripts', 'include_styles');
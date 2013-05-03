<?php
/**
 * Contains all the locations for the theme
 */
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_STATIC_URL', THEME_URL . '/static');
define('THEME_STATIC_IMG_URL', THEME_STATIC_URL . '/img');
define('THEME_STATIC_CSS_URL', THEME_STATIC_URL . '/css');
define('THEME_STATIC_JS_URL', THEME_STATIC_URL . '/js');
define('THEME_BOOTSTRAP_URL', THEME_STATIC_URL . '/bootstrap/bootstrap');
define('THEME_BOOTSTRAP_CSS_URL', THEME_BOOTSTRAP_URL . '/css');
define('THEME_BOOTSTRAP_JS_URL', THEME_BOOTSTRAP_URL . '/js');
define('THEME_BOOTSTRAP_IMG_URL', THEME_BOOTSTRAP_URL . '/img');
register_nav_menu('top-bar', __('Primary Menu'));
<?php
function custom_theme_features() {
    add_theme_support( 'custom-header' );
}
add_action( 'after_setup_theme', 'custom_theme_features' );
<?php 
    /**
     * Plugin Name: DDM Post Format Support
     * Plugin URI: https://delanomaloney.com/
     * Description: A simple plugin that overrides the default post format support of themes, without the need to edit the theme's files.
     * Version: 1.0.0
     * Author: Delano Maloney
     * Author URI: https://delanomaloney.com/
     * License: A short license name. Example: GPL2
     */

function add_post_formats() {
    add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
    }
 
add_action( 'after_setup_theme', 'add_post_formats', 20 );

?>
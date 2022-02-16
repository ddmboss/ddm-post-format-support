<?php 
    /**
     * Plugin Name: DDM Post Format Support
     * Plugin URI: https://github.com/ddmboss/ddm-post-format-support
     * Description: A simple plugin that overrides the default post format support of themes, without the need to edit the theme's files.
     * Version: 1.0.1
     * Author: ddmboss designs
     * Author URI: https://www.ddmbossdesigns.com/
     * License: GPL3
     */

function ddm_add_post_formats() {
    add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
    }
 
add_action( 'after_setup_theme', 'ddm_add_post_formats', 20 );

?>

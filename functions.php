<?php

// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Pour faciliter le changement de version
define('LGMAC_VERSION', '1.0.0');

// chargement du front
function lgmac_scripts(){
    // chargement des styles
    wp_enqueue_style('lgmac_boodstrap-core', get_template_directory_uri() . '/bootstrap.min.css', array(), LGMAC_VERSION,'all');

    wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_boodstrap-core'), LGMAC_VERSION,'all');

    // chargement des scripts
    wp_enqueue_script('bootstrap.js', get_template_directory_uri() . 'bootstrap.min.js', array(), LGMAC_VERSION, true);
    
    wp_enqueue_script('lgmac_script', get_template_directory_uri() . '/archi.js', array('bootstrap.js'), LGMAC_VERSION, true);

}

add_action('wp_enqueue_scripts', 'lgmac_scripts');


// Utiltaires

function lgmac_setup(){
    // support de vinettes
    add_theme_support('post-thumbnails');

    // enlève générateur de version
    remove_action('wp_head', 'wp_generator');

    // enlève les guillemets à la française
    // remove_filter ('the_content', 'wptexturize');

    // support du titre
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'lgmac_setup');

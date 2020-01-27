<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//Add logo
add_theme_support( 'custom-logo' );

add_action("wp_enqueue_scripts", "style_theme");
add_action( "wp_footer", "scripts_theme");
add_action( "after_setup_theme", "theme_register_nav_menu" );
// add_action( 'custom_logo');

//registrer le menu 
function theme_register_nav_menu() {
    register_nav_menu( 'top', 'topMenu');
};

//add css styles + bootstrap
function style_theme () {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/CSS/bootstrap.min.css' );
    wp_enqueue_style( 'mainStyle', get_stylesheet_directory_uri( ));
    wp_enqueue_style( 'style', get_template_directory_uri( ) . '/assets/CSS/style.css');
};

//add js scripts + bootstrap
function scripts_theme() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/JS/bootstrap.bundle.min.js', array( 'jquery' ) );
    wp_enqueue_script( "script", get_template_directory_uri( ) . '/assets/JS/script.js');
};

function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 50,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php get_header(); ?>
    
</head>



<body <?php body_class(); ?>>
  <header class="header">
  
  
    <a href="<?php echo home_url( '/' ); ?>">
      <img src="http://localhost:8888/wp-content/uploads/2020/01/logo-full-2.svg" alt="logo" >
    </a>  
    <nav id="header_nav">
      <ul>
        <li><a href="#" style="display:flex; color:white">Magasin</a></li>
        <li><a href="#" style="display:flex; color:white">ARCHITECTE D'INTéRIEUR</a></li>
        <li><a href="#" style="display:flex; color:white">A propos</a></li>
        <li><a href="#" style="display:flex; color:white">BLOG</a></li>
        <li><a href="#" style="display:flex; color:white">CONTACT</a></li>
      </ul>
    <nav>
  </header>
    
    <?php wp_body_open(); ?>
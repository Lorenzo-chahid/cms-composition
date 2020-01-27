<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="c'est une copie de wordpress site">
	<title>Composition</title>
    <?php wp_head(); ?>
</head>
    <div class="container-fluid">
        <div class="row m-auto" id="navRow">
            <nav class="navbar navbar-expand-lg navbar-light col-lg-12">
                <a class="offset-lg-1 navbar-brand" href="#">
                    <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo(); } has_custom_logo() ?> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="d-none d-md-inline">Menu</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-lg-8 offset-lg-2 collapse navbar-collapse" id="navbarTogglerDemo02">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'top',
                        'container' => null,
                        'menu_class' => 'navbar-nav mr-auto mt-2 mt-lg-0'
                    ) ); ?>
                </div>
            </nav>
        </div>
    </div>
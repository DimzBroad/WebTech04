<!DOCTYPE html>

<html <?php language_attributes(); ?> />

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wordpress, CMS, PHP BASICS">
    <meta name="keywords" content="Wordpress, CMS, PHP BASICS, Themes">
    <meta name="author" content="Dimitris Broad">

    <title>
        <?php wp_title("|","right"); bloginfo("name"); ?>
    </title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"/>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="container">

        <header class="row">
            <nav class="topnav u-full-width" id="myTopnav">
                <a class="navHeading" href= "#" > <?php bloginfo('title'); ?> </a>

                <span class="navItems">

                    <?php 
                        $defaults = array('theme_location' => 'primary',
                            'conatiner' => 'false',
                            'menu_class' => 'navItems',
                            'echo' => true,
                            'fallback_cb' => 'wp_page-menu', );
                            wp_nav_menu($defaults);
                    ?>

                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </span>
            </nav>
        </header>


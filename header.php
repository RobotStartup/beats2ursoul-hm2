<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container">

        <!-- site-header -->
        <header class="site-header">
            <!-- Logo aligned to the left -->
            <div class="logo-container">
                <a href="<?php echo home_url(); ?>">
                    <img src="https://www.beats2ursoul.com/wp-content/uploads/2025/03/logo1.jpg" alt="Music Heart Image">
                </a>
            </div>
            <!-- Optional: Site title and tagline -->
            <div class="site-branding">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h5><?php bloginfo('description'); ?></h5>
            </div>
        </header>
        <!-- /site-header -->

        <!-- Full-width navigation below the header -->
        <nav class="site-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'      => false,
                'menu_class'     => 'nav-menu'
            ));
            ?>
        </nav>
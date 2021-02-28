<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>


<div id="all-wrapper" class="container-fluid">
<nav class="navbar smart-scroll navbar-expand-md bg-dark">
    <div class="container-fluid mx-5">

        <a class="navbar-brand d-flex flex-column text-font-secondary" href="<?php echo get_home_url()?>">
        <h1 class="text-color-brand-direct  text-xxl text-medium"> <?php echo sanitize_text_field(bloginfo('name'));?> </h1>
        <h2 class="text-md-lg text-font-primary text-thin text-normal text-color-light-tint align-self-center"><?php echo sanitize_text_field(bloginfo('description'));  ?></h2>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="mobile-nav__icon-bar"></span>
        <span class="mobile-nav__icon-bar"></span>
        <span class="mobile-nav__icon-bar"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto flex-nowrap nav-fill ig-main-navbar %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
    </div>
</nav>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <navbar class="navbar">
        <div class="navbar-links">
            <a class="logo" href="/">
                <img class="logo" src='<?= get_template_directory_uri() . "/assets/images/bike.svg"; ?>'>
            </a>
            <label for="menu" class="menu-label"><img src="<?= get_template_directory_uri() . '/assets/images/menu-icon.png'; ?>"></label>
            <input type="checkbox" id="menu">
            <ul class="collapsible">
                <?php wp_nav_menu(array(
                    'menu' => 'Navbar Menu',
                    'menu_class' => '',
                    'container' => '',
                    'container_class' => 'navbar-links'
                )) ?>
            </ul>
        </div>
    </navbar>
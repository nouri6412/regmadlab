<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Ipak_Madlab
 * @since 1.0.0
 */

?>
<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/items.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/menu.css">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <div class="header white">
        <div class="header-top">
            <a class="link-logo" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.webp" />
            </a>
            <div class="search-box">
                <button class="input-submit">
                    <i class="fa fa-search"></i>
                    <span>جستجو</span>
                </button>

                <input class="input-text" />
                <select>
                    <option>تولید کنندگان</option>
                    <option>کارکرده</option>
                    <option>وارد کنندگان</option>
                </select>
            </div>
            <div class="top-nav">
                <?php
                $menuLocations = get_nav_menu_locations();

                $menuID = $menuLocations['top-right'];

                $primaryNav = wp_get_nav_menu_items($menuID);
                foreach ($primaryNav as $navItem) {
                    if ($navItem->menu_item_parent == 0) {
                        //  echo '<img src="'.get_field( 'menu_back_image', $navItem ).'" />';
                        echo sprintf('<a href="%s" title="%s">%s</a>', $navItem->url, $navItem->title, ' ' . $navItem->title . ' ');
                    }
                }

                ?>

            </div>

        </div>
        <div class="header-down">
            <nav class="nav-main">
                <button class="btn btn-primary btn-open"><i class="fa fa-bars"></i></button>
                <button class="btn btn-primary btn-close"></button>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'top-main',
                    'container' => false,
                    'menu_class' => 'main-menu'
                ));
                ?>
            </nav>

        </div>
    </div>
    
<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Ipak_Madlab
 * @since 1.0.0
 */

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'ipak_add_my_script');
function ipak_add_my_script()
{
    wp_enqueue_script(
        'ipak-script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/assets/js/menu.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

require get_template_directory() . '/inc/menu.php';
// require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

function cw_post_type_customer()
{

    $supports = array(
        'title', // post title
        'thumbnail', // featured images
        'custom-fields', // custom fields
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('مشتری', 'plural'),
        'singular_name' => _x('مشتری', 'singular'),
        'menu_name' => _x('مشتری', 'admin menu'),
        'name_admin_bar' => _x('مشتری', 'admin bar'),
        'add_new' => _x('ثبت مشتری جدید', 'add new'),
        'add_new_item' => "ثبت مشتری جدید",
        'new_item' => "مشتری جدید",
        'edit_item' => "ویرایش مشتری",
        'view_item' => "مشاهده مشتری",
        'all_items' => "همه مشتری ها",
        'search_items' => "جستجوی مشتری",
        'not_found' => "یافت نشد"
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'customer'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('customer', $args);
}
add_action('init', 'cw_post_type_customer');


function cw_post_type_silandr()
{

    $supports = array(
        'title', // post title
        // 'thumbnail', // featured images
        'custom-fields', // custom fields
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('تحویل سیلندر', 'plural'),
        'singular_name' => _x('تحویل سیلندر', 'singular'),
        'menu_name' => _x('تحویل سیلندر', 'admin menu'),
        'name_admin_bar' => _x('تحویل سیلندر', 'admin bar'),
        'add_new' => _x('ثبت تحویل سیلندر جدید', 'add new'),
        'add_new_item' => "ثبت تحویل سیلندر جدید",
        'new_item' => "تحویل سیلندر جدید",
        'edit_item' => "ویرایش تحویل سیلندر",
        'view_item' => "مشاهده تحویل سیلندر",
        'all_items' => "همه تحویل سیلندر ها",
        'search_items' => "جستجوی تحویل سیلندر",
        'not_found' => "یافت نشد"
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'silandr'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('silandr', $args);
}
add_action('init', 'cw_post_type_silandr');

function cw_post_type_exmine()
{

    $supports = array(
        'title', // post title
        // 'thumbnail', // featured images
        'custom-fields', // custom fields
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('آزمون سیلندر', 'plural'),
        'singular_name' => _x('آزمون سیلندر', 'singular'),
        'menu_name' => _x('آزمون سیلندر', 'admin menu'),
        'name_admin_bar' => _x('آزمون سیلندر', 'admin bar'),
        'add_new' => _x('ثبت آزمون سیلندر جدید', 'add new'),
        'add_new_item' => "ثبت آزمون سیلندر جدید",
        'new_item' => "آزمون سیلندر جدید",
        'edit_item' => "ویرایش آزمون سیلندر",
        'view_item' => "مشاهده آزمون سیلندر",
        'all_items' => "همه آزمون سیلندر ها",
        'search_items' => "جستجوی آزمون سیلندر",
        'not_found' => "یافت نشد"
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'exmine'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('exmine', $args);
}
add_action('init', 'cw_post_type_exmine');


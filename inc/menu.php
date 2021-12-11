<?php
function wpb_custom_new_menu_top()
{
    register_nav_menu('top-right', 'منوی بالا سمت راست');
    register_nav_menu('top-main', 'منوی بالا اصلی ');
}
add_action('init', 'wpb_custom_new_menu_top');
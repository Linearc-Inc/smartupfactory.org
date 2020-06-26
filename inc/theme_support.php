<?php

/*
    @package charity
    ==========================
    Theme surport
    =========================
*/


function l_register_nav_menus()
{
    register_nav_menu('main_menu', 'Header Navigation Menu');
    register_nav_menu('site_map', 'Footer Menu');
}

add_action('init', 'l_register_nav_menus');

$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
add_theme_support('post-formats', $formats);
add_theme_support('post-thumbnails');

function theme_name_custom_logo_setup()
{
    $defaults = array(
    'height' => 10,
    'width' => 20,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
   add_action('after_setup_theme', 'theme_name_custom_logo_setup');
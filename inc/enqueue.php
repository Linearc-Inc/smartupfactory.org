<?php

function load_styles_and_scripts($hook)
{
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
    wp_register_script('Jquery', get_template_directory_uri().'/vendor/jquery/jquery.js', false, '3.4.1', false);
    wp_enqueue_script('Jquery');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('elegant', get_template_directory_uri().'/css/elegant-fonts.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome', get_template_directory_uri().'/css/font-awesome.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('swiper', get_template_directory_uri().'/css/swiper.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('themify', get_template_directory_uri().'/css/themify-icons.css', array(), '1.0.0', 'all');
    wp_enqueue_script('progress', get_template_directory_uri().'/js/circle-progress.min.js', array(), true);
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array(), true);
    wp_enqueue_script('barfiller', get_template_directory_uri().'/js/jquery.barfiller.js', array(), true);
    wp_enqueue_script('collapsible', get_template_directory_uri().'/js/jquery.collapsible.min.js', array(), true);
    wp_enqueue_script('countTo', get_template_directory_uri().'/js/jquery.countTo.min.js', array(), true);
    wp_enqueue_script('countdown', get_template_directory_uri().'/js/jquery.countdown.min.js', array(), true);
    wp_enqueue_script('swiper', get_template_directory_uri().'/js/swiper.min.js', array(), true);


    if (is_page_template('contact.php')) {
        wp_enqueue_script('contact_us', get_template_directory_uri().'/js/message.js', array(), true);
    }
}

function load_admin_styles_and_scripts($hook)
{
    wp_enqueue_style('admin_css', get_template_directory_uri().'/theme-template/css/admin.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
add_action('admin_enqueue_scripts', 'load_admin_styles_and_scripts');

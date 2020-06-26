<?php
/*
@package linarcfootball
    ==========================
    Theme custom post types
    =========================
*/

    //Register new custom post type
    add_action('init', 'message_custom_post_type');
    //Manage(show or hide) fields
    add_filter('manage_messages_posts_columns', 'customise_message_admin_fields_column');
    //Manage data displayed in fields
    add_action('manage_messages_posts_custom_column', 'sunset_customise_contact_fields_column', 10, 2);

/* Contact  */

function message_custom_post_type()
{
    $labels = array(
        'name' => 'Messages',
        'singular_name' => 'Message',
        'add_new' => 'Add User Message',
        'add_new_item' => 'Add User Message',
        'menu_name' => 'Messages',
        'name_admin_bar' => 'Messages',
    );

    $args = array(
        'labels' => $labels,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 26,
        'menu_icon' => 'dashicons-email',
        'supports' => array('title', 'editor', 'comments', 'author'),
    );

    register_post_type('messages', $args);
}

function customise_message_admin_fields_column($columns)
{
    $newColumns['title'] = 'Subject';
    $newColumns['message'] = 'Message';
    $newColumns['date'] = 'Date';

    return $newColumns;
}

function sunset_customise_contact_fields_column($column, $post_id)
{
    switch ($column) {
    case 'message':
        echo get_the_excerpt($post_id);
        break;
    case 'email':
        $email_address = get_post_meta($post_id, '_sunset_message_email_key', true);
        echo "<a href=\"mailto:$email_address\">$email_address</a>";
        break;
    default:
        // code...
        break;
    }
}

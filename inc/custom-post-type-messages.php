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
    //Create input forms for fields
    add_action('add_meta_boxes', 'message_email_add_meta_box');
    //Save data for fields
    add_action('save_post', 'save_message_email_data');

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
        'supports' => array('title', 'excerpt' ,'editor','comments' ,'author'),
    );

    register_post_type('messages', $args);
}

function customise_message_admin_fields_column($columns)
{
    $newColumns['title'] = 'Full Name';
    $newColumns['message'] = 'Message';
    $newColumns['email'] = 'Email';
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

/* Email META BOC */
function message_email_add_meta_box()
{
    add_meta_box('message_email', 'User Email', 'sunset_message_email_callback', 'messages', 'side');
}

//Showing the meta box to the user
function sunset_message_email_callback($post)
{
    wp_nonce_field('save_message_email_data', 'save_message_email_data_nonce');
    $value = get_post_meta($post->ID, '_sunset_message_email_key', true);
    echo '<input type="email" id="sunset_message_email_field" name="sunset_message_email_field" value="'.esc_attr($value).'" size="25" >';
}

//Saving metadat to the datbase using nonce
function save_message_email_data($post_id)
{
    if (!isset($_POST['save_message_email_data_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['save_message_email_data_nonce'], 'save_message_email_data')) {
        return;
    }

    // if(defined('DOING_AUTOSAVE')&& DOING_AUTOSAVE){
    //     return;
    // }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (!isset($_POST['sunset_message_email_field'])) {
        return;
    }

    $my_data = sanitize_text_field($_POST['sunset_message_email_field']);
    update_post_meta($post_id, '_sunset_message_email_key', $my_data);
}

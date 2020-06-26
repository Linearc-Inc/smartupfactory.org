<?php
/*
@package linarcfootball
    ==========================
    Theme custom post types
    =========================
*/

add_action('init', 'innovations_custom_post_type');
function innovations_custom_post_type()
{
    $labels = array(
        'name' => 'Innovations',
        'singular_name' => 'Idea',
        'add_new' => 'Add Idea',
        'add_new_item' => 'Add Idea',
        'menu_name' => 'Innovations',
        'name_admin_bar' => 'Innovations',
    );

    $args = array(
        'labels' => $labels,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 26,
        'menu_icon' => 'dashicons-lightbulb',
        'supports' => array('title', 'editor', 'author', 'excerpt', 'comments','thumbnail'),
    );

    register_post_type('innovations', $args);
}


add_action('add_meta_boxes', 'innovation_funded_add_meta_box');

function innovation_funded_add_meta_box()
{
    add_meta_box('innovation_funded', 'Innovation Funded', 'innovation_funded_callback', 'innovations', 'side');
}

function innovation_funded_callback($post)
{
    wp_nonce_field('save_innovation_data', 'save_location_funded_data_nonce');
    $value = get_post_meta($post->ID, '_event_location_funded_key', true);
    echo '<br/><div class="meta">';
    echo '<input class="components-text-control__input ui-autocomplete-input" type="text" id="location_funded_field" name="location_funded_field" value="'.esc_attr($value).'" size="25" >';
    echo '<p class="howto" >Add amount funnded on an innovation in Uganda Currency, If not yet funded leave blank</p>'; 
    echo '</div>';
}

add_action('save_post', 'save_innovation_data');

function save_innovation_data($post_id)
{
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (!isset($_POST['location_funded_field'])) {
        return;
    }
    $my_data = sanitize_text_field($_POST['location_funded_field']);
    update_post_meta($post_id, '_event_location_funded_key', $my_data);
}
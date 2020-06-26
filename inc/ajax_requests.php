<?php

//suscribe && unsuscribe
function contact_message()
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    //Code to register user

    $user = get_user_by('email', sanitize_email($email));
    if (!$user) {
        $user_id = register_new_user($email, $email);
    } else {
        $user_id = $user->ID;
    }

    $y = wp_update_user(
        array(
        'ID' => $user_id,
        'last_name' => $username,
        'role' => 'contributor',
        )
    );

    $post_arr = array(
        'post_type' => 'messages',
        'post_title' => $subject,
        'post_date' => date('Y-m-d H:i:s'),
        'post_author' => $user_id,
        'post_content' => $message,
        'post_status' => 'publish',
        'comment_status' => 'open',
        'ping_status' => 'open',
    );
    if (wp_insert_post($post_arr)) {
        return 'one';
    }

    die();
}

add_action('wp_ajax_nopriv_contact_message', 'contact_message'); //execute when logged out
add_action('wp_ajax_contact_message', 'contact_message'); //execute when logged out

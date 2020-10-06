<?php


function register_fields()
{
    register_setting('general', 'phone_number', 'esc_attr');
    add_settings_field('phone_number', '<label for="phone_number">'.__('Phone Number' , 'phone_number' ).'</label>' , 'print_phone_number', 'general');
}

function print_phone_number()
{
    $value = get_option( 'phone_number', '' );
    echo '<input type="tel" id="phone_number" name="phone_number" value="' . $value . '" />';
}

add_filter('admin_init', 'register_fields');
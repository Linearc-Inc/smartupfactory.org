<?php

function customiser($wp_customize)
{
    //Theme Options Section
    $wp_customize->add_section(
        'theme_options',
        array(
        'title' => __('Theme Options', 'youth_space'), //Visible title of section
        'capability' => 'edit_theme_options', //Capability needed to tweak
        'description' => __('Allows you to customize theme.', 'youth_space'), //Descriptive tooltip
        )
    );


    $wp_customize->add_setting(
        'top_header_bar_link_title', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
        array(
        'default' => '', //Default setting/value to save
        'type' => 'option', //Is this an 'option' or a 'theme_mod'?
        'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, //Pass the $wp_customize object (required)
            'top_header_bar_link_title_control', //Set a unique ID for the control
            array(
            'label' => __('Header Bar Link Title', 'youth_space'), //Admin-visible name of the control
            'settings' => 'top_header_bar_link_title', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
            'section' => 'theme_options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'type' => 'text',
            )
        )
    );


    $wp_customize->add_setting(
        'top_header_bar_link', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
        array(
        'default' => '', //Default setting/value to save
        'type' => 'option', //Is this an 'option' or a 'theme_mod'?
        'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, //Pass the $wp_customize object (required)
            'top_header_bar_link_control', //Set a unique ID for the control
            array(
            'label' => __('Header Bar Link', 'youth_space'), //Admin-visible name of the control
            'settings' => 'top_header_bar_link', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
            'section' => 'theme_options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'type' => 'text',
            )
        )
    );
}

add_action('customize_register', 'customiser');

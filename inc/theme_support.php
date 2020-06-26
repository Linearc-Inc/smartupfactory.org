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

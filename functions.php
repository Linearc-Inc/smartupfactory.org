<?php
/*
 * Functions and Definitions.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @since      1.0.0
 */

require get_template_directory().'/inc/enqueue.php';
require get_template_directory().'/inc/theme_options.php';
require get_template_directory().'/inc/theme_support.php';
require get_template_directory().'/inc/customise.php';
require get_template_directory().'/inc/clean_up.php';
require get_template_directory().'/inc/ajax_requests.php';

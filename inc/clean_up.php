<?php
/*
@package linarcfootball
    ==========================
     REMOVE GENERATOR VERSION NUMBER
    =========================
*/


function remove_generator_version_string($src)
{
    global $wp_version;

    parse_str(parse_url($src,PHP_URL_QUERY),$query);
    if(!empty($query['ver']) && $query['ver']== $wp_version){
        $src =remove_query_arg( 'ver',$src);
    }

    return $src;
}

function sunset_remove_generator(){
    return "";
}


add_filter( 'script_loader_src','remove_generator_version_string' );
add_filter( 'style_loader_src', 'remove_generator_version_string' );
add_filter( 'the_generator','sunset_remove_generator');


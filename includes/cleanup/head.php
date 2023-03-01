<?php

add_action( 'init', function ()
{
    // remove discovery service link
    remove_action( 'wp_head', 'rsd_link' );

    // Remove Windows Live Writer manifest link
    remove_action( 'wp_head', 'wlwmanifest_link' );

    // remove the general feeds
    remove_action( 'wp_head', 'feed_links', 2 );

    // remove the extra feeds, such as category feeds
    remove_action( 'wp_head', 'feed_links_extra', 3 );

    // remove the displayed XHTML generator
    remove_action( 'wp_head', 'wp_generator' );

    // remove the REST API link tag
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

    // remove oEmbed discovery links
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

    // remove rel next/prev links
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10 );

    // remove prefetch url
    remove_action( 'wp_head', 'wp_resource_hints', 2 );

    // remove meta robots
    remove_action( 'wp_head', 'wp_robots', 1 );

    // add meta charset
    add_action( 'wp_head', 'wl__meta_charset', 1 );

    // add meta robots
    add_action( 'wp_head', 'wp_robots', 1 );

    // add meta viewport
    add_action( 'wp_head', 'wl__meta_viewport', 1 );

} );


function wl__meta_charset()
{
    echo "\r\n<meta charset='" . get_bloginfo( 'charset' ) . "' />\r\n";

    return;
}


function wl__meta_viewport()
{
    echo "<meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1' />\r\n\r\n";

    return;
}



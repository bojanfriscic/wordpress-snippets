<?php 

add_action('do_feed', 'disable_rss_feed', 1);
add_action('do_feed_rdf', 'disable_rss_feed', 1);
add_action('do_feed_rss', 'disable_rss_feed', 1);
add_action('do_feed_rss2', 'disable_rss_feed', 1);
add_action('do_feed_atom', 'disable_rss_feed', 1);
function disable_rss_feed() {
    wp_die('Sorry, no RSS feed available. Please try at our <a href="' . get_bloginfo('url') . '">homepage</a>.');
}
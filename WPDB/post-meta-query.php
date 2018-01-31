<?php

global $wpdb;
$meta_query = "
    SELECT $wpdb->postmeta.meta_value 
    FROM $wpdb->postmeta 
    WHERE $wpdb->postmeta.meta_key = 'my_meta_key'
";
$meta_data = $wpdb->get_results($meta_query, OBJECT);
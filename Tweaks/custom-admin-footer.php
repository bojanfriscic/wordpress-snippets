<?php 

add_filter('admin_footer_text', 'my_custom_admin_footer');
function my_custom_admin_footer() {
    echo 'Custom Wordpress Theme by <a href="#" target="_blank" rel="noreferrer">ME</a>'; 
}
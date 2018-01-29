<?php 

//Remove [...] from excerpt
add_filter('excerpt_more', 'my_excerpt_more');
function my_excerpt_more($more) {
    return '';
}
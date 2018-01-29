<?php

add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
    return 40;
}
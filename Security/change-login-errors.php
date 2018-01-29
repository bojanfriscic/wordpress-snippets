<?php 

add_filter('login_errors', 'no_login_errors');
function no_login_errors() {
    return 'Something went wrong. Please try again!';
}
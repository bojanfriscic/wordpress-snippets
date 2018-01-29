<?php 

add_filter('rest_authentication_errors', 'disable_my_endpoints');
function disable_my_endpoints() {
    if(!is_user_logged_in()) {
        return new WP_Error('rest_cannot_access', 'Access denied', array('status' => rest_authorization_required_code()));
    }
    return $access;
}
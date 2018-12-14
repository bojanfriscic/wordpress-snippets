<?php 

add_filter('woocommerce_default_catalog_orderby', 'my_custom_default_ordering');
function my_custom_default_ordering() {
  return 'your-peferred-ordering';
}
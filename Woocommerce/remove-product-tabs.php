<?php 

add_filter('woocommerce_product_tabs', 'my_remove_product_tabs');
function my_remove_product_tabs($tabs) {
  unset($tabs['description']);
  unset($tabs['reviews']);
  unset($tabs['additional_information']);

  return $tabs;
}

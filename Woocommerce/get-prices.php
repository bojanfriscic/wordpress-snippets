<?php 

$currency = get_woocommerce_currency_symbol();
$price = get_post_meta(get_the_ID(), '_regular_price', true);
$sale = get_post_meta(get_the_ID(), '_sale_price', true);

if($sale) : 

?>
  <span><?php echo $sale . $currency;?></span>
<?php elseif($price) : ?>
  <span><?php echo $price . $currency; ?></span>
<?php endif; ?>


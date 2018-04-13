<?php 

add_shortcode('atts_shortcode', 'my_atts_shortcode');
function my_atts_shortcode($atts, $content = null) {
  $atts = shortcode_atts(
    array(
      'attribute'	=>	'value'
    ),
    $atts,
    'atts_shortcode'
  );

  return '<div class="' . $atts['attribute'] . '">' . $content . '</div>';
}
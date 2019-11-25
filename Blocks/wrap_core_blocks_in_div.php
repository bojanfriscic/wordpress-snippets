<?php 

add_filter('render_block', 'my_render_block', 10, 2);
function my_render_block($block_content, $block) {
  if(strpos($block['blockName'], 'core/') !== false) {
		$block_content = '<div class="my-custom-class">' . $block_content . '</div>';
  }
  
  return $block_content;
}
<?php

// Post ID of your reusable block (find in Manage Reusable Blocks)
$id = 25;
$reusable_block = get_post($id);
echo apply_filters('the_content', $reusable_block->post_content);
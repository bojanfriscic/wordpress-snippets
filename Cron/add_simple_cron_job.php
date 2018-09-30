<?php

add_action('init', function() {
  if(wp_next_scheduled('my_cron_hook')) {
    wp_schedule_event(time(), 'hourly', 'my_cron_hook');
  }
});

add_action('my_cron_hook', function() {
  // Triggered actions go here
});
<?php 

add_action('init', function() {

  $time = wp_next_schedule('my_cron_hook');
  wp_unschedule_event($time, 'my_cron_hook');

  if(!wp_next_scheduled('my_cron_hook')) {
    wp_schedule_event(time(), 'hourly', 'my_cron_hook');
  }
});
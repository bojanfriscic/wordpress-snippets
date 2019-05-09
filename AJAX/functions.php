<?php 

// Class & methods
class weather {
  // Register scripts and pass data to them
  static function setup_data() {
    wp_register_script(
      'weather',
      get_theme_file_uri('/assets/js/weather.js'),
      array('jquery')
    );

    wp_enqueue_script('weather');

    wp_localize_script(
			'weather',
			'Weather',
			array('ajaxurl'	=>	admin_url('admin-ajax.php'))
		);
  }

  // Get data from API
  static function get_data() {
    // Request data
    $url = 'https://api.weatherbit.io/v2.0/current';
    $api_key = 'YOUR_API_KEY';
    $lat = 'YOUR_LAT';
    $lon = 'YOUR_LON';

    // Set up the transient
    $transient = get_transient('current_weather');
    if(!empty($transient)) {
      // Return transient 
      wp_send_json_success($transient);
    } else {
      // Get data from API
      $req_url = $url . '?lat=' . $lat . '&lon=' . $lon . '&key=' . $api_key;
      $data = wp_remote_get($req_url);

      // Set new transient for 1 hour
      set_transient('current_weather', $data, HOUR_IN_SECONDS);

      // Return data
      wp_send_json_success($data);
    }
  }
}

// Hook into Wordpress
add_action('init', 'Weather::setup_data');
add_action('wp_ajax_weather', 'Weather::get_data');
add_action('wp_ajax_nopriv_weather', 'Weather::get_data');
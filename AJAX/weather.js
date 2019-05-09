!function($) {
  $(document).ready(function() {
    var forecastContainer;
    forecastContainer = $('.forecast');

    if(Weather && forecastContainer.length > 0) {
      $.ajax({
        url: Weather.ajaxurl,
        data: {
          action: 'weather'
        }
      })
      .done(function(resp) {
        var data, icon, weather, temp, iconContainer, iconSrc, tempContainer;

        data = JSON.parse(resp.data.body);
        iconContainer = $('.forecast__icon img');
        iconSrc = iconContainer.attr('src');
        tempContainer = $('.forecast__temp-container');

        if(data) {
          // Get values
          icon = data.data[0].weather.icon;
          weather = data.data[0].weather.description;
          temp = data.data[0].temp;

          // Generate content
          iconContainer.attr('src', iconSrc + icon + '.png');
          iconContainer.attr('alt', weather);
          tempContainer.html(temp + ' &deg;C');

        }
      })
      .fail(function(err) {
        console.error('Failed to fetch data: ' + err);
      });
    }


  }); // .ready
}
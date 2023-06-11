/*$(document).ready(function() {
    $.ajax({
        url: '{{ route("get-weather") }}',
        dataType: 'json',
        success: function(weatherData) {
            var temperature = Math.round(weatherData.main.temp - 273.15);
            $('#weather-widget #temperature').text(temperature + '°C ' + weatherData.name);

            var iconCode = weatherData.weather[0].icon;
            var iconUrl = 'http://openweathermap.org/img/w/' + iconCode + '.png';
            $('#weather-widget #weather-icon').html('<img src="' + iconUrl + '">');
        }
    });
});*/
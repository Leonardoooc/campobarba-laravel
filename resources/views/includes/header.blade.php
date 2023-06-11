<!DOCTYPE html>
<html>

<head>
    <title>Campo Barba</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/weather.js') }}"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light navbar-transparente">
            <div class="container">
                <a href="{{ url('/home') }}" class="navbar-brand">
                    <img src="{{ asset('assets/logo.png') }}" width="60">
                </a>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('contato') }}" class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('sobre') }}" class="nav-link">Sobre</a>
                        </li>
                        @if (session('autenticado') == 'SIM')
                            <form id="logout-form" action="{{ route('login.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li class="nav-item">
                                <a href="{{ url('dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ url('login') }}" class="nav-link">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>

                <div id="weather-widget" class="ml-auto">
                    <div id="weather-icon"></div>
                    <p id="temperature"></p>
                </div>
            </div>
        </nav>
    </header>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
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
    });
</script>
</html>
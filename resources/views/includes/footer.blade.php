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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('assets/logo.png') }}" width="90">
                </div>
                <div class="col-md-2">
                    <h4>Campo Barba</h4>
                    <ul class="navbar-nav">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/contato') }}">Contatos</a></li>
                        <li><a href="{{ url('/cadastro') }}">Cadastro</a></li>
                        <li><a href="{{ url('/sobre') }}">Sobre Nós</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>Termos</h4>
                    <ul class="navbar-nav">
                        <li><a href="">Termos de Serviço</a></li>
                        <li><a href="">Termos de Uso</a></li>
                        <li><a href="">Cookies</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4>links uteis</h4>
                    <ul class="navbar-nav">
                        <li><a href="">Sobre o Site</a></li>
                        <li><a href="">Links</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <a href=""><img src="{{ asset('assets/facebook.png') }}"></a>
                        </li>
                        <li>
                            <a href=""><img src="{{ asset('assets/twitter.png') }}"></a>
                        </li>
                        <li>
                            <a href=""><img src="{{ asset('assets/instagram.png') }}"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
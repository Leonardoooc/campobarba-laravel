<!DOCTYPE html>
<html>

<head>
    <title>Campo Barba</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>

<body>

    @include('includes.header')

    <main>
        <section id="home" class="d-flex">
            <div class="container align-self-center">
                <div class="row">
                    <div class="col-md-12">

                        <div id="area-principal">

                            <div id="area-sobrenos">

                                <!-- abertura postagem -->
                                <div class="postagem-sobrenos">
                                    <article id="sobrenos">
                                        <h2 class="titulosecundario">Contato!</h2>
                                        <ul>
                                            <li>
                                                <p class="paragrafo">Telefone: +55 (42)3446-1886</p>
                                            </li>
                                            <div id="emailcontato">
                                                <li><a href="mailto:campobarba@barbearia.com.br">Email:
                                                        campobarba@barbearia.com.br</a>
                                                </li>
                                            </div>
                                            <li>
                                                <p class="paragrafo">Instagram: campo_barba</p>
                                            </li>
                                        </ul>
                                    </article>
                                    <span class="data-postagem"> </span>
                                    <br>
                                    <article id="localizacao">
                                        <h2 class="titulosecundario">Marque seu Horário</h3>
                                            <span class="texto-sobrenos">Preencha o formulário para estarmos entrando em
                                                contato com
                                                voce!</span>
                                            <br>
                                            <form method="POST" action="{{ route('saveForm.saveForm') }}" id="formulario">
                                                @csrf
                                                <label class="nome" for="fname"><strong>Nome:</strong></label><br>
                                                <input type="text" class="formulario" name="nome" placeholder="Digite seu nome" id="inputnome"><br><br>
                                                <label class="celular" for="lname"><strong>Celular:</strong></label><br>
                                                <input type="text" class="formulario" name="celular" placeholder="Escreva seu telefone (XX) XXXXX-XXXX" id="inputcel"><br><br>
                                                <label class="data" for="lname"><strong>Data:</strong></label><br>
                                                <input type="text" class="formulario" name="data" placeholder="dd/mm/aaaa" id="inputdata"><br><br>
                                                <label class="horario" for="lname"><strong>Horario:</strong></label><br>
                                                <input type="text" class="formulario" name="horario" placeholder="XX:XX" id="inputhorario"><br><br>
                                                <button type="submit" id="botao" onclick="sendHorario()">Enviar</button>
                                            </form>
                                    </article>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('includes.footer')

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function() {
        $('#formulario').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: '/send-form',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert("Formulário enviado com sucesso!")
                    }
                    else {
                        alert("Informações inválidas.");
                        return;
                    }
                },
                error: function() {
                    alert("Erro ao enviar formulário.")
                }
            });
        });
    });


    function sendHorario() {
        let nome = document.getElementById('inputnome').value;
        let email = document.getElementById('inputemail').value;
        let celular = document.getElementById('inputcel').value;
        let data = document.getElementById('inputdata').value;
        let horario = document.getElementById('inputhorario').value;
        data = data.replace('/', '-');
        data = data.replace('/', '-');
        let dataSplit = data.split('-');
        var day = dataSplit[0];
        var month = dataSplit[1];
        var ano = dataSplit[2];
        data = `${ano}-${month}-${day}`;
        let dateResult = dateIsValid(new Date(data));
        if (nome == "" || email == "" || celular == "" || data == "" || horario == "") return alert("Preencha todos os campos.");
        if (!dateResult) {
            return alert("Formato de data inválida.");
        }
        window.location.href = "{{ url('pagamento') }}";
    }


    function dateIsValid(date) {
        return date instanceof Date && !isNaN(date);
    }
</script>

</html>
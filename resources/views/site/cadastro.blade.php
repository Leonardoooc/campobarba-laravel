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
                            <div class="postagem-sobrenos">
                                <div class="caixa">
                                    <h2 class="titulosecundario">Cadastre-se!</h2>
                                    <br>
                                    <form method="POST" action="{{ route('saveUser.saveUser') }}" id="cadastro">
                                        @csrf
                                        <label class="nome" for="fname"><strong>Nome:</strong></label><br>
                                        <input type="name" class="formulario" name="fname" id="nome"><br><br>
                                        <label class="email" for="lname"><strong>Email:</strong></label><br>
                                        <input type="email" class="formulario" name="email" id="email"><br><br>
                                        <label class="email" for="lname"><strong>Senha:</strong></label><br>
                                        <input type="password" class="formulario" name="senha" id="password"><br><br>
                                        <button type="submit" id="botao">Cadastrar</button>
                                    </form>
                                    <br>
                                    <br>
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
        $('#cadastro').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: '/new-user',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert("Cadastro realizado com sucesso!")
                        window.location.href = "{{ url('login') }}";
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
    
</script>

</html>
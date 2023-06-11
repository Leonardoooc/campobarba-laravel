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
    @include('includes.header')
    
    <main>
        <section id="home" class="d-flex">
            <div class="container align-self-center">
                <div class="row">
                    <div class="col-md-12">
                        <div id="area-principal">

                            <div id="area-postagens">

                                <!-- abertura postagem -->
                                <div class="postagem">
                                    <h2 class="titulosecundario">A Campo Barba e os Jogos de Poker</h2>
                                    <br>
                                    <span class="subtitulo data-postagem" style="margin-bottom: 1rem;">Venha até a Barbearia e jogue Poker com seus
                                        amigos!</span>
                                    <img class="img-fluid" width="620px" src="{{ asset('assets/beneficios.jpg') }}">
                                    <p class="paragrafo">
                                        Os homens que curtem o jogo de cartas mais popular do mundo têm lugar reservado
                                        à
                                        mesa.
                                        O
                                        poker
                                        acontece quinzenalmente ou de acordo com a reserva da mesa.
                                        Reúna-se com os amigos e boa sorte!
                                    </p>
                                    <br>
                                    <button type="button" class="btn btn-outline-warning link" onclick="openModal()">Leia mais</button>
                                </div>
                                <!--// fechamento postagem -->

                                <!-- abertura postagem -->
                                <div class="postagem">
                                    <h2 class="titulosecundario">Corte com Garantia</h2>
                                    <br>
                                    <span class="data-postagem">A Campo Barba apresenta garantia para todos os tipos de
                                        cortes!</span>
                                    <img class="img-fluid" width="620px" src="{{ asset('assets/imagem2.jpg') }}">
                                    <p class="paragrafo">
                                        Veio até a Barbearia, fez o corte ou barba e depois decidiu que não está tão
                                        feliz
                                        assim?
                                        Sem
                                        problema! Em até 7 dias após o corte ou até 2 dias após a barba, você pode
                                        voltar
                                        que o
                                        ajuste é
                                        por
                                        nossa conta.
                                    </p>
                                    <br>
                                    <button type="button" class="btn btn-outline-warning link" onclick="openModal2()">Leia mais</button>
                                </div>
                                <!--// fechamento postagem -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('includes.footer')

    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <br>
            <img src="{{ asset('assets/beneficios.jpg') }}" class="img-fluid">
            <p>O clube existe há dez anos e é frequentado diariamente por cerca de 25 jogadores, em torneios realizados
                de segunda a sábado. O torneio dessa quinta cobrava uma taxa de R$ 100 para inscrição, com a garantia de
                uma premiação no valor de R$ 10 mil. Antigamente o Poker era mal visto, como um jogo com perdas
                absurdas. Hoje não tem mais isso, o Poker não é um jogo de azar, ele é considerado um esporte.</p>

        </div>

    </div>
    <div id="myModal2" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <br>
            <img src="{{ asset('assets/imagem2.jpg') }}" class="img-fluid">
            <p>Aqui é barba, cabelo e bigode! Venha dar aquele tapa no visual e tomar aquela cervejinha gelada conversando com os amigos.

                Se você se achava bonito, tenho certeza que depois de ir no barbeiro… você se achará maravilhoso!

                O homem moderno também cuida da sua aparência e a nossa barbearia é o melhor lugar para fazer isso!

                Quem quer ser bem atendido e voltar para casa mais bonito sabe que a barbearia Campo Barba é o melhor lugar!

                Está de folga? Então aproveite para dar um trato na barba e no cabelo para aproveitar o naquele estilo!</p>

        </div>

    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    var modal = document.getElementById("myModal");
    var modal2 = document.getElementById("myModal2");
    var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close")[1];

    function openModal() {
        modal.style.display = "block";
    }

    function openModal2() {
        modal2.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
</script>

</html>
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
                                        <h2 class="titulosecundario">Sobre Nós!</h2>
                                        <p class="paragrafo">A Campo Barba é a barbearia da sua época. Focada em
                                            excelência, a Barbearia
                                            conta com tudo
                                            que o homem moderno precisa. Um ambiente confortável e descontraído, com
                                            cuidados para todos os estilos de barba e cabelo, além de serviços como
                                            massagem, podologia,
                                            estética masculina, feminina e dia do noivo. Uma barbearia premium, para
                                            cuidar do visual,
                                            tomar uma
                                            cerveja
                                            gelada, assistir aos seus esportes favoritos ou jogar uma partida de sinuca.
                                        </p>
                                    </article>
                                    <span class="data-postagem"> </span>
                                    <br>
                                    <article id="localizacao">
                                        <h2 class="titulosecundario">Onde Estamos?</h3>
                                            <span class="texto-sobrenos">R. Comendador Norberto, 1299 - Santa Cruz,
                                                Guarapuava - PR,
                                                85015-240</span>
                                            <br>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.0245640854664!2d-51.47314628445841!3d-25.403988338088233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef462cdc2f72fb%3A0xbe73a2c1e8973c98!2sCentro%20Universit%C3%A1rio%20Campo%20Real!5e0!3m2!1spt-BR!2sbr!4v1662506570290!5m2!1spt-BR!2sbr" width="620" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </article>

                                    <span class="data-postagem"> </span>

                                    <article id="localizacao">
                                        <h2 class="titulosecundario">Conheça nosso Estabelecimento!</h3>
                                            <br>
                                            <iframe width="620" height="340" src="https://www.youtube.com/embed/QLaX3_03Osk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </article>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
        </section>
    </main>

    @include('includes.footer')

</body>

</html>
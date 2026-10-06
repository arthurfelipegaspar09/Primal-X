<?php


if (!isset($_SESSION['login'])) {
    header('Location: ../index.php');
    exit;
}
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Primal X</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="./img/primalxlogo.png">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>

<body class="fundo1">
    <nav class="navdecima">
        <a href="#fogo" class="fogoelementonav"><i class="fa-sharp fa-solid fa-fire-flame-curved"></i> Fogo</span></a>
        <a href="#agua" class="aguaelementonav"><i class="fa-solid fa-droplet"></i> Água</span></a>
        <a href="#terra" class="terraelementonav"><i class="fa-solid fa-mountain"></i> Terra</span></a>
        <a href="#ar" class="arelementonav"><i class="fa-solid fa-crosshairs"></i> Ar</span></a>
    </nav>

        <nav class="top-nav">
        <a href="#perfilcompras"><i class="fa-solid fa-cart-shopping"></i>SEU CARRINHO</a></nav>

    <div class="imagemfixa1"></div>

    <div class="herocontent">
        <h5 class="descricaopequena">ESPORTES RADICAIS <span>·</span>   EQUIPAMENTO PROFISSIONAL</h5>
        <h1 class="titulo1">ESTÁ BUSCANDO <span class="neon-text" style="color: greenyellow;">ADRENALINA</span> PARA SUA
            VIDA?</h1>
        <p class="textodescritivo1">Equipamentos para quem não aceita limites. Fogo, Água, Terra e Ar — cada elemento,
            uma arena. Cada produto, uma declaração de coragem.</p>
        <button class="button1home">Explorar elementos</button> <button class="button2home">Ver catálogo</button>


    </div>

      <nav class="navbar">

        <div class="nav-link">

            <a href="#">Fogo</a>
            <a href="#">Água</a>
            <a href="#">Terra</a>
            <a href="?logout">logout!</a>

        </div>

        <button class="user-button" onclick="toggleNav()">
            <img src="img/usuario.png" alt="Usuário">
        </button>

    </nav>

     <script src="./js/nav.js"></script>



    <div class="divisoriametade">
        <div class="linha-divisoria"></div>
        <div class="icones-centralizados">
            <div class="caixa-icone fogo"><i class="fa-sharp fa-solid fa-fire-flame-curved"></i></div>
            <div class="caixa-icone agua"><i class="fa-solid fa-droplet"></i></div>
            <div class="caixa-icone terra"><i class="fa-solid fa-mountain"></i></div>
            <div class="caixa-icone ar"><i class="fa-solid fa-crosshairs"></i></div>
        </div>
        <div class="linha-divisoria"></div>
    </div>
    <div class="herocontent">

        <section class="secao-elementos">

            <div class="titulo-elementos">

                <h2>
                    DECIDA SEU LADO <strong>EXTREMO</strong>
                </h2>
            </div>

            <div class="cards-elementos">

                <!-- FOGO -->
                <article class="cardelementos1">
                    <div class="card-conteudo">

                        <div class="icone-card">
                            <i class="fa-sharp fa-solid fa-fire-flame-curved"></i>
                        </div>

                        <span class="categoria-card">
                            Globe of Death · Airsoft · hard enduro<br>Entre Outros...
                        </span>

                        <h3>FOGO</h3>

                        <p>
                            Para quem vive no limite da chama.
                            Equipamentos que suportam o inferno.
                        </p>

                        <a href="#fogo" class="link-card">
                            VER PRODUTOS <span>→</span>
                        </a>

                    </div>
                </article>


                <!-- ÁGUA -->
                <article class="cardelementos2">
                    <div class="card-conteudo">

                        <div class="icone-card">
                            <i class="fa-solid fa-droplet"></i>
                        </div>

                        <span class="categoria-card">
                            Mergulho Técnico · Cave Diving · Kitesurf <br>Entre Outros...
                        </span>

                        <h3>ÁGUA</h3>

                        <p>
                            Nas profundezas onde a luz não chega.
                            Gear que resiste às pressões do abismo.
                        </p>

                        <a href="#agua" class="link-card">
                            VER PRODUTOS <span>→</span>
                        </a>

                    </div>
                </article>


                <!-- TERRA -->
                <article class="cardelementos3">
                    <div class="card-conteudo">

                        <div class="icone-card">
                            <i class="fa-solid fa-mountain"></i>
                        </div>

                        <span class="categoria-card">
                            Equitação · Caça Tática · Canyoning<br>Entre Outros...
                        </span>

                        <h3>TERRA</h3>

                        <p>
                            Da mata fechada ao campo aberto.
                            Precisão, resistência, domínio do terreno.
                        </p>

                        <a href="#terra" class="link-card">
                            VER PRODUTOS <span>→</span>
                        </a>

                    </div>
                </article>


                <!-- AR -->
                <article class="cardelementos4">
                    <div class="card-conteudo">

                        <div class="icone-card">
                            <i class="fa-solid fa-crosshairs"></i>
                        </div>

                        <span class="categoria-card">
                            Paraquedismo · Alpinismo · Wingsuit <br>Entre Outros...
                        </span>

                        <h3>AR</h3>

                        <p>
                            Onde o vento decide.
                            Equipamentos que desafiam a gravidade e a altitude.
                        </p>

                        <a href="#ar" class="link-card">
                            VER PRODUTOS <span>→</span>
                        </a>

                    </div>
                </article>

            </div>

        </section>


    </div>
        <div class="divisoriametade">
        <div class="linha-divisoria"></div>
        <div class="icones-centralizados">
            <div class="caixa-icone fogo"><i class="fa-sharp fa-solid fa-fire-flame-curved"></i></div>
            <div class="caixa-icone agua"><i class="fa-solid fa-droplet"></i></div>
            <div class="caixa-icone terra"><i class="fa-solid fa-mountain"></i></div>
            <div class="caixa-icone ar"><i class="fa-solid fa-crosshairs"></i></div>
        </div>
        <div class="linha-divisoria"></div>
    </div>



















</body>

</html>
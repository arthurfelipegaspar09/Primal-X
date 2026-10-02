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

    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>

<body class="fundo1">

    <nav class="navdecima">

        <a href="./php/fogo.php" class="fogoelementonav">
            <i class="fa-sharp fa-solid fa-fire-flame-curved"></i> Fogo
        </a>

        <a href="./php/criar_produto.php" class="aguaelementonav">
            <i class="fa-solid fa-droplet"></i> Água
        </a>

        <a href="#terra" class="terraelementonav">
            <i class="fa-solid fa-mountain"></i> Terra
        </a>

        <a href="#ar" class="arelementonav">
            <i class="fa-solid fa-crosshairs"></i> Ar
        </a>

    </nav>

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

    <div class="imagemfixa1"></div>

    <div class="herocontent">

        <h5 class="descricaopequena">
            ESPORTES RADICAIS <span>·</span> EQUIPAMENTO PROFISSIONAL
        </h5>

        <h1 class="titulo1">
            ESTÁ BUSCANDO
            <span class="neon-text" style="color: greenyellow;">ADRENALINA</span>
            PARA SUA VIDA?
        </h1>

        <p class="textodescritivo1">
            Equipamentos para quem não aceita limites. Fogo, Água, Terra e Ar — cada elemento,
            uma arena. Cada produto, uma declaração de coragem.
        </p>

    </div>

</body>

</html>

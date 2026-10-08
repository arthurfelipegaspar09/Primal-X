<?php

require_once 'config.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PRIMAL X | Criar Conta</title>

    <!-- Mesmo estilo visual da página de login -->
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>

    <div class="login">

        <!-- CABEÇALHO -->
        <div class="tab">

            <h5 class="descricaopequena">
                CRIE SUA CONTA GRATUITAMENTE
            </h5>

            <h1 class="titulo1">

                FAÇA PARTE DO

                <span class="neon-text">
                    PRIMAL X
                </span>

            </h1>

            <p class="textodescritivo1">

                Crie sua conta gratuitamente e tenha acesso
                aos nossos produtos e recursos exclusivos.

            </p>

        </div>

        <div class="tab-underline"></div>


        <!-- MENSAGEM DE ERRO -->
        <?php if (!empty($_SESSION['erro'])): ?>

            <p style="
                color: #d33;
                text-align: center;
                margin-bottom: 1rem;
                font-weight: bold;
            ">

                <?php
                    echo htmlspecialchars($_SESSION['erro']);
                    unset($_SESSION['erro']);
                ?>

            </p>

        <?php endif; ?>


        <!-- MENSAGEM DE SUCESSO -->
        <?php if (!empty($_SESSION['sucesso'])): ?>

            <p style="
                color: #2a2;
                text-align: center;
                margin-bottom: 1rem;
                font-weight: bold;
            ">

                <?php
                    echo htmlspecialchars($_SESSION['sucesso']);
                    unset($_SESSION['sucesso']);
                ?>

            </p>

        <?php endif; ?>


        <!-- FORMULÁRIO DE CADASTRO -->
        <form method="POST" action="processar_cadastro.php">


            <!-- NOME -->
            <label for="nome">
                NOME
            </label>
            
            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="SEU NOME"
                required
                minlength="2"
                maxlength="100"
                autocomplete="name"
            >


            <!-- E-MAIL -->
            <label for="email">
                E-MAIL
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="SEU E-MAIL"
                required
                maxlength="150"
                autocomplete="email"
            >


            <!-- SENHA -->
            <label for="senha">
                SENHA
            </label>

            <input
                type="password"
                id="senha"
                name="senha"
                placeholder="SUA SENHA"
                required
                minlength="6"
                maxlength="100"
                autocomplete="new-password"
            >


            <!-- CONFIRMAR SENHA -->
            <label for="confirmar_senha">
                CONFIRMAR SENHA
            </label>

            <input
                type="password"
                id="confirmar_senha"
                name="confirmar_senha"
                placeholder="CONFIRME SUA SENHA"
                required
                minlength="6"
                maxlength="100"
                autocomplete="new-password"
            >


            <!-- PERMISSÃO DE LOCALIZAÇÃO -->
            <div
                class="localizacao-card"
                style="
                    margin-top: 18px;
                    margin-bottom: 20px;
                    padding: 15px;
                    border: 1px solid #333;
                    background: rgba(0, 0, 0, 0.35);
                "
            >

                <p
                    style="
                        margin: 0 0 12px 0;
                        font-weight: bold;
                        color: white;
                    "
                >
                    Podemos acessar sua localização para facilitar o envio dos produtos?
                </p>

                <p
                    style="
                        margin: 0 0 14px 0;
                        font-size: 13px;
                        color: #aaa;
                    "
                >
                    Você poderá alterar essa preferência posteriormente.
                </p>


                <div
                    style="
                        display: flex;
                        gap: 20px;
                        align-items: center;
                    "
                >

                    <label
                        style="
                            display: flex;
                            align-items: center;
                            gap: 6px;
                            color: white;
                            cursor: pointer;
                        "
                    >

                        <input
                            type="radio"
                            name="permitir_localizacao"
                            value="sim"
                            required
                        >

                        SIM

                    </label>


                    <label
                        style="
                            display: flex;
                            align-items: center;
                            gap: 6px;
                            color: white;
                            cursor: pointer;
                        "
                    >

                        <input
                            type="radio"
                            name="permitir_localizacao"
                            value="nao"
                            required
                        >

                        NÃO

                    </label>

                </div>

            </div>


            <!-- BOTÃO -->
            <button
                type="submit"
                class="btn-acessar"
            >
                CRIAR CONTA →
            </button>

        </form>


        <!-- DIVISOR -->
        <hr class="divider">


        <!-- LINK PARA LOGIN -->
        <div class="signup">

            Já possui uma conta?

            <a href="./login.php">
                Entrar agora →
            </a>

        </div>

    </div>

</body>

</html>
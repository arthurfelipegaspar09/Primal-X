<?php

session_start();

if (!isset($_SESSION['login'])) {

    if (isset($_POST['acao'])) {

        $login = 'adm';
        $senha = '1234567';

        $loginForm = $_POST['login'] ?? '';
        $senhaForm = $_POST['senha'] ?? '';

        if ($login == $loginForm && $senha == $senhaForm) {

            $_SESSION['login'] = true;

            header('Location: index.php');
            exit;

        } else {

            $erro = 'Dados inválidos';

        }
    }

    include('./php/login.php');

} else {

    if (isset($_GET['logout'])) {

        session_destroy();

        header('Location: index.php');
        exit;
    }

    include('./php/home.php');
}

?>
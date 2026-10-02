<?php

session_start();

if (!isset($_SESSION['projetos'])) {
    $_SESSION['projetos'] = [];
}

?>
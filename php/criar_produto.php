<?php

require_once 'cadastro.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $projeto = [
        'nome' => $_POST['nome'],
        'categoria' => $_POST['categoria'],
        'ano' => $_POST['ano'],
        'descricao' => $_POST['descricao'],
        'imagem' => $_FILES['imagem']['name'],
        'link' => $_POST['link']
    ];

    $_SESSION['projetos'][] = $projeto;

    header('Location: fogo.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Primal X| Adicionar Projeto</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="card">

        <div class="tab">NOVO PROJETO</div>

        <form method="POST" enctype="multipart/form-data">

            <div class="field">
                <label for="nome">NOME DO PROJETO</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="field">
                <label for="categoria">CATEGORIA</label>
                <input 
                    type="text" 
                    id="categoria" 
                    name="categoria" 
                    placeholder="Ex: SISTEMA WEB" 
                    required
                >
            </div>

            <div class="field">
                <label for="ano">ANO</label>
                <input 
                    type="text" 
                    id="ano" 
                    name="ano" 
                    value="2026" 
                    required
                >
            </div>

            <div class="field">
                <label for="descricao">DESCRIÇÃO</label>
                <textarea 
                    id="descricao" 
                    name="descricao" 
                    rows="3" 
                    required
                ></textarea>
            </div>

            <div class="field">
                <label for="imagem">IMAGEM DO PROJETO</label>
                <input 
                    type="file" 
                    id="imagem" 
                    name="imagem" 
                    accept="image/*" 
                    required
                >
            </div>

            <div class="field">
                <label for="link">LINK DO PROJETO</label>
                <input 
                    type="url" 
                    id="link" 
                    name="link" 
                    placeholder="https://..." 
                    required
                >
            </div>

            <button type="submit" class="btn-acessar">
                ADICIONAR PROJETO
            </button>

        </form>

    </div>

</body>
</html>
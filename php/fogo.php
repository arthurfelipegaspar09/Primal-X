<?php

require_once 'cadastro.php';

$projetos = $_SESSION['projetos'] ?? [];



if (isset($_GET['excluir'])) {

    $indice = (int) $_GET['excluir'];

    
    if (isset($_SESSION['projetos'][$indice])) {

        
        unset($_SESSION['projetos'][$indice]);

        
        $_SESSION['projetos'] = array_values($_SESSION['projetos']);
    }

    
    $projetos = $_SESSION['projetos'] ?? [];

    
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

?>



<main>

    <section class="projetos">

        <?php if (!empty($projetos)): ?>

            <?php foreach ($projetos as $indice => $projeto): ?>

                <div class="projeto-card">

                    

                    <img 
                        src="../img/<?php echo htmlspecialchars($projeto['imagem'] ?? ''); ?>"
                        alt="Projeto <?php echo htmlspecialchars($projeto['nome'] ?? ''); ?>"
                    >


                    <div class="projeto-conteudo">

                        

                        <div class="projeto-topo">

                            <div class="icone">
                                { }
                            </div>

                            <span class="ano">
                                <?php echo htmlspecialchars($projeto['ano'] ?? ''); ?>
                            </span>

                        </div>


                        

                        <p class="categoria">
                            <?php echo htmlspecialchars($projeto['categoria'] ?? ''); ?>
                        </p>


                        

                        <h2>
                            <?php echo htmlspecialchars($projeto['nome'] ?? ''); ?>
                        </h2>


                       

                        <p class="descricao">
                            <?php echo htmlspecialchars($projeto['descricao'] ?? ''); ?>
                        </p>


                        

                        <div class="projeto-final">

                            <span class="empresa">
                                PRIMAL X
                            </span>



                            <a
                                href="?excluir=<?php echo $indice; ?>"
                                onclick="return confirm('Tem certeza que deseja excluir este projeto?');"
                            >
                                excluir
                            </a>


                           

                            <?php if (!empty($projeto['link'])): ?>

                                <a
                                    href="<?php echo htmlspecialchars($projeto['link']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    VER PROJETO →
                                </a>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>


        <?php else: ?>

            

            <p>
                Nenhum projeto encontrado.
            </p>

        <?php endif; ?>

    </section>

</main>

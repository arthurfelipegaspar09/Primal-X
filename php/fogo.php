<?php

require_once 'cadastro.php';

$projetos = $_SESSION['projetos'];

?>

<!-- PROJETOS -->

<main>

    <section class="projetos">

        <?php if (!empty($projetos)): ?>

            <?php foreach ($projetos as $projeto): ?>

                <div class="projeto-card">

                    <!-- IMAGEM DO PROJETO -->

                    <img 
                        src="../imagens/<?php echo htmlspecialchars($projeto['imagem']); ?>" 
                        alt="Projeto <?php echo htmlspecialchars($projeto['nome']); ?>"
                    >


                    <div class="projeto-conteudo">

                        <!-- TOPO DO CARD -->

                        <div class="projeto-topo">

                            <div class="icone">
                                { }
                            </div>

                            <span class="ano">
                                <?php echo htmlspecialchars($projeto['ano']); ?>
                            </span>

                        </div>


                        <!-- CATEGORIA -->

                        <p class="categoria">
                            <?php echo htmlspecialchars($projeto['categoria']); ?>
                        </p>


                        <!-- NOME -->

                        <h2>
                            <?php echo htmlspecialchars($projeto['nome']); ?>
                        </h2>


                        <!-- DESCRIÇÃO -->

                        <p class="descricao">
                            <?php echo htmlspecialchars($projeto['descricao']); ?>
                        </p>


                        <!-- RODAPÉ -->

                        <div class="projeto-final">

                            <span class="empresa">
                                WE CODE
                            </span>


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
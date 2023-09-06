<?php
require_once 'include/header.php';
require_once 'include/conexaoBD.php';
?>

<main>
    <h1 class="bem-vindo">Bem vindo Usuario</h1>

    <?php
    $sql = "SELECT "
        . "(SELECT user.nome FROM tbusuarios user where perg.user_id = user.user_id) as user_id, "
        . "perg.data_publicacao as data_publicacao, "
        . "perg.titulo as titulo, "
        . "perg.conteudo as conteudo "
        . "FROM "
        . "tbperguntas perg "
        . "order by perg.data_publicacao DESC ";


    $resultado = mysqli_query($connection, $sql);

    while ($dados = mysqli_fetch_array($resultado)) {
    ?>


        <!-- Post - article -->
        <article class="card">
            <!-- Header do Post -->
            <header class="cardHeader">
                <!-- foto e nome usuario -->
                <div class="caixa-usuario">
                    <span class="txtUsuario"><?php echo $dados['user_id']; ?></span>
                </div>
                <!-- Data -->
                <span class="date"><?php echo date('d/m/Y H:i:s', strtotime($dados['data_publicacao'])); ?></span>
            </header>


            <!-- Titulo -->
            <h2 class="cardTitulo" maxlength="10"><?php echo $dados['titulo']; ?></h2>

            <!-- Texto do Post -->
            <p class="cardText"><?php echo $dados['conteudo']; ?></p>


            <!-- footer do post -->
            <footer class="cardFooter">
                <span class="material-symbols-outlined cardIcone">favorite</span>
                <span class="material-symbols-outlined cardIcone">mode_comment</span>
                <span class="material-symbols-outlined cardIcone">bookmark</span>
            </footer>
        </article>

    <?php
    }
    ?>

    <?php
    include_once 'include/footer.php';
    ?>
</main>
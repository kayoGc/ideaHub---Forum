<?php
require_once 'include/header.php';
?>

<main>
    <h1 class="bem-vindo">Bem vindo Usuario</h1>
    <!-- Post - article -->
    <article class="card">
        <!-- Header do Post -->
        <header class="cardHeader">
            <!-- nome usuario -->
            <div class="caixa-usuario">
                <span class="txtUsuario">Usuario</span>
            </div>
            <!-- Data -->
            <span class="date">12/12/12</span>
        </header>


        <!-- Titulo -->
        <h2 class="cardTitulo" maxlength="10">titulo</h2> 

        <!-- Texto do Post -->
        <p class="cardText">pergunta</p>


        <!-- footer do post -->
        <footer class="cardFooter">
            <span class="material-symbols-outlined cardIcone">favorite</span>
            <span class="material-symbols-outlined cardIcone">mode_comment</span>
            <span class="material-symbols-outlined cardIcone">bookmark</span>
        </footer>
    </article>
    <?php
    include_once 'include/footer.php';
    ?>
</main>
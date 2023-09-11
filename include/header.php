<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IdeaHub</title>

    <!-- Fontes, icones, frameworks (sempre antes) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS normal (sempre depois) -->
    <link rel="stylesheet" href="css/global.css">
    
</head>
<body>
    <header>
        <nav class="caixa-nav">
            <!-- nav item 1 -->
            <a class="logo" href="index.php"><h1>IdeaHub</h1></a>

            <!-- nav item 2 -->
            <div class="pesquisa"> 
                <input class="barraPesquisa" placeholder="Pesquisar..." type="search">
                <span class="icones  iconePesquisa material-symbols-outlined">search</span>
            </div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link" href="nova-pergunta.php">
                        <span class="material-symbols-outlined">add</span>
                        <span class="descricao d-1">novo post</span>
                    </a>
                </li>
                <li class="nav-item">
                    <button class="mudar-tema nav-link">
                        <span class="material-symbols-outlined">wb_sunny</span>
                        <span class="descricao d-1">mudar tema</span>
                    </button>  
                </li>
                <li class="nav-item">
                    <a class="nav-link usuario" href="#">
                        <span class="material-symbols-outlined">person</span>
                        <span class="descricao d-1">Perfil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="material-symbols-outlined">help</span>
                        <span class="descricao">Sobre nós</span>
                    </a>
                </li>
            </ul>

            <div class="hamburguer">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    
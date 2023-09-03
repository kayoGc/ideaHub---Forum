<?php 
    include_once 'include/header.php';
    include_once 'include/conexaoBD.php';
?>

<!--
    <main class="pPrincipal">
        <h2>Faça uma pergunta</h2>
        <form class="pCaixa-inputs" method="POST" action="index.php">
            <textarea class="pInput pTitulo" type="text" id="titulo" name="titulo" placeholder="Titulo..." rows="1" maxlength="100" cols="50" required></textarea>   
            <textarea class="pInput pTexto" type="text" id="pergunta" name="pergunta" placeholder="Pergunta..." rows="4" cols="50" required></textarea>
            <button type="submit">Postar pergunta</button>    
        </div>
    </main>
-->
<body class="fundoTelaCadastro">
<div class="container" >
    <h4 class="titleNovaPergunta">Qual a sua pergunta?</h4>

    <!-- Formulário de cadastro da pergunta, não possui action pois sempre fica na mesma "pagina" -->

    <form action="cadastrarNovaPergunta.php" method="POST">
        
        <div class="form-group">
            <label for="titulo">Titulo da pergunta</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
            <small class="form-text text-muted">Use sua criatividade</small>
        </div>

        <div class="form-group">
            <label for="conteudo">Descrição</label>
            <textarea name="conteudo" id="conteudo" class="form-control" rows="5"></textarea>
            <small class="form-text text-muted">Seja detalhista</small>
        </div>

        <div class="form-group">
            <button id="criarPerguntas" name="criarPerguntas" type="submit" class="btn btn-secondary">Perguntar</button>
            <a href="index.php">
                <button type="button" class="btn btn-secondary">Voltar</button>
            </a>                
        <div class="nav justify-content-end">
            


    </div>

        </div>

    </form>

</div>
</div>


<?php 
    include_once 'include/footer.php';
?>

</body>
<?php

require_once 'include/conexaoBD.php';

// Verifica se as informações de `cadastrar.php` foram recebidas com sucesso
if (isset($_POST['titulo'], $_POST['conteudo'])) {
    // Instância a Pergunta
 
    
    $user_id = "1";
    if (isset($_POST['titulo'])) {
        $titulo = mysqli_escape_string($connection, $_POST['titulo']);
        $conteudo = mysqli_escape_string($connection, $_POST['conteudo']);
    
        if (strlen($_POST['titulo'] > 0)) {
            $sql = "INSERT INTO tbPerguntas(user_id,titulo,conteudo,data_publicacao)VALUES('$user_id','$titulo','$conteudo',NOW())";
    
            if (mysqli_query($connection, $sql)) {
              echo "<script> alert('Pergunta salva com sucesso!'); </script>";
              header('Location: index.php');
            } else {
              echo "<script> alert('Ocorreu um erro ao salvar a sua pergunta. Tente novamente mais tarde!'); </script>";
            }
        }
    }
}
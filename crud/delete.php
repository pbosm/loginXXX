<?php

    //Poderia ter usado PDO() também pra fazer as requisições banco de dados

    session_start(); //abrindo a sessão
    require_once "../database/conn.php"; //IMPORTANDO A CONEXÃO COM O BD DE DADOS.

    $id   = $_GET['id'];  //PEGANDO ID E NOME DA PAGINA ANTERIOR ATRÁVES DO HREF E CLICK NO BOTÃO DE EXCLUIR, METODO GET 
    $nome = $_GET['nome'];

    $sql = "DELETE FROM colaboradores where id = $id";

    $erros = [];

    if(mysqli_query($conn, $sql)){
        $erros[] =  header('Location: ../layout/colaboradores.php');
        $_SESSION['apagado'] = true;
        exit();
    } else {
        $erros[] =  header('Location: ../layout/colaboradores.php');
        $_SESSION['não_apagado'] = true;
        exit();
    }


?>
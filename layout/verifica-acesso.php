<?php

    session_start();

    //teste para validarmos o acesso do usuário ao conteúdo restrito
    if(!isset($_SESSION['conectado']) OR $_SESSION['conectado'] != true){
    //temos um acesso indevido do usuário. Encerramos a aplicação
    header('Location: ../index.php');
    $_SESSION['acesso_negado'] = true;
    exit();
    }

?>
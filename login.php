<?php

    session_start();
    require_once "./database/conn.php";

    //Função valida email
    function ValidaEmail($email){
        //Verifica se o email NÃO bate no requisitos
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        } else {
            return true;
        }
    }

    if(empty($_POST['email']) and empty($_POST['senha']))
    {
        header('Location: index.php');
        $_SESSION['campo_email'] = true;
        exit();
    }elseif(empty($_POST['senha'])){
        header('Location: index.php');
        $_SESSION['campo_senha'] = true;
        exit();
    }
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $emailCripto = hash("sha512", $email);
        $senhaCripto = hash("sha512", $senha);

        // $email   = trim($conn->escape_string($_POST['email']));
        // $senha   = trim($conn->escape_string($_POST['senha']));

        $sql = "SELECT email, senha FROM usuarios WHERE email = '$email' AND senha = '$senhaCripto'";

        $conn->query($sql);
      
        //testando se a consulta foi bem-sucedida e que valor retornou do banco de dados
        if($conn->affected_rows <= 0)
         {
            header('Location: index.php');
            $_SESSION['nao_autenticado'] = true;
            exit();
         }
      
        //se o PHP chegar até aqui, significa que o login foi bem-sucedido. O que fazemos é criar, novamente, a variável de sessão
        $_SESSION["conectado"] = true;
      
        header("location: ./layout/restrita.php");

?>
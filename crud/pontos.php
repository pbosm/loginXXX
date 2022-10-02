<?php

    session_start(); //abrindo a sessão
    require_once "../database/conn.php"; 

    $id        = $conn->escape_string(trim($_POST['id']));
    $pontos    = $conn->escape_string(trim($_POST['pontos']));

    if(empty($pontos)){
        header('Location: ../layout/lancapontos.php');
        $_SESSION['campo_vazio'] = true;
        exit();
    } else {

        $sql = "UPDATE colaboradores SET `pontos` = $pontos where id = '$id'";
        $conn->query($sql);

        if($conn == true)
        {
            header('Location: ../layout/lancapontos.php');
            $_SESSION['add'] = true;
            exit();
        } else {
            header('Location: ../layout/lancapontos.php');
            $_SESSION['nao_add'] = true;
            exit();
        }

    }



?>
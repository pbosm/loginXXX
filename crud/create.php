<?php

    session_start(); //abrindo a sessão
    require_once "../database/conn.php"; 

    //função para verificar se CPF é valido
    function ValidaCpf($cpf) {
        //Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
                
        //Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }          
        //Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }         
        //Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
                $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
            return true;
    }

    //funcao valida email
    function ValidaEmail($email){
        //Verifica se o email NÃO bate no requisitos
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        } else {
            return true;
        }
    }

    //função para testar a condição de erro para o cadastro. Se o PHP receber do MySQL o valor 1 para a consulta anterior, significa que o MySQL já encontrou, cadastrados, no banco de dados, outro usuário com o mesmo login ou e-mail do usuário atual
    function VerificarEmailCpf($conn, $email, $cpf){
        //indo no bd
        $sqlverifica = "SELECT email, cpf FROM colaboradores WHERE email = '$email' or cpf = '$cpf'";        
        $conn->query($sqlverifica);

        //Se o PHP receber do MySQL o valor 1 para a consulta anterior, significa que o MySQL já encontrou cadastros no banco de dados, 
        if($conn->affected_rows >= 1) {
            header('Location: ../view/viewcreate.php');
            $_SESSION['existe'] = true;
            exit();
        }
    }         

        $nome      = $conn->escape_string(trim($_POST['nome']));
        $email     = $conn->escape_string(trim($_POST['email']));
        $cpf       = $conn->escape_string(trim($_POST['cpf']));
        $data      = $conn->escape_string(trim($_POST['data']));
        
        
        $erros = [];

        if(empty($nome)){
            $erros[] =  header('Location: ../view/viewcreate.php');
            $_SESSION['nome'] = true;
            exit(); 
        }elseif(empty($email)) {
            $erros[] =  header('Location: ../view/viewcreate.php');
            $_SESSION['email'] = true;
            exit();
        }elseif(empty($cpf)) {
            $erros[] =  header('Location: ../view/viewcreate.php');
            $_SESSION['cpf'] = true;
            exit();
        }elseif(empty($data)) {
            $erros[] =  header('Location: ../view/viewcreate.php');
            $_SESSION['data'] = true;
            exit();
        }elseif(ValidaEmail($email) == true){
            $erros[] =  header('Location: ../view/viewcreate.php');
            $_SESSION['valida_email'] = true;
            exit();
        }elseif(VerificarEmailCpf($conn, $email, $cpf)){
            $erros[] = "";
        }elseif(ValidaCpf($cpf) == false) {
            $erros[] =  header('Location: ../view/viewcreate.php');
            $_SESSION['valida_cpf'] = true;
            exit();
        }elseif(strlen($cpf) > 11) {
            $erros[] =  header('Location: ../view/viewcreate.php');
            $_SESSION['cpf_caracter'] = true;
            exit();
        }else {

        //Poderia ter usado PDO() também pra fazer as requisições banco de dados
        $sql = "INSERT colaboradores values (null, '$nome', '$email', '$cpf', '$data', '')";
        $conn->query($sql);

        if($conn == true){
            header('Location: ../view/viewcreate.php');
            $_SESSION['sucesso'] = true;
            exit();
        } else {
            header('Location: ../view/viewcreate.php');
            $_SESSION['sem_sucesso'] = true;
            exit();
        }

        }                         

?>
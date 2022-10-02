<?php   

    require_once "../database/conn.php"; 

    //funcao valida CPF  
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
    
    $id        = $conn->escape_string(trim($_POST['id']));
    $nome      = $conn->escape_string(trim($_POST['nome']));
    $cpf       = $conn->escape_string(trim($_POST['cpf']));
    $email     = $conn->escape_string(trim($_POST['email']));
    $data      = $conn->escape_string(trim($_POST['data']));

    $erros = [];

    if(empty($nome)){
        $erros[] =  "Campo Nome vazio";
    }elseif(empty($email)) {
        $erros[] =  "Campo E-mail vazio";
    }elseif(empty($cpf)) {
        $erros[] =  "Campo CPF vazio";
    }elseif(empty($data)) {
        $erros[] =  "Campo Data vazio";
    }elseif(ValidaEmail($email) == true){
        $erros[] =  "E-mail inválido";
    }elseif(ValidaCpf($cpf) == false) {
        $erros[] =  "CPF inválido";
    }elseif(strlen($cpf) > 11) {
        $erros[] =  "Favor preencher sem caracteres";
    }

    if(!empty($erros)) {
        foreach ($erros as $erro) {
            echo "<h2>$erro </h2>
            <a href='../layout/colaboradores.php'>Voltar</a>";
        }
    } else {
    
        //Poderia ter usado PDO() também pra fazer as requisições banco de dados

        $sql = "UPDATE colaboradores SET `nome` = '$nome', `email` = '$email', `cpf` = '$cpf', `data` = '$data' where id = '$id'";
        $conn->query($sql);

        if($conn == true)
        {
            header('Location: ../layout/colaboradores.php');
            exit();
        } else {
            header('Location: ../layout/colaboradores.php');
            exit();
        }
    
    
    }

?>
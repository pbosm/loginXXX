<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>XXX - Cadastro</title>
</head>
<body>

<form action="./crud/cadastrar.php" method="post">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mt-md-4 pb-2">
                    <?php
                        if(isset($_SESSION['nome'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: Campo nome vazio</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['nome']);
                    ?>
                    <?php
                        if(isset($_SESSION['email'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: Campo E-mail vazio</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['email']);
                    ?>
                    <?php
                        if(isset($_SESSION['senha'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: Campo senha vazio</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['senha']);
                    ?>
                    <?php
                        if(isset($_SESSION['cpf'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: Campo CPF vazio</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['cpf']);
                    ?>
                    <?php
                        if(isset($_SESSION['cpf_caracter'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: Por favor inserir CPF sem caracter</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['cpf_caracter']);
                    ?>
                    <?php
                        if(isset($_SESSION['valida_email'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: E-mail incorreto</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['valida_email']);
                    ?>
                    <?php
                        if(isset($_SESSION['valida_cpf'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: CPF incorreto</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['valida_cpf']);
                    ?>
                    <?php
                        if(isset($_SESSION['existe'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: E-mail e CPF já cadastrados</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['existe']);
                    ?>
                    <?php
                        if(isset($_SESSION['sucesso'])):
                        ?>
                        <div class="notification" style="background: green;">
                        <p>Cadastrado com sucesso!</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['sucesso']);
                    ?>
                    <?php
                        if(isset($_SESSION['sem_sucesso'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p>ERRO: Não foi possível cadastrar usuário!</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['sem_sucesso']);
                    ?>
                    <h2 class="fw-bold mb-2">Faça seu cadastro!</h2><br>
                    <div class="form-outline form-white mb-4">
                        <input type="text" name="nome" class="form-control form-control-lg" placeholder="Nome"/>
                    </div>
                    <div class="form-outline form-white mb-4">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email"/>
                    </div>
                    <div class="form-outline form-white mb-4">
                        <input type="password" name="senha" class="form-control form-control-lg" placeholder="Senha"/>
                    </div>
                    <div class="form-outline form-white mb-4">
                        <input type="text" name="cpf" class="form-control form-control-lg" placeholder="CPF sem caracteres"/>
                    </div>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Cadastrar</button>
                    </div>
                    <div>
                    <p class="mt-5">Ir para página de login! <a href="./index.php" class="text-white-50 fw-bold">Login</a></p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
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
    <title>XXX - Login</title>
</head>
<body>

<form action="login.php" method="POST">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-3">
                <h2 class="fw-bold mb-2">Login</h2><br>
                    <?php
                    if(isset($_SESSION['acesso_negado'])):
                    ?>
                    <div class="notification" style="background: red;">
                    <p>ERRO: Informe seu Login</p>
                    </div>
                    <?php                
                    endif;
                    unset($_SESSION['acesso_negado']);
                    ?>
                    <?php
                    if(isset($_SESSION['campo_email'])):
                    ?>
                    <div class="notification" style="background: red;">
                    <p>ERRO: Campo e-mail vazio, favor preencher</p>
                    </div>
                    <?php                
                    endif;
                    unset($_SESSION['campo_email']);
                    ?>
                    <?php
                    if(isset($_SESSION['campo_senha'])):
                    ?>
                    <div class="notification" style="background: red;">
                    <p>ERRO: Campo senha vazio, favor preencher</p>
                    </div>
                    <?php                
                    endif;
                    unset($_SESSION['campo_senha']);
                    ?>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification" style="background: red;">
                    <p>ERRO: E-mail ou senha inválidas</p>
                    </div>
                    <?php                
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="form-outline form-white mb-4">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Email"/>
                    </div>
                    <div class="form-outline form-white mb-4">
                        <input type="password" name="senha" class="form-control form-control-lg" placeholder="Senha"/>
                    </div>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                </div>
                <div>
                    <p class="mb-0">Faça o cadastro aqui! <a href="cadastro.php" class="text-white-50 fw-bold">Inscreva-se</a></p>
                </div>

                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</form>

</body>
</html>
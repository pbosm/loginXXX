<?php
require_once "../database/conn.php";
require_once "../layout/verifica-acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title> Projeto – XXX</title>
<link rel="stylesheet" type="text/css" href="../css/styleview.css">
</head>
<body>
    <div class="container">
        <div class="navigantion">
            <ul>
                <li>
                    <a href="">
                        <span class=""><img src=""></span>
                        <span class="title">Projeto – XXX</span>
                    </a>
                </li>
                <li>
                    <a href="../layout/restrita.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="../layout/colaboradores.php">
                        <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                        <span class="title">Cadastro de colaboradores</span>
                    </a>
                </li>
                <li>
                    <a href="../layout/lancapontos.php">
                        <span class="icon"><ion-icon name="cart-outline"></ion-icon></ion-icon></span>
                        <span class="title">Lançamento de pontos</span>
                    </a>
                </li>
                <li>
                    <a href="../layout/relatorio.php">
                        <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                        <span class="title">Relatório</span>
                    </a>
                </li>
                <li>
                    <a href="../layout/logout.php">
                        <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                        <span class="title">Sair</span>
                    </a>
                </li>
            </ul>
        </div>
    </div> 
         
         <!-- main -->
         <div class="main">
             <div class="topbar">
                 <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                 </div>
                 <!-- search-->
                 <div class="search">
                    <label>
                        <form class="form-inline" action="../busca/buscausuario.php" method="POST">
                            <input type="text" placeholder="Pesquisar usuários" name="pesquisar">
                            <ion-icon name="search-outline"></ion-icon>           
                        </form>                                               
                    </label>
                 </div>
             </div>

             <!-- cards -->
             <div class="cardBox">
                 <div class="card">
                     <div>
                         <div class="numbers"><?php $sql = "SELECT count(id) from usuarios";
                         $resultado = $conn->query($sql); 
                         $registro = mysqli_fetch_assoc($resultado); 
                         echo $registro['count(id)'];?></div>
                         <div class="cardName">Usuários</div>
                     </div>
                     <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                     </div>
                 </div>
                 <div class="card">
                    <div>
                        <div class="numbers"><?php $sql = "SELECT count(id) from colaboradores";
                         $resultado = $conn->query($sql); 
                         $registro = mysqli_fetch_assoc($resultado); 
                         echo $registro['count(id)'];?></div>
                        <div class="cardName">Colaboradores</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="person-add-outline"></ion-icon>
                    </div>
                </div>
             </div>
             <div class="details">
                 <div class="recentOrders">
                     <div class="cardHeader">
                         <h2>Criando um novo colaborador</h2>
                     </div>
                        <?php
                        if(isset($_SESSION['nome'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: Campo nome vazio</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['nome']);
                        ?>
                        <?php
                        if(isset($_SESSION['email'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: Campo E-mail vazio</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['email']);
                        ?>
                        <?php
                        if(isset($_SESSION['cpf'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: Campo CPF vazio</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['cpf']);
                        ?>
                        <?php
                        if(isset($_SESSION['data'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: Campo data vazio</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['data']);
                        ?>
                        <?php
                        if(isset($_SESSION['cpf_caracter'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: Por favor inserir CPF sem caracter</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['cpf_caracter']);
                        ?>
                        <?php
                        if(isset($_SESSION['valida_email'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: E-mail incorreto</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['valida_email']);
                        ?>
                        <?php
                        if(isset($_SESSION['valida_cpf'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: CPF incorreto</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['valida_cpf']);
                        ?>
                        <?php
                        if(isset($_SESSION['existe'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: E-mail e CPF já cadastrados</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['existe']);
                        ?>
                        <?php
                        if(isset($_SESSION['sucesso'])):
                        ?>
                        <div class="notification" style="background: green;">
                        <p style="margin-bottom: 50px;">Cadastrado com sucesso!</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['sucesso']);
                        ?>
                        <?php
                        if(isset($_SESSION['sem_sucesso'])):
                        ?>
                        <div class="notification" style="background: red;">
                        <p style="margin-bottom: 50px;">ERRO: Não foi possível cadastrar usuário!</p>
                        </div>
                        <?php                
                        endif;
                        unset($_SESSION['sem_sucesso']);
                        ?>                        
                        <form action="../crud/create.php" method="POST">

                        <input type="text" name="nome" placeholder="Digite seu nome"> <br> <br>

                        <input type="email" name="email" placeholder="Digite seu email"> <br> <br>
                        
                        <input type="text" name="cpf" placeholder="Digite seu cpf"> <br> <br>                   
                        
                        <input type="date" name="data" placeholder="Data emissão"> <br> <br>
                        
                        <button type="submit" class="btn btn-success" style='position: relative;padding:5px 50px;left: 25%;background: var(--green);text-decoration: none;color: var(--white);border-radius: 6px;'>Criar</button>

                        </form>
                 </div>
         </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //add menutoggle
        let toggle = document.querySelector('.toggle');
        let navigantion = document.querySelector('.navigantion');
        let main = document.querySelector('.main');

        toggle.onclick = function()
        {
            navigantion.classList.toggle('active');
            main.classList.toggle('active');            
        }

        //add hovered valss in selected list item
        let list = document.querySelectorAll('.navigantion li');
        function activeLink()
        {
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activeLink));
    </script>

</body>
</html>
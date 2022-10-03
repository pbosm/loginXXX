<?php
require_once "../database/conn.php";
require_once "../layout/verifica-acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title> Projeto – XXX</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
                        <form class="form-inline" action="../busca/buscausuario.php?id=$id&nome=$nome'" method="POST">
                            <input type="text" placeholder="Pesquisar usuários" name="pesquisar"> 
                            <ion-icon name="search-outline"></ion-icon>          
                        </form>                                               
                    </label>
                 </div>
             </div>

             <!-- order details list -->
             <div class="details">
                 <div class="recentOrders">
                     <div class="cardHeader">
                         <h2>Usuários cadastrados</h2>
                         <!-- <a href="#" class="btn">Ver todos</a> -->
                     </div>
                     <table>
                         <thead>
                             <tr>
                                <td>Nome</td> 
                                <td>E-mail</td>
                                <td>CPF</td>
                             </tr>                            
                         </thead>
                         <tbody>
                       <tr>
                            <?php
                                $pesquisar = $_POST['pesquisar'];

                                $sql = "SELECT * FROM usuarios where nome like '%$pesquisar%'";
                                $resultado = $conn->query($sql);
 
                                while ($registro = $resultado->fetch_array())
                                {                                                                  
                                    $id     =  $registro[0];
                                    $nome   =  $registro[1];
                                    $email  =  $registro[2];
                                    $cpf    =  $registro[4];                                                              
                                     

                                    $id        = htmlentities($id, ENT_QUOTES, "UTF-8");
                                    $nome      = htmlentities($nome, ENT_QUOTES, "UTF-8");
                                    $email     = htmlentities($email, ENT_QUOTES, "UTF-8");
                                    $cpf       = htmlentities($cpf, ENT_QUOTES, "UTF-8");

                                   
                                    echo "<tr>
                                    <td> $nome</td>
                                    <td> $email</td>
                                    <td> $cpf</td>
                                    </td>";
                                }
                            ?>
                        </tr>            
                    </tbody>                     
                    </table>
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

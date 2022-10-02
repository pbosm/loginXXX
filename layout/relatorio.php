<?php
require_once "../database/conn.php";
require_once "verifica-acesso.php";
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
                    <a href="#">
                        <span class=""><img src=""></span>
                        <span class="title">Projeto – XXX</span>
                    </a>
                </li>
                <li>
                    <a href="restrita.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="colaboradores.php">
                        <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                        <span class="title">Cadastro de colaboradores</span>
                    </a>
                </li>
                <li>
                    <a href="lancapontos.php">
                        <span class="icon"><ion-icon name="cart-outline"></span>
                        <span class="title">Lançamento de pontos</span>
                    </a>
                </li>
                <li>
                    <a href="relatorio.php">
                        <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                        <span class="title">Relatório</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
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
                 <!-- userimg-->
                 <div class="user">
                    <img src="">
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

             <!-- order details list -->
             <div class="details">
                 <div class="recentOrders">
                     <div class="cardHeader">
                         <h2>Colaboradores</h2>
                         <form method="get">
                         <select name="filtro" id="" style="margin-left: 555px;margin-top: 5px;">
                            <option value="nome">Filtar por Nome</option>
                            <option value="data">Filtar por Data</option>
                         </select>
                         <button type="submit" style='position: relative;padding: 5px 10px;background: var(--green);text-decoration: none;color: var(--white);border-radius: 6px;'>Filtrar</button>
                         </form>
                     </div>
                     <table>
                         <thead>
                             <tr>
                                <td>Nome</td>  
                                <td>E-mail</td>                                
                                <td>CPF</td>
                                <td>Data</td>
                             </tr>                            
                         </thead>
                         <tbody>
                       <tr>
                        <?php
                            $filtro = filter_input(INPUT_GET, 'filtro', FILTER_SANITIZE_STRING);

                            if($filtro == 'nome') {
                                $sql = "SELECT * FROM colaboradores ORDER BY colaboradores.nome ASC";
                                $resultado = $conn->query($sql);

                                while ($registro = $resultado->fetch_array())
                                {                                                                  
                                    $id     =  $registro[0];
                                    $nome   =  $registro[1];
                                    $email  =  $registro[2];
                                    $cpf    =  $registro[3];
                                    $data   =  $registro[4];

                                    $id        = htmlentities($id, ENT_QUOTES, "UTF-8");
                                    $nome      = htmlentities($nome, ENT_QUOTES, "UTF-8");
                                    $email     = htmlentities($email, ENT_QUOTES, "UTF-8");
                                    $cpf       = htmlentities($cpf, ENT_QUOTES, "UTF-8");
                                                                    
                                    echo "<tr>
                                    <td> $nome</td>
                                    <td> $email</td>
                                    <td> $cpf</td>
                                    <td> $data</td>
                                    </td>";
                                }
                            }elseif($filtro == 'data'){
                                $sql = "SELECT * FROM colaboradores ORDER BY colaboradores.data ASC";
                                $resultado = $conn->query($sql);
    
                                while ($registro = $resultado->fetch_array())
                                {                                                                  
                                    $id     =  $registro[0];
                                    $nome   =  $registro[1];
                                    $email  =  $registro[2];
                                    $cpf    =  $registro[3];
                                    $data   =  $registro[4];
    
                                    $id        = htmlentities($id, ENT_QUOTES, "UTF-8");
                                    $nome      = htmlentities($nome, ENT_QUOTES, "UTF-8");
                                    $email     = htmlentities($email, ENT_QUOTES, "UTF-8");
                                    $cpf       = htmlentities($cpf, ENT_QUOTES, "UTF-8");
                                    $data      = htmlentities($data, ENT_QUOTES, "UTF-8");
                                                                    
                                    echo "<tr>
                                    <td> $nome</td>
                                    <td> $email</td>
                                    <td> $cpf</td>
                                    <td> $data</td>
                                    </td>";
                                }
                            }else {
                                $sql = "SELECT * FROM colaboradores";
                                $resultado = $conn->query($sql);

                                while ($registro = $resultado->fetch_array())
                                {                                                                  
                                    $id     =  $registro[0];
                                    $nome   =  $registro[1];
                                    $email  =  $registro[2];
                                    $cpf    =  $registro[4];  
                                    $data   =  $registro[4];                                                            

                                    $id        = htmlentities($id, ENT_QUOTES, "UTF-8");
                                    $nome      = htmlentities($nome, ENT_QUOTES, "UTF-8");
                                    $email     = htmlentities($email, ENT_QUOTES, "UTF-8");
                                    $cpf       = htmlentities($cpf, ENT_QUOTES, "UTF-8");
                                    $data      = htmlentities($data, ENT_QUOTES, "UTF-8");
                                    
                                    echo "<tr>
                                    <td> $nome</td>
                                    <td> $email</td>
                                    <td> $cpf</td>
                                    <td> $data</td>
                                    </td>";
                                }
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
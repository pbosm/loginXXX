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
                        <span id="title" class="title">Projeto – XXX</span>
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
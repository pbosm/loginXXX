<?php
require_once "../database/conn.php";
require_once "../layout/verifica-acesso.php";
require_once "../header/navbarview.php";
?>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        //add menutoggle
        let toggle = document.querySelector('.toggle');
        let navigantion = document.querySelector('.navigantion');
        let main = document.querySelector('.main');

        toggle.onclick = function()
        {
            navigantion.classList.toggle('active');
            main.classList.toggle('active');
            $('#title').hide();
            if (!navigantion.classList.toggle('.main')){
                $('#title').show();
            }              
        }

        // //add hovered valss in selected list item
        // let list = document.querySelectorAll('.navigantion li');
        // function activeLink()
        // {
        //     list.forEach((item) =>
        //     item.classList.remove('hovered'));
        //     this.classList.add('hovered');
        // }
        // list.forEach((item) =>
        // item.addEventListener('mouseover',activeLink));
    </script>

</body>
</html>
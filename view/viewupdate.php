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
                <?php

                $id   = $_GET['id'];

                $sql = "SELECT * FROM colaboradores WHERE id = $id";
                $resultado = $conn->query($sql);

                $registro = mysqli_fetch_assoc($resultado);
                ?>
             <div class="details">
                 <div class="recentOrders">
                     <div class="cardHeader">
                         <h2>Editando o colaborador <?php echo $registro['nome']?></h2>
                     </div>
                      
                        <form action="../crud/update.php" method="POST">

                        <input type="hidden" name="id" value="<?php echo $registro['id'];?>"> <br> <br>

                        <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $registro['nome'];?>"> <br> <br>

                        <input type="email" name="email" placeholder="Digite seu email" value="<?php echo $registro['email'];?>"> <br> <br>
                        
                        <input type="text" name="cpf" placeholder="Digite seu cpf" value="<?php echo $registro['cpf'];?>"> <br> <br>                   
                        
                        <input type="date" name="data" placeholder="Data emissão" value="<?php echo $registro['data'];?>"> <br> <br>

                        <button type="submit" class="btn btn-success" style='position: relative;padding:5px 50px;left: 25%;background: var(--green);text-decoration: none;color: var(--white);border-radius: 6px;'>Editar</button>

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
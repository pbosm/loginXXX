<?php
require_once "../database/conn.php";
require_once "verifica-acesso.php";
require_once "../header/navbar.php";
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

             <!-- order details list -->
             <div class="details">
                 <div class="recentOrders">
                     <div class="cardHeader">
                         <h2>Usuários</h2>
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
                            $sql = "SELECT * FROM usuarios";
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
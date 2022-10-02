<?php

$host    = "localhost";
$user    = "root";
$passw   = "";
$bd      = "bdteste";

if($conn = mysqli_connect($host, $user, $passw, $bd)){
    // echo "Conectado!!!!";
} else {
    echo "Não foi possivel conectar ao banco de dados!!!";
}

$conn->select_db($bd);

?>
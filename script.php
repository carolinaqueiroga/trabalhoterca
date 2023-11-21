<?php

$conexao = mysqli_connect("localhost", "root", "", "foodTruck");

if ($conexao) {
    echo "Conectado";
} else {
    echo "Desconectado";
}

?>
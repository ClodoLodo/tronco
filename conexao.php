<?php
$localhost = "localhost";
$usuario = "root";
$senha = "";
$bd = "medidas";

$conexao = mysqli_connect($localhost,$usuario,$senha,$bd);

if ($conexao) {
    echo "eba";
}



?>
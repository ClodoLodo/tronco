<?php
function conectar(){
$localhost = "localhost";
$usuario = "root";
$senha = "";
$bd = "medidas";
$conexao = mysqli_connect($localhost,$usuario,$senha,$bd);
if ($conexao) {
    return $conexao;
} else {
    echo "erro ao conectar a base dedos" .
        mysqli_connect_error();
    die();
}

}

?>
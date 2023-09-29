<?php
$id = $_GET['id'];
require_once "conexao.php";
$conexao = conectar();
$sql = "DELETE * FROM medidas WHERE id = $id";
$resultado = mysqli_query($conexao,$sql);
if($resultado == true){
    echo "usuario excluido com sucesso";
}else{
echo "não foi possivel exlcuir o usuario";
echo mysqli_errno($conexao) . ":";
echo mysqli_error($conexao);
}



?>
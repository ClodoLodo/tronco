<?php
$id = $_POST['id'];
$largura = $_POST['largura'];
$espessura = $_POST['espessura'];
$cor = $_POST['cor'];

if ($id ==""){ //criando usuario novo
    $sql = "INSERT INTO  medidas(largura,espessura,cor) 
            values('$largura','$espessura','$cor')";

 }else { // alterando um usuario
    $sql = "UPDATE medidas set largura='$largura',
                                    espessura='$espessura',cor='$cor'
                                    where id = $id";   
 }

require_once "conexao.php";
$conexao = conectar();
$resultado =  mysqli_query($conexao,$sql);
if($resultado){
    echo "usuario salvo com sucesso";
} else {
    echo "erro ao salvar um usuario" . 
    mysqli_errno($conexao) . ": " .
    mysqli_errno($conexao);
}



<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$medida = null;
if (isset($_GET['id'])== true){


$id = $_GET['id'];
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * FROM medidas WHERE id=$id";
$resultado = mysqli_query($conexao,$sql);
$medida = mysqli_fetch_assoc($resultado);
}
//var_dump($medida);die;

?>
<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de medida</title>
</head>
<body>

    <form action="salvar-medida.php" method="POST">

            <input type="hidden"  name = "id" value="<?=($medida == null) ? '' : $medida['id'] ?>">
            <label>largura:<input type="text" name="largura" value ="<?= ($medida == null)?'': $medida['largura']?>"></label><br>
            <label>espessura:<input type="text" name="espessura" value="<?=($medida== null)? '' : $medida['espessura']?>"></label><br>
            <label>cor:<input type="text" name="cor" value="<?=($medida==null)? '': $medida['cor']?>"></label><br>
            <input type="submit" value="salvar medida">
    </form>
    
    
</body>
</html>
    
</body>
</html>
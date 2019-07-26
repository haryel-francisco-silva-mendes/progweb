<?php
    // Importar a classe
    require_once 'Produto.class.php';

    //class
    $id             = 1;
    $nome           = "figure action";
    $descricao      = "estatuetas";
    $sku            = 1666;
    $ean            = 4859130452354;
    $voluntario     = 300.00;
    $id_categoria   = 6;
    // Instânciando o objeto a partir da clase
    $produto    = new Produto($id,$nome,$descricao,$sku,$ean,$voluntario,$id_categoria);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>etiqueta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="get">
        <label for="produto"> faça a leitura do produto</label>
        <input type="text" name="produto" autofocus>
    </form>
    <?php
        if(isset($_GET["produto"])){
            echo "o produto selecionado é <br>";
            echo $produto->getNome();
        }
    ?>
</body>
</html>
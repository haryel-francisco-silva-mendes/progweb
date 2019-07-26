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
<html lang="pt-br">
    <main>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>etiqueta_do_produto</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <section id="descricao">
                <span>Nome</span>
                <p> <?php echo $produto->getNome(); ?> </p>
                
                <span>Descrição</span>
                <p> <?php echo $produto->getDescricao();?> </p>

                <span>Sku</span>
                <p> <?php echo $produto->getSku();?> </p>

                <span>Valor unitario</span>
                <p> <?php echo $produto->getValorunitario();?> </p>
            </section>
            <section id="barcode">
                <img src="barcode.php?produto=<?php echo $produto->getEan();?>" alt="<?php echo $produto->getNome(); ?>">
            </section>
        </body>
    </main>
</html>
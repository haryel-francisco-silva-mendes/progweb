<?php
// Importar a classe
require_once 'Produto.class.php';

$id = 1;
$nome = "João Ricardo";
$descricao = "Hub de tecnologias para automação residencial";
$sku = 2456;
$ean = 7899993905093;
$valorunitario = 245.90;
$id_categoria = 2;

// Instânciando o objeto a partir da clase
$produto = new Produto($id,$nome,$descricao,$sku,$ean,$valorunitario,$id_categoria);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etiqueta do produto</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <main>
        <section id="descricao">
            <span>Nome</span>
            <p><?php echo $produto->getNome(); ?></p>
            <span>Descrição</span>
            <p><?php echo $produto->getDescricao(); ?></p>
            <span>SKU</span>
            <p><?php echo $produto->getSku(); ?></p>
            <span>Valor Unitário</span>
            <p><?php echo 'R$' . number_format($produto->getValorunitario(), 2, ',', '.');  ?></p>
        </section>
        <section id="barcode">
            <img src="Barcode.php?produto=<?php echo $produto->getEan(); ?>" 
                 alt="<?php echo $produto->getNome(); ?>">
        </section>
    </main>
</body>
</html>
<?php
    $iten               = 0;
    $soma               = 0;
    $quantidadeiten     = 0;

    $carrinho= array(
        array("produto"=>"banana","valor"=>7.56,"quantidade"=>1),
        array("produto"=>"contra file","valor"=>12.49,"quantidade"=>1),
        array("produto"=>"maca","valor"=>6.78,"quantidade"=>1),
        array("produto"=>"bolacha","valor"=>2.14,"quantidade"=>4),
        array("produto"=>"arroz","valor"=>11.75,"quantidade"=>3),
        array("produto"=>"macarrao","valor"=>11.75,"quantidade"=>3),
        array("produto"=>"papel higienico","valor"=>5.75,"quantidade"=>16),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div id="resultado">
        <table border=1>
            <tr>
                <th>Produtos</th>
                <th>valor unitario</th>
                <th>quantia</th>
                <th>sub total</th>
            </tr>

            <?php
                
                do{
                    $subtotal = ($carrinho[$iten]["quantidade"]*$carrinho[$iten]["valor"]);

                    ($carrinho[$iten]["quantidade"]>1 ? $cor = "#F00": $cor = "#000");
                    echo "<tr style = color:".$cor">";
                        echo "<td>".$carrinho[$iten]["produto"]."</td>";
                        echo "<td>".$carrinho[$iten]["valor"]."</td>";
                        /*teste*/
                        /**********/
                        echo "<td>".$carrinho[$iten]["quantidade"]."</td>";
                        echo "<td>".($subtotal)."</td>";
                    echo "</tr>";
                    $soma              += $subtotal;
                    $quantidadeiten    += $carrinho[$iten]["quantidade"];
                    $iten++;
                }while($iten<count($carrinho));
                
            ?>
        </table>
        <h1>Total:<?php echo $soma; ?></h1>
        <h3>Quantidade:<?php  echo $quantidadeiten;  ?></h3>
    </div>

</body>
</html>
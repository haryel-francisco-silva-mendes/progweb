<?php
    if(isset($_POST["submit"])){
        $valor    = $_POST["valor"];
        $parcelas = $_POST["parcelas"];
        /*parcelas*/
        if($parcelas ==12){
            $juros = 0.10;
        }elseif($parcelas==24){
            $juros = 0.13;
        }else{
            $juros = 0.15;
        }
        
    }
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

    <div id="formulario">

        <form method="post">

        <label for="valor">valor solicitado</label>
        <input type="text" name="valor" placeholder="informe o valor"><br>
        <label for="parcelas">parcelado em</label>
        <select name="parcelas">
            <option value="12">12 parcelas</option>
            <option value="24">24 parcelas</option>
            <option vlaue="36">36 parcelas</option>
        </select></br>
        <input type="submit" name="submit" value="calcular">
        </form>
    </div>

    <?php
        if(isset($_POST["submit"])){
   
    ?>
        <div id="resultado">
            <h1>o resultado do seu financiamento é de: </h1>
            <h3>valor:<?php echo $valor;?> a ser pago em <?php echo $parcelas;?> parcelas.</h3>
            <?php
                $jurosTotal   = $valor*$juros*$parcelas;
                $montante     = $jurosTotal + $valor;
                $valorparcela = $montante/$parcelas;
            ?>

            <table border="1">
                <tr>
                    <th>parcela</th>
                    <th>valor</th>
                    
                </tr>
                <?php
                    for($i=1;$i<($parcelas+1);$i++){
                ?>
                <tr>
                    <td> <?php echo $i;?>ª parcela </td>
                    <td> <?php echo $valorparcela;?> </td>
                </tr>
                <?php
                    }
                ?>
            </table>

            <h3>valor final:<?php echo $montante;?></h3>

        </div>
    <?php
        }
    ?>
    
</body>
</html>
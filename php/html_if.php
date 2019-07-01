<?php
    if(isset($_POST["submit"])){
        $nome       = $_POST["nome"];
        $nascimento = $_POST["data_de_nascimento"];
        $doador     = $_POST["doador"];
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
        <form action="html_if.php" method="post">
            <label for="nome"></label>
            <input type="text" name="nome" placeholder="insira seu nome"><br>

            <label for="data_de_nascimento"></label>
            <input type="date" name="data_de_nascimento" placeholder="informe sua data de nascimento"><br>

            <label for="doador">Você é um doador?</label>
            <input type="radio" name="doador" value="s">sim 
            <input type="radio" name="doador" value="n">nao </br>
            <input type="submit" name="submit" value="cadastrar">
        </form>
    <?php
        if(isset($_POST["submit"])){
    
    ?>
    <div id="resultado">
        <h3>Obrigado por prencher seu cadastro</h3>
        <h5>confirme seus dados abaixo</h5>
        <p>
            nome:<?php echo $nome; ?><br>
            nascimento:<?php echo date("d/m/y",strtotime($nascimento));?></br>
            <?php
                if($doador=="s"){echo"Você é um doador de orgãos!";}
            ?>
        </p>

    </div>

    <?php
        }
    ?>

</body>
</html>
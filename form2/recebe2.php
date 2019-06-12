<?php
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $cargo = $_POST["cargo"];
    $administrador = $_POST["administrador"];
    
  echo "NOME: ".$nome."<br>";
  echo "Usuario ".$usuario."<br>";
  echo "Senha ".$senha."<br>";
  echo "Cargo ".$cargo."<br>";
  echo "administrador ".$administrador."<br>";

?>
<?php
/*horas*/ 
date_default_timezone_set('America/Sao_Paulo');
$hora = date('H');
echo "teste".$hora;

if($hora <= 12 ){
    $fundo = "dia";
    $frase = "bom dia";
}else{
    if($hora<18){
        $fundo = "tarde";
    
        $frase = "boa tarde";
    }else{
        $fundo = "noite";
        $frase = "Boa noite";
    }
}


if($administrador=="S"){
    $contaAdministrador = ",seja bem vindo administrador";
    $usuario ="admin.png";
}
else{$contaAdministrador = ",seja bem vindo";$usuario ="admin.png";}


?>


<!DOCTYPE html>
<html >
    <head lang="pt-br">
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulários</title>
    </head>
    <body class="<?php echo $fundo?>">
        <p>
            <?php echo $frase ?> <?php echo $contaAdministrador?> <strong><?php echo $nome;?></strong>,voce demonstrou interese no cargo de <strong><?php echo $cargo?> </strong>
        </p>
        <img src="img/<?php echo $fundo?>.png" alt="teste">
        <img src="img/<?php$usuario?>.png" alt="teste2">
    </body>
</html>
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
date_default_timezone_set('America/Sao_Paulo');
$hora = date('H');
echo "teste".$hora;

if($hora <= 12 ){
    $cor_de_fundo = amarelo;
    $frase = "bom dia";
}else{
    $frase = "boa tarde";
}



?>


<!DOCTYPE html>
<html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulários</title>
        </head>
    <body>
        <p>
            <?php echo $frase ?> <strong><?php echo $nome;?></strong>,voce demonstrou interese no cargo de <strong><?php echo $cargo?> </strong>
            
            
    
        </p>
    </body>
</html>
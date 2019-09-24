<form action="ex03.php" method="get">
    <input type="text" name="salario" placeholder="Informe o salário">
    <input type="text" name="financiamento" placeholder="Informe o financiamento pretendido">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_GET["salario"]) and isset($_GET["financiamento"])){

    $salario        = floatval($_GET["salario"]);
    $financiamento  = floatval($_GET["financiamento"]);

    if($financiamento > 0 and $salario > 0){
        if($financiamento<=($salario*5)){
            echo "Financiamento Concedido!<br>";
        }else{
            echo "Financiamento Negado!<br>";
        }
        echo "Obrigado por nos consultar";

    }else{
        echo "O valor informado não é um número válido";
    }

}else{
    echo "Informe o salário e financiamento nos campos acima!";
}

?>
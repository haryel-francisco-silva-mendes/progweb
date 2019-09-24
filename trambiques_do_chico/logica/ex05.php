<form action="ex05.php" method="get">
    <input type="text" required name="nome" placeholder="Informe seu nome">
    <input type="text" required name="salario" placeholder="Informe seu salário">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_GET["nome"]) and isset($_GET["salario"])){

    $nome = $_GET["nome"];
    $salario = $_GET["salario"];

    if($salario<=400){
        echo "Nome: ".$nome." | Aumento: 15% | Sal. Atual: ".$salario." | Sal. Novo: ".($salario+($salario*0.15));
    }elseif($salario>400 and $salario < 701 ){
        echo "Nome: ".$nome." | Aumento: 12% | Sal. Atual: ".$salario." | Sal. Novo: ".($salario+($salario*0.12));
    }elseif($salario>700 and $salario < 1001 ){
        echo "Nome: ".$nome." | Aumento: 10% | Sal. Atual: ".$salario." | Sal. Novo: ".($salario+($salario*0.10));
    }elseif($salario>1000 and $salario < 1801 ){
        echo "Nome: ".$nome." | Aumento: 7% | Sal. Atual: ".$salario." | Sal. Novo: ".($salario+($salario*0.07));
    }elseif($salario>1800 and $salario < 2501 ){
        echo "Nome: ".$nome." | Aumento: 4% | Sal. Atual: ".$salario." | Sal. Novo: ".($salario+($salario*0.04));
    }else{
        echo "Nome: ".$nome." | Aumento: 0% | Sal. Atual: ".$salario." | Sal. Novo: ".$salario;
    }

}else{
    echo "Informe o nome e o salário nos campos acima!";
}
?>
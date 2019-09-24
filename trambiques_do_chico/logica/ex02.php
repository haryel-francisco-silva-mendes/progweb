<form action="ex02.php" method="get">
    <input type="text" name="numero" placeholder="Informe um número inteiro">
</form>

<?php

if(isset($_GET["numero"])){

    $numero = floor($_GET["numero"]);

    if($numero>=0){
        //Positivo
        if(($numero%2)==0){
            echo "O número ".$numero." é postivo e PAR";
        }else{
            echo "O número ".$numero." é positivo e ÍMPAR";
        }
    }else{
        //Negativos
        echo "Este número NÃO é positivo!";
    }
}else{
    echo "Informe um número no campo acima!";
}

?>
<form action="ex06.php" method="get">
    <input type="text" required name="valori" placeholder="Informe I"><br>
    <input type="text" required name="valora" placeholder="Informe A"><br>
    <input type="text" required name="valorb" placeholder="Informe B"><br>
    <input type="text" required name="valorc" placeholder="Informe C">
    <input type="submit" value="Calcular">
</form>

<?php
if(isset($_GET["valori"]) and isset($_GET["valora"]) and isset($_GET["valorb"]) and isset($_GET["valorc"])){

    $vi = $_GET["valori"];
    $va = $_GET["valora"];
    $vb = $_GET["valorb"];
    $vc = $_GET["valorc"];

    $maior=$va;
    $menor=$va;
    $meio=$va;
  
    if($vb>$maior){
        $maior=$vb;
    }else{
        $menor=$vb;
    }

    if($vc>$maior){
        $meio=$maior;
        $maior=$vc;
    }elseif($vc>$menor){
        $meio=$vc;
    }else{
        $meio=$menor;
        $menor=$vc;
    }

    echo "Maior: ".$maior."<br>";
    echo "Menor: ".$menor."<br>";
    echo "Meio: ".$meio."<br>";

/*
    if($vi==1){

    }elseif($vi==2){

    }elseif($vi==3){

    }else{
        echo "O valor I está fora do intervalo permitido";
    }
    */

}else{
    echo "Informe os campos acima!";
}
?>
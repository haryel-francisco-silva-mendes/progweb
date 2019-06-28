<?php
    $fruta="banana";
    $total=0;
    $valor=0;

    switch($fruta){

        case"maca":$valor+=3;$total+=$valor;
        break;
        case"banana":$valor+=5;$total+=$valor;
        break;
        case"morango":$valor+=7;$total+=$valor;
        break;
        default:$valor+=1;
    }
    echo$fruta;
    echo"<br>";
    echo"total: ".$valor."R$"
?>
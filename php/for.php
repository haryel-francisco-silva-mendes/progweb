<?php
/*$x++; é igual a $x=$x+1;
  $x+=2; é igual a $x=$x+2;
  $x+=3; é igual a $x=$x+3;
*/
    $numero=6;
    for($i=0;$i<11;$i++){

        $resultado=$numero * $i;
        echo"<br>";
        echo$i."x".$numero."=".$resultado;
    }

?>
<form action="notaAluno.php" method="get">
    <input type="text" name="nota" id="nota" placeholder="digite usa nota">
</form>

<?php
    if(isset($_GET["nota"])){
        $nota=intval($_GET["nota"]);
        if($nota >0){
            if($nota<4){
                echo "E";
            }elseif($nota<6 && $nota>=4){
                echo"D";
            }elseif($nota <7 && $nota>=4){
                echo"C";
            }elseif($nota<9 && $nota>=7){
                echo"B";
            }else{
                echo"A";
            }
        }else{echo "o valor informado nao é valido,certifique-se se digitou corretamente.";}
    }else{echo"informe sua nota";}

?>
<form action="salarioTabajara.php" method="post">
<sapn>R$</span><input type="text" name="salarioAtual" placeholder="salario">
    
</form>
<?php
    if(isset($_POST["salarioAtual"])){
        $novoSalario=floatval($_POST["salarioAtual"]);
        $cemPorCento = (int)100;
        $salarioAteQuatrocentos = $salarioAtual+($salarioAtual*0,15);
        $salarioAteSetecentos = $salarioAtual+($salarioAtual*0,12);
        $salarioAteMil = $salarioAtual+($salarioAtual*0,10);
        $salarioAteMiloitocentos = $salarioAtual+($salarioAtual*0,07);
        $salarioAteDoismilquinhentos = $salarioAtual+($salarioAtual*0,04);
        $semBonificacao = $salarioAtual;

        if($novoSalario>0){
            if($novoSalario<=400){
                $novoSalario=$salarioAteQuatrocentos;
                /*PAREI AQUI, FALTA TERMINAR AS CONDICOES PARA OU OUTROS SALARIOS*/ 
            }elseif($novoSalario>400 && $novoSalario<=700){
                $novoSalario=$salarioAteSetecentos;

            }elseif($novoSalario>700 && $novoSalario<=1000){
                $novoSalario =$salarioAteMil;

            }elseif($novoSalario>700 && $novoSalario<=1800){
                $novoSalario=$salarioAteMiloitocentos;
            }
        }else{echo"Valor digitado é invalido";}
    }else{echo"digite seu salario";}
?>
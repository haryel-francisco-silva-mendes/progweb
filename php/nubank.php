<?php
    $ponto = 50;
    if(isset($_POST["submit"])){

        $ponto         =   $_POST["pontos"];
        $recompensa     =   "";

        if($ponto>=50 && $ponto<=100){
            
            $recompensa     =   "Desconto em produtos financeiros";
            
        }elseif($ponto >= 101 && $ponto <= 400){
            
            $recompensa     =   "Milhas em dobro para sua viagem";
        }elseif($ponto >= 401 && $ponto <= 700){
            
            $recompensa    =   "Pontos em dobro para compra em dólar.";
        }else{
            
            $recompensa     =   "cinco vezes mais na compra de dólar";
        }
    }
?>


<!doctype html>
<html>
    <head>
        <title>nubank_aula</title>
        <!--script-->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("[type=range]").change(function(){
                    var novovalor=$(this).val();
                    $("#intervalo").text(novovalor);
                });
            });
        </script>
        <!--fim script-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=width-device, scale=1.0 ">
     
    </head>
    <style>
        main{width:800px; margin:0 auto;}
        .formulario{border:1px solid gray;width:400px;}
    </style>
    <body>
        <main>
            <div class="formulario">
                <form action="" method="post">
                    <label for="pontos">Informe seus pontos:</label><br>

                    <input type="range" value="<?php echo (isset($_POST["submit"])) ? $ponto:"50" ?>" min="50" max="1000" name="pontos">
                    <span id="intervalo"><?php echo $ponto?></span><br>
                    <input type="submit" name="submit" value="simular"> 
                </form>
            </div>

            <?php
                if(isset($_POST["submit"])){//ABERTO
            ?>
                <div class="resultado">
                    <h1>Sua recompensa é <?php echo $ponto?> pontos </h1>
                    <?php

                        echo $recompensa;
                    ?>
                </div>
            <?php
                } //FECHADO
            ?>
        </main>
    </body>
</html>
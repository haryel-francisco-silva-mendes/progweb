
<?php

    if(isset($_GET["enviar"])){
        $palavra =strrev($_GET["nomeCompleto"]);
        $tamanho = strlen($palavra);
        $resultado = "" ;

        for($i=0;$i < $tamanho;$i++){
            $resultado .= "<br>".substr($palavra,0,$i+1);
        }
    }else
        $resultado = "nome nao disponivel";
    

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>revisao_php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    <body>
        <main>
            <header>
               <h1 class="title">Topo</h1>
            </header>
            <section>
                <div>
                    <p>
                        Utilize o formulario abaixo para gerar o resultado:
                    </p>
                    <form action="revisao.php" method="get">
                        <label for="nomeCompleto"></label>
                        <input type="text" name="nomeCompleto" placeholder="insira seu nome">

                        <input type="submit" name="enviar" value"gerar">
                    </form>
                    <div id= "ateresultado"> 
                        <?php
                            echo $resultado;
                        ?>
                    </div>
</div>
            </section>
            <footer>
                rodapé
            </footer>
        </main>
    </body>
</html>
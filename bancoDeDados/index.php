<?php
                    //verificar o envio do formulario
                        
                        if(isset($_GET["enviar"])){
                            //recebendo os potes.
                            $txtNome = $_GET["txt-nome"];
                            $txtCurso = $_GET["txt-curso"];
                            $txtCargaHorariaDiaria = floatval($_GET["txt-carga-horaria-diaria"]);
                            $txtCargaHoraria = floatval($_GET["txt-carga-horaria"]);
                            $txtFrequenciaObrigatoria = floatval($_GET["txt-frequencia-obrigatoria"]);
                    
                            //impedir o uso de caracteres
                            if($txtCargaHoraria>0 && $txtCargaHorariaDiaria>0 && $txtFrequenciaObrigatoria>0){
                            //criar novas variaveis para guardar os resultados obtidos a partir das informações
                            $diasTotaisDoCurso=$txtCargaHoraria/$txtCargaHorariaDiaria;
                            $quantidadeDeFaltas=$diasTotaisDoCurso*((100-$txtFrequenciaObrigatoria)/100);

                            //criar nova variavel para guardar o resultado (frase) que sera exibida
                            $frase = "Ola ".$txtNome." bem-vindis ao curso ".$txtCurso.", a carga horaria total deste curso ";
                            $frase .="é de ".$txtCargaHoraria." horas. A carga horaria por dia é de " .$txtCargaHorariaDiaria. " horas, o que";
                            $frase .="equivale a ".$diasTotaisDoCurso." dias de cursos no total. A frequência obrigatoria";
                            $frase .="é de ".$txtFrequenciaObrigatoria. ", ou seja, você poderá faltar no total ".$quantidadeDeFaltas." dias.";
                            
                            }else{$frase=" valores invalidos, ou campos nao prenchidos";}
                        }else{
                            $frase =" informe os dados no formulario acima";
                        }
                    ?>

<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content=ie=edge>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <main>
            <?php
                include('views/header.php')
            ?>
            <section id="conteudo">
                <div class="container">
                    <h1>Cálculo de freqência</h1>

                    <form action="#" name="formulario" id="formulario" method="GET">
                        <label for="">Nome completo</label>
                        <input type="text" name="txt-nome" id="txt-nome" size="100px" placeholder="digite o nome completo">

                        <label for="">Nome do curso </label>
                        <input type="text" name="txt-curso" id="txt-curso" size="60px">

                         <label for="" method="get">Carga horária diária</label>
                        <input type="text" name="txt-carga-horaria-diaria" id="txt-carga-horaria-diaria" size="10px">

                        <label for="" method="get">Carga horaria do curso </label>
                        <input type="text" name="txt-carga-horaria" id="txt-carga-horaria" size="10px">

                        <label for="">Frequencia obrigatoria(%) </label>
                        <input type="text" name="txt-frequencia-obrigatoria" id="txt-frequencia-obrigatoria" size="10px" placeholder="digite os valores"><span>%</span>

                        <input type="submit" value="calcular" name="enviar" id="enviar">

                        <br><br>
                        <span class="resultado"><?php echo $frase;?></span>
                        
                    </form>
                    

                </div>
            </section>
            <?php
                include('views/footer.php')
            ?>
        </main>
    </body>
</html>
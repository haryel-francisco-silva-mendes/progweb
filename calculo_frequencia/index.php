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

                    <form action=""id="formulario">
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

                        <input type="submit" value="calcular" id="enviar">

                        <br><br>
                        <span class="resultado"></span>
                        <span class="resultado"></span>
                        <span class="resultado"></span>
                    </form>
                    <?php
                        if(isset($_GET["txt-carga-horaria-diaria"])and($_GET["txt-carga-horaria"]) ){}else{echo"informe os horarios."}
                    ?>
                </div>
            </section>
            <?php
                include('views/footer.php')
            ?>
        </main>
    </body>
</html>
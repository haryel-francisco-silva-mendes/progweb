
<?php
require_once("cabecalho.view.php");
?>
        <section id="conteudo">
            <?php
               if(!isset($_SESSION["logado"])){ 
            ?>
            <form action="" method="post">
                <label for="p1">Login</label>
                <input type="text" name="p1"><br>

                <label for="p2">senha</label>
                <input type="password" name="p2"><br>

                <input type="submit" name="submit" value="logar">
            </form>
            <?php
               }else{echo "<p>olá!</p>";}
            ?>
        </section>
<?php
require_once("rodape.view.php");
?>

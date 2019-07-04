<?php
    if(isset($_POST["submit"])){
        $categoria  =   $_POST["categoria"];
        switch($categoria){
            case 1  :$produtos = array(array("nome" => "jaleco lord","valor"=>210,"ativo"=>true),   array("nome"=>"jaleco veneto", "valor"=>240,"ativo"=>false));
            
            break;
            case 2  :$produtos = array(array("nome"=>"jaleco duquesa","valor"=>210,"ativo"=>true),  array("nome"=>"jaleco marrom","valor"=>240,"ativo"=>false), array("nome"=>"jaleco roxo","valor"=>190,"ativo"=>true));
            

            break;
            case 3  :$produtos = array(array("nome"=>"mini jaleco duquesa","valor"=>210,"ativo"=>true),  array("nome"=>"pequeno jaleco marrom","valor"=>240,"ativo"=>false),array("nome"=>"infantil jaleco roxo","valor"=>190,"ativo"=>true));
        }
    }
    
?>


<!-- aqui vai o html -->

<form action="" method="post">
    <label for="categoria">selecioneuma categoria </label>
    <select name="categoria" id="">
        <option value="1"> jaleco masculino</option>
        <option value="2">jaleco feminino</option>
        <option value="3">infantil</option>
    </select>
    <input type="submit" name="submit" value="ver preco">
</form>


    <?php
        if(isset($_POST["submit"])){
    ?>

    <div id="resultado">
        <?php
            $linha=0;
            while($linha<count($produtos)){
                echo"nome:".$produtos[$linha]["nome"]."<br>";
                $linha++;
            }
        ?>
    </div>

    <?php
        }
    ?>
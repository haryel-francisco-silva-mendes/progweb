<?php
    if(isset($_GET["submit"])){
        $programacao    =   $_GET["programacao"];
        $dia;
        switch($programacao){
            case 1:
                
                $dia                = "segunda";
                $programacao        = array(array("nome"=>"novela", "horario"=>"8:00am"), array("nome"=>"pequena empresas", "horario"=>"8:30am"));
            
            break;
            case 2:
                $dia                = "terça";
                $programacao        = array(array("nome"=>"filmes", "horario"=>"8:00am"), array("nome"=>"coachin", "horario"=>"8:30am"));
            
            break;
            case 3:
                $linha=0;
                $dia                = "quarta"; 
                $programacao        = array(array("nome"=>"teste", "horario"=>"8:00am"));
            
            break;
            case 4: 
                $dia                = "quinta";
                $programacao        = array(array("nome"=>"gato", "horario"=>"8:00am"), array("nome"=>"coachin", "horario"=>"8:30am"), array("nome"=>"marca", "horario"=>"8:30am")
                                      , array("nome"=>"tecpix", "horario"=>"8:30am"));
            
            break;
            case 5: 
                $dia                = "sexta";
                $programacao        = array(array("nome"=>"novela", "horario"=>"8:00am"), array("nome"=>"coachin", "horario"=>"8:30am"));
            
            break;
            case 6: 
                $dia                = "sabado";
                $programacao        = array(array("nome"=>"novela", "horario"=>"8:00am"), array("nome"=>"pato capoerista", "horario"=>"8:30am"));
            
            break;
            default:
                $dia                =  "domingo";
                $programacao        = array(array("nome"=>"novela", "horario"=>"8:00am"), array("nome"=>"coachin", "horario"=>"8:30am"));
            break;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        width:900px;
        margin:0 auto;
    }

</style>
<body>
    <div id="programacao_da_semana">
    
        <form action="" method="get">
            <select name="programacao" id="programacao">
                <option value= 1>segunda</option>
                <option value= 2>terca</option>
                <option value= 3>quarta</option>
                <option value= 4>quinta</option>
                <option value= 5>sexta</option>
                <option value= 6>sabado</option>
                <option>domingo</option>
            </select>
            <input type="submit" name="submit">
        </form>

        <?php
            if(isset($_GET["submit"])){
        ?>

        <table border="1">
            <tr>
               <th colspan="2"> <?php echo $dia; ?></th>
            </tr>
            <tr> 
                <th>programacao</th>
                <th>horario</th>
            </tr>
            <tr>
                <?php 
                        $linha=0;
                        while($linha<count($programacao)){
                            echo "<tr>.<td>".$programacao[$linha]["nome"]."</td>";
                            echo "<td>".$programacao[$linha]["horario"]."</td> </tr>";
                            
                            $linha++;
                        }      
              ?>
            </tr>

        </table>

        <?php
            }
        ?>

    </div>
</body>
</html>
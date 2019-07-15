<?php
    if(isset($_GET["submit"])){
        $valorA         = $_GET["valorA"];
        $valorB         = $_GET["valorB"]; 

        $adicao         = 0; 
        $subtracao      = 0;
        $multiplicacao  = 0;
        $divisao        = 0;

        $adicao         = floatval($valorA + $valorB); 
        $subtracao      = floatval($valorA - $valorB);
        $multiplicacao  = floatval($valorA * $valorB);
        $divisao        = floatval($valorA / $valorB);

       
        
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
<body>
        <form action="#" method="get">
            <input type="text" name="valorA" placeholder="valor A" id="valorA">
            <input type="text" name="valorB" placeholder="valor B" id="valorB">
            <input name="submit" type="submit">
        <?php
            if(isset($_GET["submit"])){
        
            
             
                
                echo "testetando ";
                    echo "<p>";
                        echo $valorA."+".$valorB."=".$adicao."<br>"; 
                        echo $valorA."-".$valorB."=".$subtracao."<br>"; 
                        echo $valorA."x".$valorB."=".$multiplicacao."<br>"; 
                        echo $valorA."/".$valorB."=".$divisao."<br>";
                    echo "</p>";
                
           
            
        }
        ?>
</body>
</html>
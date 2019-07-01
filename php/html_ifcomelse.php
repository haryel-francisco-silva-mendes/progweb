<?php
    if(isset($_GET["submit"])){
        if($_GET["idade"]=="mais"){
            header("Location:https://www.uol.com.br/");
        }else{header("Location:https://www.google.com/search?rlz=1C1GCEU_pt-BRBR848BR848&biw=1904&bih=960&tbm=isch&sa=1&ei=1wYaXarFCJ3A5OUPrMqcgAM&q=i+am+10&oq=i+am+10&gs_l=img.3..0i19l10.10803.10945..11138...0.0..0.98.186.2......0....1..gws-wiz-img.Rjs8ChFJxIU");}
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
    
    <div id="formulario" >
        <h1>Voce tem mais de 18 anos?</h1>
        <form action="">
            <input type="radio" name="idade" value="mais">sim
            <input type="radio" name="idade" value="menos">nao</br>
            <input type="submit" name="submit" value="entrar">
            
        </form>
    </div>


</body>
</html>
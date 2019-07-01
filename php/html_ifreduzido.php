<?php
    $logonormal="https://www.google.com/logos/doodles/2016/2016-doodle-fruit-games-day-10-and-brazilian-fathers-day-5641485706854400.3-hp2x.gif";
    $logoaniversario="https://www.google.com/logos/doodles/2016/jean-battens-107th-birthday-5170085972934656-hp2x.jpg";
    $nascimento="07-02";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body  style="text-align:center;">
    
    <img src="<?php echo (date("m-d")==$nascimento ?  $logoaniversario: $logonormal);?>" alt="" style="width:400px;"><br>
    <input type="text" name="buscar" placeholder="o que deseja saber?">

</body>
</html>
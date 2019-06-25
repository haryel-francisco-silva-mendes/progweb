<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pirámide de asteriscos</title>
</head>
<body>
<?php 
$n=mt_rand(1,100);
echo "$n<br>";
for($i=1;$i<=$n;$i++){ //filas
	for($j=1;$j<=$i;$j++){	//columnas
		echo "*";
	}
	echo "<br>";
}
?>	
</body>
</html>
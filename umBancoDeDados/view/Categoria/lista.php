<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/Categoria.controller.class.php");
//Parâmetro de filtragem
$produto = $_GET["produto"];
//Criando as novas instâncias das classes
$controller = new CategoriaController;
//Método de Listagem
$registros 	= $controller->listaCategoriaDoProduto($produto);
print_r($registros);
?>
<br><br>
<!-- Listagem -->
<?php
if(mysqli_num_rows($registros)>0){
    print_r(mysqli_fetch_array($registros));
    echo "<br><br>";
	while($reg = mysqli_fetch_array($registros)){
        echo $reg['categoria']."<br>"; 
	}
}
?>
<!-- Fim da Listagem -->
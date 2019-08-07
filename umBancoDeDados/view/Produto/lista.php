<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/Produto.controller.class.php");
//Parâmetro de filtragem
$categoria = $_GET["categoria"];
//Criando as novas instâncias das classes
$controller = new ProdutoController;
//Método de Listagem
$registros 	= $controller->listaProdutoComCategoria($categoria);
?>

<!-- Listagem -->
<?php
if(mysqli_num_rows($registros)>0){
	while($reg = mysqli_fetch_array($registros)){
        echo $reg['nome']."<br>"; 
	}
}
?>
<!-- Fim da Listagem -->
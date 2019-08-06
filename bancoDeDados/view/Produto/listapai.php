<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 05/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/Produto.controller.class.php");
//Criando as novas instâncias das classes
$controller = new ProdutoController;
//Método de Listagem
$registros 	= $controller->selectWithOrderBy('nome');
?>

<!-- Listagem -->
<?php
if(mysqli_num_rows($registros)>0){
?>
    <h1>Tabela de Produtos com Ordenação</h1>
    <table border="1">
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>SKU</th>
            <th>EAN</th>
            <th>Valor</th>
        </tr>
    <?php
	while($reg = mysqli_fetch_array($registros)){
    ?>
        <tr>
            <td><?php echo $reg['id_produto'];?></td>
            <td><?php echo $reg['nome'];?></td>
            <td><?php echo substr($reg['descricao'],0,10);?>...</td>
            <td><?php echo $reg['SKU'];?></td>
            <td><?php echo $reg['EAN'];?></td>
            <td><?php echo $reg['valorunitario'];?></td>
        </tr>
    <?php
    }
    ?>
    </table>
<?php
}else{
    echo "<h1>Sua busca não retornou nenhum resultado</h1>";
}
?>
<!-- Fim da Listagem -->
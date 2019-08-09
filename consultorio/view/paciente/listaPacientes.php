<?php
/*
* 	Descrição do Arquivo
* 	@autor - João Ricardo Gomes dos Reis
* 	@data de criação - 09/08/2019
*/

//Inclui as classes controladoras
require_once("../../controller/Paciente.controller.class.php");
//Criando as novas instâncias das classes
$controller = new PacienteController;
//Método de Listagem
$registros 	= $controller->select();
?>

<!-- Listagem -->
<?php
if(mysqli_num_rows($registros) > 0){
?>
    <h1>Listagem da Tabela de Pacientes</h1>
    <table border="1">
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
        </tr>
    <?php
	while($reg = mysqli_fetch_array($registros)){
    ?>
        <tr>
            <td><?php echo $reg['id_paciente'];?></td>
            <td><?php echo $reg['nome'];?></td>
            <td><?php echo $reg['telefone'];?></td>
            <td><?php echo $reg['celular'];?></td>
            <td><?php echo $reg['email'];?></td>
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
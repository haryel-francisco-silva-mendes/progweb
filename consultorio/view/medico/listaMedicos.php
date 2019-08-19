<?php
//Inclui as classes controladoras
require_once("../../controller/Medico.controller.class.php");
//Criando as novas instâncias das classes
$controller = new MedicoController;
?>

<?php
if(isset($_GET["medico"])){
    $controller->excluiMedico($_GET["medico"]);
    echo "<h3>O Médico de código ".$_GET["medico"]." foi excluído com sucesso!</h3>";
}
?>

<!-- Listagem -->
<?php

if(isset($_GET["paciente"])){
    $controller->excluiPaciente($_GET["paciente"]);
    echo "<h3>Paciente de codigo ".$_GET["id_paciente"]."foi excluido com sucesso </h3>";
}
 
//Método de Listagem
$registros 	= $controller->select();

if(mysqli_num_rows($registros) > 0){
?>
    <h1>Listagem da Tabela de Médicos</h1>
    <a href="cadastramedico.php">Cadastrar Novo Médico</a>
    <br><br>
    <table border="1">
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>E-mail</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    <?php
	while($reg = mysqli_fetch_array($registros)){
    ?>
        <tr>
            <td><?php echo $reg['id_medico'];?></td>
            <td><?php echo $reg['nome'];?></td>
            <td><?php echo $reg['telefone'];?></td>
            <td><?php echo $reg['celular'];?></td>
            <td><?php echo $reg['email'];?></td>
            <td><a href="editamedico.php?medico=<?php echo $reg['id_medico'];?>">Editar</a></td>
            <td><a href="?medico=<?php echo $reg['id_medico'];?>">Excluir</a></td>
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

<?php

require_once("../../controller/Medico.controller.class.php");
//Criando as novas instâncias das classes
$controller = new MedicoController;
//Método de Listagem
    $registro = $controller->select();
?>

<!-- Listagem -->
<?php
if(mysqli_num_rows($registro)>0){
?>
    <h1>Tabela de Médicos</h1>
    <table border="1">
        <tr>
            <th>Cod</th>
            <th>Nome</th>
            <th>Sobre nome</th>
            <th>email</th>
            <th>plano</th>
        </tr>
    <?php
	while($reg = mysqli_fetch_array($registro)){
    ?>
        <tr>
            <td><?php echo $reg['id_medico'];?></td>
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
    echo "<h1> Sua busca não retornou nenhum resultado </h1>";
}
?>
<!-- Fim da Listagem -->
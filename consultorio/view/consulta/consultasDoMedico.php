<?php
require_once("../../controller/Medico.controller.class.php");
$medico = new MedicoController;
$medicos = $medico->select();
?>
<form method="get">
    <label for="datadaconsulta">Data da Consulta</label>
    <input type="date" name="datadaconsulta" required>
    <label for="id_medico">Selecione o Médico</label>
    <select name="id_medico" required>
        <?php
        while($regmed=mysqli_fetch_array($medicos)){
        ?>
            <option value="<?php echo $regmed["id_medico"];?>"><?php echo $regmed["nome"];?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" name="submit" value="Pesquisar">
</form>

<?php
if(isset($_GET["submit"])){
//Recebendo os parâmetros do formulário
$datadaconsulta = $_GET["datadaconsulta"];
$id_medico = $_GET["id_medico"];
?>

<?php
//Inclui as classes controladoras
require_once("../../controller/Consulta.controller.class.php");
//Criando as novas instâncias das classes
$controller = new ConsultaController;
//Método de Listagem
$registros 	= $controller->consultasDoMedico($datadaconsulta,$id_medico);
?>


<!-- Listagem -->
<?php
if(mysqli_num_rows($registros) > 0){
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Data da Consulta</th>
    </tr>

    <?php
    while($reg=mysqli_fetch_array($registros)){
    ?>

    <tr>
        <td><?php echo $reg["nome"]; ?></td>
        <td><?php echo $reg["email"]; ?></td>
        <td><?php echo $reg["telefone"]; ?></td>
        <td><?php echo $reg["datadaconsulta"]; ?></td>
    </tr>

    <?php
    }
    ?>

</table>


<?php
}else{
?>
    <h1>Sua busca não retornou nenhum resultado</h1>
<?php
}
?>
<!-- Fim da Listagem -->

<?php
}else{
?>
    <h1>Opsss... você precisa informar alguns dados antes =) ...!!!</h1>
<?php
}
?>
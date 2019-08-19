<?php
//Inclui as classes controladoras
require_once("../../controller/Medico.controller.class.php");
//Criando as novas instâncias das classes
$controller = new MedicoController;

if(isset($_GET["submit"])){

    //Cadastra o médico usando o método de cadastro
    $controller->editaMedico($_GET["p0"],$_GET["p1"],$_GET["p2"],$_GET["p3"],$_GET["p4"],$_GET["p5"]);
    //Redireciono para a listagem
    header("Location: listademedicos.php");

}else{
    //Listar os dados do médico selecionado
    $dadosdomedico = $controller->carregaMedico($_GET["medico"]);
    $regmedico = mysqli_fetch_array($dadosdomedico);
?>
<form method="get">
    <input type="hidden" name="p0" value="<?php echo $_GET["medico"]; ?>">
    <label for="p1">Usuário</label>
    <input type="text" name="p1" placeholder="Informe o usuário" value="<?php echo $regmedico["id_usuario"]?>"><br>
    <label for="p2">Nome</label>
    <input type="text" name="p2" placeholder="Informe o nome" value="<?php echo $regmedico["nome"]?>"><br>
    <label for="p3">Telefone</label>
    <input type="text" name="p3" placeholder="Informe o telefone" value="<?php echo $regmedico["telefone"]?>"><br>
    <label for="p4">E-mail</label>
    <input type="text" name="p4" placeholder="Informe o e-mail" value="<?php echo $regmedico["email"]?>"><br>
    <label for="p5">Celular</label>
    <input type="text" name="p5" placeholder="Informe o celular" value="<?php echo $regmedico["celular"]?>"><br>
    <input type="submit" name="submit" value="Salvar">
</form>
<?php
}
?>
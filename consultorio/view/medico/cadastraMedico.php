<?php
if(isset($_GET["submit"])){
    //Inclui as classes controladoras
    require_once("../../controller/Medico.controller.class.php");
    //Criando as novas instâncias das classes
    $controller = new MedicoController;
    //Cadastra o médico usando o método de cadastro
    $controller->cadastraMedico($_GET["p1"],$_GET["p2"],$_GET["p3"],$_GET["p4"],$_GET["p5"]);
    //Redireciono para a listagem
    header("Location: listademedicos.php");
}
?>

<form method="get">
    <label for="p1">Usuário</label>
    <input type="text" name="p1" placeholder="Informe o usuário"><br>
    <label for="p2">Nome</label>
    <input type="text" name="p2" placeholder="Informe o nome"><br>
    <label for="p3">Telefone</label>
    <input type="text" name="p3" placeholder="Informe o telefone"><br>
    <label for="p4">E-mail</label>
    <input type="text" name="p4" placeholder="Informe o e-mail"><br>
    <label for="p5">Celular</label>
    <input type="text" name="p5" placeholder="Informe o celular"><br>
    <input type="submit" name="submit" value="Cadastrar">
</form>
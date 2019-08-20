<?php
    if(isset($_GET["submit"])){
        require_once("../../controller/Paciente.Controller.class.php");

        $controller = new PacienteController;

        $controller->cadastraPaciente($_GET["p1"],$_GET["p2"],$_GET["p3"],$_GET["p4"],$_GET["p5"]);

        header("Location: listadepaciente.php");
    }
?>

<form method="get">
    <label for="p1">nome</label>
    <input type="text" name="p1" placeholder="informe o nome">

    <label for="p2">telefone</label>
    <input type="text" name="p2" placeholder="informe Telefone">

    <label for="p3">E-mail</label>
    <input type="text" name="p3" placeholder="informe E-mail">

    <label for="p4">celular</label>
    <input type="text" name="p4" placeholder="informe Celular">

    <label for="p5">convenio</label>
    <input type="text" name="p5" placeholder="informe Convenio">    

    <input type="submit" name="submit" value="Salvar">

</form>
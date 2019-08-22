<?php
    require_once("../../controller/Paciente.controller.class.php");
    require_once("../../model/Paciente.class.php");

    $controller = new PacienteController;
    $paciente = new Paciente;

    if(isset($_POST['submit'])){
        $paciente->setId_paciente('p0');
        $paciente->setNome($_POST['p1']);
        $paciente->setTelefone($_POST['p2']);
        $paciente->setCelular($_POST['p3']);
        $paciente->setEmail($_POST['p4']);
        $paciente->setConvenio($_POST['p5']);

        if($paciente->getId_paciente() > 0){
            $controller->update($paciente,'id_paciente');
            echo "Atualização realizada com sucesso! ";
        }else{
            $controller->save($paciente);
            echo "Cadastro realizado com sucesso!";
        }
    }

    if(isset($_GET['paciente'])){

        $paciente = $controller->loadObject($_GET['paciente'],'id_paciente');
    }
?>

    <form method="post">
        <input type="hidden" name="p0" value="<?php echo ($paciente->getId_paciente() > 0) ? $paciente->getId_paciente():''; ?>">
    
        <label for="p1">nome</label>
        <input type="text" name="p1" placeholder="informe o nome" value="<?php echo($paciente->getId_paciente() > 0) ? $paciente->getNome():''; ?>"></br>

        <label for="p2">telefone</label>
        <input type="text" name="p2" placeholder="informe o telefone" value="<?php echo($paciente->getId_paciente() > 0) ? $paciente->getTelefone():''; ?>"></br>

        <label for="p3">E-mail</label>
        <input type="text" name="p3" placeholder="informe o E-mail" value="<?php echo($paciente->getId_paciente() > 0) ? $paciente->getEmail():''; ?>"></br>

        <label for="p4">celular</label>
        <input type="text" name="p4" placeholder="informe o celular" value="<?php echo($paciente->getId_paciente() > 0) ? $paciente->getCelular():''; ?>"></br>
    
        <label for="p5">convenio</label>
        <input type="text" name="p5" placeholder="informe o convenio" value="<?php echo($paciente->getId_paciente() > 0) ? $paciente->getConvenio():''; ?>"></br>


        <input type="submit" name="submit" value="Salvar">
    
    </form>
    
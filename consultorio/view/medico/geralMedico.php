<?php
    require_once("../../controller/Medico.controller.class.php");
    require_once("../../model/Medico.class.php");

    $controller = new MedicoController;
    $medico = new Medico;

    if(isset($_POST['submit'])){
        $medico->setId_medico($_POST['p0']);
        $medico->setId_usuario($_POST['p1']);
        $medico->setNome($_POST['p2']);
        $medico->setTelefone($_POST['p3']);
        $medico->setCelular($_POST['p4']);
        $medico->setEmail($_POST['p5']);

        if($medico->getId_medico() > 0){
            $controller->update($medico,'id_medico');
            echo "Atualização realizada com sucesso! ";
        }else{
            $controller->save($medico);
            echo "Cadastro realizado com sucesso!";
        }
    }

    if(isset($_GET['medico'])){

        $medico = $controller->loadObject($_GET['medico'],'id_medico');
    }
?>

    <form method="post">
        <input type="hidden" name="p0" value="<?php echo ($medico->getId_medico() > 0) ? $medico->getId_medico():''; ?>">
        <label for="p1">usuario</label>
        <input type="text" name="p1" placeholder="informe o usuário" value= "<?php echo($medico->getId_medico() > 0) ? $medico->getId_usuario() :''; ?>"></br>

        <label for="p2">nome</label>
        <input type="text" name="p2" placeholder="informe o nome" value="<?php echo($medico->getId_medico() > 0) ? $medico->getNome():''; ?>"></br>

        <label for="p3">telefone</label>
        <input type="text" name="p3" placeholder="informe o telefone" value="<?php echo($medico->getId_medico() > 0) ? $medico->getTelefone():''; ?>"></br>

        <label for="p4">E-mail</label>
        <input type="text" name="p4" placeholder="informe o E-mail" value="<?php echo($medico->getId_medico() > 0) ? $medico->getEmail():''; ?>"></br>

        <label for="p5">celular</label>
        <input type="text" name="p5" placeholder="informe o celular" value="<?php echo($medico->getId_medico() > 0) ? $medico->getCelular():''; ?>"></br>
    
        <input type="submit" name="submit" value="Salvar">
    
    </form>
    
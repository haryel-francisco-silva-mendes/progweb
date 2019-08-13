<?php
    require_once("../../controller/Medico.controller.class.php");
    $medico = new MedicoController;
    $medicos = $medico->select();
?>

<form action="" method="get">
    <label for="datadaconsulta">Data da consulta</label>
    <input type="date" name="datadaconsulta">
    <label for="id_medico">seleciona o medico</label>
    <select name="id_medico" id="id_medico">
        <?php
            while($regmed=mysqli_fetch_array($medicos)){
        ?>
                <option value="<?php echo $regmed["id_medico"];?>"><?php echo $regmed['nome'];?></option>
        <?php
            }
        ?>
 
    </select>
    <input type="submit" name="submit" value="pesquisar">
</form>

<?php
    if(isset($_GET["submit"])){
        //recebendo parametros
        $datadaconsulta = $_GET["datadaconsulta"];
        $id_medico = $_GET["id_medico"];
?>

    <?php
        require_once("../../controller/Consulta.Controller.class.php");

        $controller = new consultaController;
        //metodo de listagem
        $registro = $controller->consultaDoMedico($datadaconsulta,$id_medico);
    ?>
    <?php
        if(mysqli_num_rows($registro)>0){
    ?>
            <table border="1">
                <tr>
                    <th>nome do medico</th>
                    <th>sobrenome</th>
                    <th>E-mail</th>
                    <th>telefone</th>
                    <th>Data da consulta</th>
                </tr>
                <?php
                    while($reg = mysqli_fetch_array($registro)){   
                ?>
                        <tr>
                            <td><?php echo $reg['nome'];?></td>
                            <td><?php echo $reg['sobrenome'];?></td>
                            <td><?php echo $reg['email'];?></td>
                            <td><?php echo $reg['telefone'];?></td>
                            <td><?php echo $reg['datadaconsulta'];?></td>
                            
                        </tr>
                <?php
                    }
                ?>
            
            </table>
    <?php
        }else{
    ?>
                <h1>busca nao retornou resultado ☺</h1>
    <?php
            }
    ?>

<?php
        }else{
?>
            <h1>voce precisa informar alguns dados antes ☻</h1>
        <?php
            }    
        ?>
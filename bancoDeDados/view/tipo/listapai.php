<?php
    //inclui as classes controladoras
    require_once("../../controller/Tipo.controller.class.php");

    //criando novas instancias das classe

    $controller = new TipoController;

    //metodo de listagem

    $registros = $controller->selectWithOrderBy('nome');
?>

<!-- lISTAGEM-->

<?php
    if(mysqli_num_rows($registros)>0){
?>       
    
        <h1>Tabela de tipos com ordenação</h1>
        <table border="1">
            <tr>
                <th>Cod</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ativo</th>
                <th>Atributo</th>
            </tr>
            <?php
                while($reg = mysqli_fetch_array($registros)){
            ?>
                    <tr>
                        <td><?php echo $reg['id_tipo']; ?></td>
                        <td><?php echo $reg['nome']; ?></td>
                        <td><?php echo $reg ['descricao']?></td>
                        <td><?php echo $reg ['ativo']; ?></td>
                        <td><?php echo $reg ['atributo']; ?></td>
                    </tr>
        
    <?php
        }
?>
        </table>
<?php
    }else{ echo "<h1>Produto nao cadastrado</h1>";}
?>
<!--fim da lista -->
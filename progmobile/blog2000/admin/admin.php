
<?php
    require_once("../config/conexao.php");
    session_start();
    if(isset($_SESSION['account'])){
        //se existe a sessao chama a pagina seguinte
        header('Location: https://www.google.com.br');
        exit;
    }
    if(isset($_POST["logar"])){

        //guarda os dados do form
        $usuario    = trim(strip_tags($_POST['txtemail']));
        $senha      = trim(strip_tags($_POST['txtsenha']));

        //select no banco
        $sql        = "SELECT usuario.* FROM usuario 
                       WHERE email = :usuario AND senha = :senha AND status = 1 "; 
        
        try{
            //preparando a query select
            $result     = $conexao->prepare($sql);
            $result->bindParam(':usuario',$usuario,PDO::PARAM_STR);
            $result->bindParam(':senha',$senha,PDO::PARAM_STR);
            $result->execute();
            $contar     = $result->rowCount();
            
            //var_dump($contar);
            if($contar > 0){
                $dado = $result->fetch();
                $_SESSION['acount'] = $dado;

                print_r($_SESSION['acount']['nome']);
            }

        }catch(PDOExeption $erro){
            echo $erro;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>area admin</title>
    <meta name="description" content="Blog dos alunos senac SJBV de ADAC - Custo reduzido ">
    <meta name="keywords" content="blog,filmes,series,sao joao da boa vista,senac,ti,">
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <link rel="stylesheet" href="../assets/css/estilo_admin.css">
</head>
<body>

    <!-- header -->
    <?php 
        include('../views/header_admin.php');
    ?>

    <div class="login">
        <div class="form-login">
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="">Usuario</label>
                <input type="text" placeholder="Digite seu e-mail" size="40" name="txtemail">

                <label for="">Senha</label>
                <input type="password" placeholder="Digite sua senha" size="40" name="txtsenha">

                <input type="submit" value="login" name="logar">
            </form>
        </div>
    </div>

    <br><br>

    <!-- footer -->
    <?php 
        include('../views/footer.php');
    ?>

</body>
</html>
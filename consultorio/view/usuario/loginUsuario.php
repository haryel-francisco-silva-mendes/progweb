
<?php
    if(isset($_POST["submit"])){
        require_once("../../controller/Usuario.controller.class.php");
        $controller = new UsuarioController;
        $retorno = $controller->loginDeUsuario($_POST["p1"],$_POST["p2"]);

        if($retorno == true){
            echo "bem vindo";
?>
            <form action="" method="get"></form>
            <input type="submit" name="logoff" id="logoff" value="logoff">
<?php
     }else{echo "login e usuario invalido";}
        
     if(isset($_GET["logoff"])){
         
     }

    }
?>
<h1>Login</h1>
<form action="" method="post">
    <label for="p1">Login</label>
    <input type="text" name="p1"><br>

    <label for="p2">senha</label>
    <input type="password" name="p2"><br>

    <input type="submit" name="submit" value="logar">
</form>
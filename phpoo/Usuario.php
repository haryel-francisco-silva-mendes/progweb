<?php
//importação da classe;
    require_once 'Usuario.class.php';

    //instanciando o objeto a partir da classe Usuario();
    $usuarioDoTotem = new Usuario();


    //chamando uma variavel privada;
    $usuarioDoTotem->setNome("jão ");
    $usuarioDoTotem->setSobrenome("mendonza");
    echo $usuarioDoTotem->getNome().$usuarioDoTotem->getSobrenome();
    

?>
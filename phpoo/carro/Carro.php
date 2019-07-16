<?php

    //chamando classe;
    require_once 'Carro.class.php';

    //instancia do objeto a partir da classe;
    $carro= new Carro();
    
    //criando nosso carros;
    $carro->setMarca("fiat");
    $carro->setAnodefabricacao("1990");
    $carro->setModelo("UNINHO");
    $carro->setCor("vermelho");
    $carro->setLigado(false);
    $carro->setVelocidade(0);
    $carro->setVelocidadeMaxima(700);

    echo"CARRO:".$carro->getModelo()."<br><br>";

    $carro->acelerar();
    $carro->ligardesligar();
    $carro->acelerar();

?>
<?php
    define('DB_SERVER','den1.mysql6.gear.host');
    define('DB_USERNAME','bdprojetochico');
    define('DB_PASSWORD','Mh99d_R1-XAI');
    define('DB_NAME','bdprojetochico');

    $conn   = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
    if(!$conn){
        echo'<div class="alert alert-danger">';
        echo"conexao nao autorizada!";
        echo"</div>";
        die("Erro");
    }else{echo'sucesso';}
?>
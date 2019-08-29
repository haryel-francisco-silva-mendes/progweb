<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Consultório</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/estilo.css">
</head>
<body>
    <main>
        <header>
            <div id="topo">
                <div id="logotipo">
                    <img src="../../assets/img/logo.png">
                </div>
                <div id="contatos">
                    <span>falecom@mediclife.com</span>
                    <span>(19) 3622-1234</span>
                </div>
            </div>
            <?php
                session_start();
                if(isset($_SESSION["logado"])){

            ?>
            <nav>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </nav>
            <?php
                }else{
                    echo "<p>Bem vindo faca seu login</p>";
                }
            ?>
        </header>
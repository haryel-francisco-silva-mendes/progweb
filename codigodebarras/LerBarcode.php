<?php
    session_start();
    if(!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho']=array();
        $_SESSION['totalcarrinho']=0;
    }
    if(isset($_GET["produto"])){

        // Importar a classe
        require_once 'Produto.class.php';

        $produtos = array(
                array(  "id" => 1,
                        "nome" => "TV 4K",
                        "descricao" => "Linda TV com tecnologia 4K",
                        "sku" => 2598,
                        "ean" => 7899993913625,
                        "valorunitario" => 245.78,
                        "id_categoria" => 1
                
                ),
                array(  "id" => 2,
                        "nome" => "Video Cassete Full Play",
                        "descricao" => "Incrível tecnologia que permite reproduzir filmes na sua casa",
                        "sku" => 7895,
                        "ean" => 7899993903817,
                        "valorunitario" => 287.99,
                        "id_categoria" => 2
                ),
                array(  "id" => 3,
                        "nome" => "Smart Hub",
                        "descricao" => "Ainda não sabemos para o que ele serve",
                        "sku" => 1185,
                        "ean" => 7899993907563,
                        "valorunitario" => 1199.50,
                        "id_categoria" => 5
                ),
                array(  "id" => 4,
                        "nome" => "Pendrive SSD",
                        "descricao" => "Velocidade power mega super hiper rápida em suas transferências",
                        "sku" => 2214,
                        "ean" => 7899993907556,
                        "valorunitario" => 599,90,
                        "id_categoria" => 2
                )
        );

        switch ($_GET["produto"]) {
            case 7899993913625:
                $posicao = 0;
                break;
            case 7899993903817:
                $posicao = 1;
                break;
            case 7899993907563:
                $posicao = 2;
                break;
            case 7899993907556:
                $posicao = 3;
                break;
            default:
                $posicao = null;
        }

        
        
        if(isset($posicao)){
            $id = $produtos[$posicao]["id"];
            $nome = $produtos[$posicao]["nome"];
            $descricao = $produtos[$posicao]["descricao"];
            $sku = $produtos[$posicao]["sku"];
            $ean = $produtos[$posicao]["ean"];
            $valorunitario = $produtos[$posicao]["valorunitario"];
            $id_categoria = $produtos[$posicao]["id_categoria"];;

            // Instânciando o objeto a partir da classe
            $produto = new Produto($id,$nome,$descricao,$sku,$ean,$valorunitario,$id_categoria);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ler Etiqueta do Produto</title>
        <link rel="stylesheet" type="text/css" href="css/a.css">
    </head>
    <body>
        <main>
            <div class="bloco3 produto">
            <section id="leituradositens">
                <form method="get">
                    <label for="produto">Faça a leitura do produto</label>
                    <input type="text" name="produto" autofocus>
                </form>
            </section>
            </div>
            <div class="bloco6 compra">
            <section id="itensdocarrinho">
                <h1>itens do carrinho: </h1>
                <?php
                    if(isset($_GET["produto"]) and isset($posicao)){
                        array_push($_SESSION['carrinho'],
                        ['ean'=>$produto->getEan(),
                         'nome'=>$produto->getNome(),
                         'valorunitario'=> $produto->getValorunitario()]);

                         foreach($_SESSION['carrinho'] as $row){
                             echo $row['ean']."-";
                             echo $row['nome']."-";
                             echo $row['valorunitario']."<br>";
                         }}else{
                             echo "informe um produto valido";
                         }
                    
                ?>
            </section>
            </div>  
                <div class="bloco3 valorT">
                <section id="totaldocarrinho">
                    <h1>TOTAL:</h1>
                    <?php
                        if(isset($_GET["produto"]) and isset($posicao)){
                            echo $_SESSION['totalcarrinho']+=$produto->getValorunitario();
                        }
                    ?>
                </section>
                </div>
        </main>
    </body>
</html>
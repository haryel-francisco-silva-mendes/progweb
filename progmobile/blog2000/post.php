
<?php
    require_once('config/conexao.php');
    require_once('function/Function.php');

    $sql = "SELECT * FROM postagem
            INNER JOIN usuario ON usuario.id_usuario = postagem.id_usuario
            WHERE id_post = ".$_GET["post"]."";

    try{
        $resultado  = $conexao->prepare($sql);
        $resultado->execute();
        $contar     = $resultado->rowCount();

        if($contar>0){
            $post = $resultado->fetch();
        }
    }catch(PDOexeption $erro){
        echo $erro;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Document</title>
</head>
<body>
    <!--HEADER-->
    <?php
        include('views/header.php');
    ?>

    <section>
        <div class="container">
            <section class="post">
                <header>
                    <h1><?php echo $post['titulo']; ?></h1>
                    <span><?php echo date("d/m/y h:i",strtotime($post['data'])); ?></span>
                    <h2><?php echo $post['nome']; ?></h2>
                </header>

                <?php
                    $sqlCat = "SELECT * FROM categoria
                              INNER JOIN item_categoria ON item_categoria.id_cat = categoria.id_categoria
                              WHERE id_post = ".$post['id_post']."";
                              try{
                                  $resultado = $conexao->prepare($sqlCat);
                                  $resultado->execute();
                                  $contar = $resultado->rowCount();

                                  if($contar>0){
                                      $exibeCat = $resultado->fetchAll(PDO::FETCH_OBJ);
                                  }
                              }catch(PDOExeption $erro){
                                  echo $erro;
                              }
                ?>

                <div class="cat">
                    <?php
                        foreach($exibeCat as $teste){
                    ?>
                    <span class="categoria"><?php echo $teste->nome; ?></span>

                    <?php } ?>
                </div>

                <img src="assets/images/<?php echo $post['imagem_destaque'] ?>" alt="" title="">
                <?php echo $post['conteudo']; ?> </br>
                <?php
                    $linkvideo       = $post["video_destaque"];
                    $comeco          = strpos($post["video_destaque"],"=");
                    $tamanhodocodigo = strlen($linkvideo)-$comeco;
                ?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo substr($linkvideo,$comeco+1,$tamanhodocodigo); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </section>
        </div>
    </section>
    <br><br>
    <!--FOOTER-->
    <?php 
        include('views/footer.php');
    ?>
</body>
</html>

<?php
    require_once('config/conexao.php');

    require_once('function/Function.php');

    $sql = "SELECT * FROM usuario INNER JOIN postagem ON postagem.id_usuario = usuario.id_usuario";
    try{
        $resultado = $conexao->prepare($sql);
        $resultado->execute();
        $contar = $resultado->rowCount();
        

        if($contar>0){
            $exibe = $resultado->fetchALL(PDO::FETCH_OBJ);       
        }
    }catch(PDOExeption $e){
        echo $erro;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog2000</title>
    <meta name="description" content="Blog dos alunos senac SJBV de ADAC - Custo reduzido ">
    <meta name="keywords" content="blog,filmes,series,sao joao da boa vista,senac,ti,">
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>

    <!-- header -->
    <?php 
        include('views/header.php');
    ?>

    <section>
        <div class="container">
            <?php
                foreach($exibe as $post){
            ?>
                <section class="post">
                    <header>
                        <h1><?php echo $post->titulo; ?></h1>
                        <span><?php echo date("d/m/y h:i",strtotime($post->data));?></span>
                        <h2><?php echo $post->nome; ?></h2>
                    </header>

                    <?php
                        $sqlCat = "SELECT * FROM categoria 
                        INNER JOIN item_categoria ON item_categoria.id_cat = categoria.id_categoria
                        WHERE id_post = $post->id_post";

                        try{
                            $resultado = $conexao->prepare($sqlCat);
                            $resultado->execute();
                            $contar = $resultado->rowCount();
                            if($contar>0){
                                $exibeCat = $resultado->fetchAll(PDO::FETCH_OBJ);
                            }
                        }
                        catch(PDOExeption $erro){
                            echo erro;
                        }
                    ?>

                    <div class="cat">
                        <?php
                            foreach($exibeCat as $teste){
                                ?>
                                <span class="categoria"><?php echo $teste->nome; ?></span>
                                <?php
                            }
                        ?>
                    </div>
                    <img src="assets/images/<?php echo $post->imagem_destaque ?>" alt="">
                   
                    <?php echo LimitarTexto($post->conteudo, $limite=50); ?>
                    <a href="post.php?post=<?php echo $post->id_post; ?>">Leia mais[...]</a>

                </section>   
            <?php
                }
            ?>
        </div>
    </section>

    <br><br>

    <!-- footer -->
    <?php 
        include('views/footer.php');
    ?>

</body>
</html>
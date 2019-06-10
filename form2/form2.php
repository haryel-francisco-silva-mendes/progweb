<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale 1.0">
        <title>formulario-2</title>
    </head>
    <body>
        <form id="contato" action="recebe2.php" method="POST">
            <label for="nome">nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <br>
            <label for="usuario">usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="digite seu usuario">
            <br>
            <label for="senha">senha</label>
            <input type="password" name="senha" id="senha" placeholder="digite sua senha numérica">
            <br>
            <label for="cargo">Cargo</label>
            <select name="cargo" id="cargo">
                <option value="1">Gerente</option>
                <option value="2">auxiliar</option>
                <option value="3">padeiro</option>
                <option value="4">faxineiro</option>
                <option value="5">desempregado</option>
            </select>
            <br>
            <label for="cargo">administrador</label>
            <input type="radio" name="administrador" id="administrador" value="S">sim
            <input type="radio" name="administrador" id="administrador" value="N">nao
            <br>
            <input type="submit" name="submit" id="submit" value="cadastrar">
        </form>
    </body>
</html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar usuário</title>
    </head>
    <body>
        <h2>Informar dados do usuário:</h2>
        <form action="salvarDados.php" method="POST">
            Nome:<input type="text" name="nome" required><br>
            Telefone:<input type="tel" name="telefone" required><br>
            <input type="submit" value="Confirmar" name="confirmar" required>
        </form>
</html>
<html>
  <head>
    <title>Dados do Usuário</title>
  </head>
  <body>
<?php
    session_start();
    $nome = $_SESSION['nome'];
    $telefone = $_SESSION['telefone'];
    echo "Nome: $nome<br> Telefone: $telefone"
?>
  </body>
</html>

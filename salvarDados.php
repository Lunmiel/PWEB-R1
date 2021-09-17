<?php
    session_start();
    include_once('conexão.php');
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $enviarDados = "INSERT INTO usúario(nome, telefone) VALUES ('$nome','$telefone', NOW())";
    $envio = mysqli_query($conectar, $enviarDados);
    $_SESSION['nome']= $nome;
    $_SESSION['telefone']= $telefone;
    echo "<a href='visualizarDados.php'>Visualizar os dados cadastrados.</a>";
?>
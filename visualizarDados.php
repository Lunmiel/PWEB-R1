<?php
    session_start();
    $nome = $_SESSION['nome'];
    $telefone = $_SESSION['telefone'];
    echo "Nome: $nome<br> Telefone: $telefone"
?>
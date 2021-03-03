<?php
include "conexaoBanco.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    mysqli_query($link,"insert into tb_login (nome, email , senha) values ('$nome','$email', '$senha')");//serve para inserir valores dentro da tabela
    header('location:index.html');//função que serve para redirecionar para o formumlário
?>
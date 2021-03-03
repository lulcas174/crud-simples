<?php
    include "conexaoBanco.php" ;
    $consulta = $_POST['consulta'];
    $sql = mysqli_query($link,"select * from tb_login WHERE nome like'%$consulta%'"); //like é a mesma coisa que contém
    //quando tem %a significa que eu quero a primeira letra de cada palavra comece com A
    //quando organizado a% eu quero que consulte a palavra terminado com a letra A
    // quando colocado %a% significa que no meio dessas palavras tem que ter a letra A, independente do que comece ou termine
    while ($vetor = mysqli_fetch_array($sql)){ //função responsável ler linha por linha e guardar no vetor, por isso eu consigo chamar ID login direto do meu banco
        $id = $vetor['id_login'];
        $nome = $vetor['nome'];
        $email = $vetor ['email'];
        $senha = $vetor ['senha'];

        echo "O nome é : $nome";


    }
?>
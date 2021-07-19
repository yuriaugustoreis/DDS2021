<?php

    include "conexao.php";

//$POST está vindo de dentro do JS
    $id_funcao = $_POST["id_funcao"];

//sempre trabalhar com WHERE, se não apaga tudo dentro de regiao
    $delete =  "DELETE FROM funcao WHERE id_funcao='$id_funcao'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";
?>
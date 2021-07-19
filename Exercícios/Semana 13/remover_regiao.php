<?php

    include "conexao.php";

//$POST está vindo de dentro do JS 
    $id_regiao = $_POST["id_regiao"];

//sempre trabalhar com WHERE, se não apaga tudo dentro de regiao
    $delete =  "DELETE FROM regiao WHERE ID_REGIAO='$id_regiao'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";
?>
<?php

    include "conexao.php";

//$POST está vindo de dentro do JS
    $id_pais = $_POST["id_pais"];

//sempre trabalhar com WHERE, se não apaga tudo dentro de regiao
    $delete =  "DELETE FROM pais WHERE id_pais='$id_pais'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";
?>
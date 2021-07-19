<?php

    include "conexao.php";

//$POST está vindo de dentro do JS
    $id_funcionario = $_POST["id_funcionario"];

//sempre trabalhar com WHERE, se não apaga tudo dentro de regiao
    $delete =  "DELETE FROM funcionario WHERE id_funcionario='$id_funcionario'";

    $conexao->query($delete);

//após a conexão, e apagar conteúdo, esse 1 tem como objetivo ativar o controle... para entrar dentro do if no JS.
    echo "1";
?>
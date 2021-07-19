<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_regiao = $_POST["id_regiao"];
$nome_regiao = $_POST["nome_regiao"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE regiao SET nome_regiao='$nome_regiao' WHERE id_regiao='$id_regiao'";

$conexao->query($update);

echo "1";
?>
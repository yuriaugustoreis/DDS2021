<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_pais = $_POST["id_pais"];
$nome_pais = $_POST["nome_pais"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE pais SET ID_PAIS='$id_pais', NOME_PAIS='$nome_pais' WHERE id_pais='$id_pais'";

$conexao->query($update);

echo "1";
?>

<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_departamento = $_POST["id_departamento"];
$nome_departamento = $_POST["nome_departamento"];


//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE departamento SET nome_departamento='$nome_departamento' WHERE id_departamento='$id_departamento'";

$conexao->query($update);

echo "1";
?>

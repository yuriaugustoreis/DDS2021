<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_funcionario = $_POST["id_funcionario"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$telefone = $_POST["telefone"];


//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE localizacao SET nome='$nome', sobrenome='$sobrenome', telefone='$telefone' WHERE id_funcionario='$id_funcionario'";

$conexao->query($update);

echo "1";
?>

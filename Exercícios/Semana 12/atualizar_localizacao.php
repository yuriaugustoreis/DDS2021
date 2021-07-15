<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_pais = $_POST["id_pais"];
$endereco = $_POST["endereco"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE localizacao SET endereco='$endereco', cep='$cep', cidade='$cidade', estado='$estado' WHERE id_pais='$id_pais'";

$conexao->query($update);

echo "1";
?>

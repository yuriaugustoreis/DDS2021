<?php

include "conexao.php";

//variáveis quem manda pra ca é o post do JS. Seguir padrão;
$id_funcao = $_POST["id_funcao"];
$titulo_funcao = $_POST["titulo_funcao"];
$salario_minimo = $_POST["salario_minimo"];
$salario_maximo = $_POST["salario_maximo"];

//Update onde (where) id de controle for acionado, o id nunca muda, somente informações antes.
$update = "UPDATE funcao SET titulo_funcao='$titulo_funcao', salario_minimo='$salario_minimo', salario_maximo='$salario_maximo' WHERE id_funcao='$id_funcao'";

$conexao->query($update);

echo "1";
?>

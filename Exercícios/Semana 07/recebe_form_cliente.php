<?php
include "menu.php";
include "conexao.php";


$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];


$sql = "INSERT INTO cliente VALUES(
                                    NULL,
                                    '$nome',
                                    '$cpf',
                                    '$email',
                                    '$endereco'
                                )";

$conexao->query($sql) or die(print_r($conexao->errorInfo()));
echo "Cliente inserido com sucesso.";
?>
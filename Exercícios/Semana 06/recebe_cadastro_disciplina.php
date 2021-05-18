<?php

require_once "conexao.php";

$cpf_professor = $_POST["cpf_professor"];
$curso = $_POST["curso"];
$horario = $_POST["horario"];
$prontuario = $_POST["prontuario"];


$q = "INSERT INTO disciplina VALUES ('$cpf_professor', '$curso', '$horario', '$prontuario')";

$conexao->query($q) or die(print_r($conexao->errorInfo()));

echo "Disciplina cadastrada com sucesso";

?>
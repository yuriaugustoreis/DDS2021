<?php

    require_once "conexao.php";

    $q = "SELECT * FROM disciplina";

    $resultado = $conexao->query($q) or die (print_r($conexao->errorInfo()));

    if($resultado->rowCount()>0){
        foreach($resultado as $i => $t){
            echo "CPF do Professor: ". $t["cpf_professor"]."<br>";
            echo "Curso: ". $t["curso"]."<br>";
            echo "Horario: ". $t["horario"]."<br>";
            echo "Prontuario: ". $t["prontuario"]."<br>";
            echo "<hr>";
        }
    }

?>
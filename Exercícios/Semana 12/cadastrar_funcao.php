<?php
    include "cabecalho.php";
    include "classeFormulario.php";
    include "conexao.php";

    if(!empty($_POST)){        
        $id_funcao = $_POST["ID_FUNCAO"];
        $titulo_funcao = $_POST["TITULO_FUNCAO"];
        $salario_minimo = $_POST["SALARIO_MINIMO"];
        $salario_maximo = $_POST["SALARIO_MAXIMO"];
        $sql = "INSERT INTO funcao VALUES('$id_funcao','$titulo_funcao','$salario_minimo', '$salario_maximo')";
        $conexao->query($sql);
        echo "<span class='ok'>Localização inserida com sucesso</span><br />";
    }

    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Funções";

    $f = new Formulario($v);

    $v = null;
    $v["type"]="text";
    $v["name"]="ID_FUNCAO";
    $v["placeholder"]="Digite o ID da Função...";
    $v["id"]="funcao_input";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="TITULO_FUNCAO";
    $v["placeholder"]="Digite o título da Função...";
    $v["id"]="titulo_funcao";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="SALARIO_MINIMO";
    $v["placeholder"]="Digite o salário mínimo...";
    $v["id"]="min_salario";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="SALARIO_MAXIMO";
    $v["placeholder"]="Digite o salário máximo...";
    $v["id"]="max_salario";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="submit";    
    $v["name"]="input";    
    $v["value"]="Enviar";
    $i = new Input($v);

    $f->adiciona_elemento($i);
    
    $f->exibir();
?>
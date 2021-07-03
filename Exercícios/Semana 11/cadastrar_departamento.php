<?php
    include "cabecalho.php";
    include "classeFormulario.php";
    include "conexao.php";

    if(!empty($_POST)){        
        $id_departamento = $_POST["ID_DEPARTAMENTO"];
        $nome_departamento = $_POST["NOME_DEPARTAMENTO"];
        $id_gerente = $_POST["ID_GERENTE"];
        $id_localizacao = $_POST["ID_LOCALIZACAO"];
        $sql = "INSERT INTO departamento VALUES('$id_departamento','$nome_departamento','$id_gerente', '$id_localizacao')";
        $conexao->query($sql);
        echo "<span class='ok'>Localização inserida com sucesso</span><br />";
    }

    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Departamento";

    $f = new Formulario($v);

    $v = null;
    $v["type"]="number";
    $v["name"]="ID_DEPARTAMENTO";
    $v["placeholder"]="Digite o ID do Departamento...";
    $v["id"]="departamento_input";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="NOME_DEPARTAMENTO";
    $v["placeholder"]="Digite o nome do Departamento...";
    $v["id"]="nome_departamento_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="ID_GERENTE";
    $v["placeholder"]="Digite o ID do Gerente...";
    $v["id"]="gerente_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="ID_LOCALIZACAO";
    $v["placeholder"]="Digite o ID da Localização...";
    $v["id"]="localizacao_id";
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
<?php
    include "cabecalho.php";
    include "classeFormulario.php";

//se não estiver vazio, exibe formulario
    if(!empty($_POST)){
        include "conexao.php";
        $id_regiao = $_POST["ID_REGIAO"];
        $nome_regiao = $_POST["NOME_REGIAO"];
//inserindo as informações passadas pelo formulario para os campos(values) abaixo
        $sql = "INSERT INTO REGIAO VALUES('$id_regiao','$nome_regiao')";
        $conexao->query($sql);
        echo "<span class='ok'>Região inserida com sucesso</span><br />";
    }

    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Região";

    $f = new Formulario($v);

    $v = null;
    $v["type"]="text";
    $v["name"]="ID_REGIAO";
    $v["placeholder"]="Digite o ID da Região...";
    $v["id"]="regiao_id";
    $v["class"]="formulario input";
    $i = new Input($v);    
    
    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="NOME_REGIAO";
    $v["placeholder"]="Digite o nome da Região...";
    $v["id"]="nome_regiao_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

//botão submit.
    $v = null;
    $v["type"]="submit";    
    $v["name"]="input";    
    $v["value"]="Enviar";
    $i = new Input($v);

    $f->adiciona_elemento($i);
    
    $f->exibir();
?>
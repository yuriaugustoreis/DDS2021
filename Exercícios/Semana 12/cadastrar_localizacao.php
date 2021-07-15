<?php
    include "cabecalho.php";
    include "classeFormulario.php";
    include "conexao.php";

    if(!empty($_POST)){        
        $id_localizacao = $_POST["ID_LOCALIZACAO"];
        $endereco = $_POST["ENDERECO"];
        $cep = $_POST["CEP"];
        $cidade = $_POST["CIDADE"];
        $estado = $_POST["ESTADO"];
        $id_pais = $_POST["ID_PAIS"];
        $sql = "INSERT INTO localizacao VALUES('$id_localizacao','$endereco','$cep', '$cidade', '$estado', '$id_pais')";
        $conexao->query($sql);
        echo "<span class='ok'>Localização inserida com sucesso</span><br />";
    }

    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Localização";

    $f = new Formulario($v);

    $v = null;
    $v["type"]="text";
    $v["name"]="ID_LOCALIZACAO";
    $v["placeholder"]="Digite o ID da Localização...";
    $v["id"]="localizacao_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="ENDERECO";
    $v["placeholder"]="Digite o Endereço...";
    $v["id"]="endereco_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="CEP";
    $v["placeholder"]="Digite o CEP...";
    $v["id"]="cep_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="CIDADE";
    $v["placeholder"]="Digite o Nome da Cidade...";
    $v["id"]="cidade_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="ESTADO";
    $v["placeholder"]="Digite o Estado...";
    $v["id"]="estado_id";
    $v["class"]="formulario input";
    $i = new Input($v);

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="ID_PAIS";
    $v["placeholder"]="Digite a ID do País...";
    $v["id"]="silga_pais_id";
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
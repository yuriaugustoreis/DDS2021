<?php
    include "cabecalho.php";
    include "classeFormulario.php";
    include "conexao.php";

    if(!empty($_POST)){        
        $id_funcionario = $_POST["ID_FUNCIONARIO"];
        $nome_funcionario = $_POST["NOME"];
        $sobrenome_funcionario = $_POST["SOBRENOME"];
        $email_funcionario = $_POST["EMAIL"];
        $telefone_funcionario = $_POST["TELEFONE"];
        $data_contratacao = $_POST["DATA_CONTRATACAO"];
        $id_funcao = $_POST["ID_FUNCAO"];
        $salario_funcionario = $_POST["SALARIO"];
        $comissao_funcionario = $_POST["COMISSAO"];
        $id_gerente = $_POST["ID_GERENTE"];
        $id_departamento = $_POST["ID_DEPARTAMENTO"];
        $sql = "INSERT INTO funcionario VALUES('$id_funcionario','$nome_funcionario','$sobrenome_funcionario','$email_funcionario', '$telefone_funcionario', '$data_contratacao', '$id_funcao', '$salario_funcionario', '$comissao_funcionario','$id_gerente','$id_departamento')";
        $conexao->query($sql);
        echo "<span class='ok'>Localização inserida com sucesso</span><br />";
    }

    $v["method"]="post";
    $v["action"]="#";
    $v["titulo"]="Cadastro de Funcionário";

    $f = new Formulario($v);

    $v = null;
    $v["type"]="number";
    $v["name"]="ID_FUNCIONARIO";
    $v["placeholder"]="Digite o ID do Funcionário...";
    $v["id"]="funcionario_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="NOME";
    $v["placeholder"]="Digite o Nome do Funcionário...";
    $v["id"]="nome_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="SOBRENOME";
    $v["placeholder"]="Digite o Sobrenome do Funcionário...";
    $v["id"]="sobrenome_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="EMAIL";
    $v["placeholder"]="Digite o Email do Funcionário...";
    $v["id"]="email_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="TELEFONE";
    $v["placeholder"]="Digite o Telefone do Funcionário...";
    $v["id"]="funcionario_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="DATA_CONTRATACAO";
    $v["placeholder"]="Digite Data de Contratação...";
    $v["id"]="data_func";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="text";
    $v["name"]="ID_FUNCAO";
    $v["placeholder"]="Digite o ID da Função...";
    $v["id"]="funcao_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="SALARIO";
    $v["placeholder"]="Digite o Salário do Funcionário...";
    $v["id"]="salario_id";
    $v["class"]="formulario input";
    $i = new Input($v);    

    $f->adiciona_elemento($i);

    $v = null;
    $v["type"]="number";
    $v["name"]="COMISSAO";
    $v["placeholder"]="Digite a Comissão do Funcionário...";
    $v["id"]="comissao_id";
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
    $v["name"]="ID_DEPARTAMENTO";
    $v["placeholder"]="Digite o ID do Departamento...";
    $v["id"]="departamento_id";
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
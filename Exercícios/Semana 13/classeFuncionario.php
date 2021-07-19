<?php


class Funcionario{

public $id_funcionario;
public $nome;
public $sobrenome;
public $email;
public $telefone;
public $data_contratacao;
public $id_funcao;
public $salario;
public $comissao;
public $id_gerente;
public $id_departamento;

//construct
public function __construct($valores){
    //Se eu usar o ::parent ele puxa todos os dados (mas só quero a chave estrangeira)             ??
    $this->id_funcionario = $valores["ID_FUNCIONARIO"];
    $this->nome = $valores["NOME"];
    $this->sobrenome = $valores["SOBRENOME"];
    $this->email = $valores["EMAIL"];
    $this->telefone = $valores["TELEFONE"];
    $this->data_contratacao = $valores["DATA_CONTRATACAO"];
    $this->id_funcao = $valores["ID_FUNCAO"];
    $this->salario = $valores["SALARIO"];
    $this->comissao = $valores["COMISSAO"];
    $this->id_gerente = $valores["ID_GERENTE"];
    $this->id_departamento = $valores["ID_DEPARTAMENTO"];
}

public function exibir(){
    //esse id_região do primeiro echo é puxado dentro da minha variável (regiao no caso) do arquivo JS
    //se esse id_regiao nao for passado ele não apaga o nó (de forma assíncrona/sem atualizar a pag)
    //o ID do THIS (JS) o controle quem faz é essa div abaixo!!!!
    echo "<div id='id_controle_funcionario$this->id_funcionario'>";
    //div e ID somente para controle... se usar esse id no botão alterar não da certo
    echo "<form id='form$this->id_funcionario'>";
    echo "<input type='hidden' name='none' value='$this->id_funcionario'/>";
    echo "<hr>";
    //utilizando um span (container generico) para alterar o texto. PRECISA ser assim, cada campo precisa ter um span.
    echo "<b>ID Funcionário: </b><span id='id_funcao$this->id_funcionario'>$this->id_funcionario</span><br>";
    echo "<b>Nome: </b><span id='id_funcao$this->id_funcionario'>$this->nome</span><br>";
    echo "<b>Sobrenome: </b><span id='id_funcao$this->id_funcionario'>$this->sobrenome</span><br>";
    echo "<b>Email: </b><span id='id_funcao$this->id_funcionario'>$this->email</span><br>";
    echo "<b>Telefone: </b><span id='id_funcao$this->id_funcionario'>$this->telefone</span><br>";
    echo "<b>Data de Contratação: </b><span id='id_funcao$this->id_funcionario'>$this->data_contratacao</span><br>";
    echo "<b>ID Função: </b><span id='id_funcao$this->id_funcionario'>$this->id_funcao</span><br>";
    echo "<b>Salário: </b><span id='id_funcao$this->id_funcionario'>$this->salario</span><br>";
    echo "<b>Comissão: </b><span id='titulo_funcao$this->id_funcionario'>$this->comissao</span><br>";
    echo "<b>ID Gerente: </b><span id='salario_minimo$this->id_funcionario'>$this->id_gerente</span><br>";
    echo "<b>ID Departamento: </b><span id='salario_maximo$this->id_funcionario'>$this->id_departamento</span><br>";
    //as duas variáveis depois do this precisa ser definidas (no construct)

    //Botão de Alterar e Remover 
    echo "<button type='button' class='alterar_funcionario' value='$this->id_funcionario'>Alterar</button> 
          <button type='button' class='alterando_funcionario' value='$this->id_funcionario' style='display:none'>Alterar</button> 
          <button class='remover_funcionario' value='$this->id_funcionario'>Remover</button>
          </form>";

    echo "</hr>";
    echo "</div>";
}

}
?>
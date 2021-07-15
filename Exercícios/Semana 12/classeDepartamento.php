<?php

    include_once "classePais.php";

class Departamento extends Pais{

public $id_departamento;
public $nome_departamento;
public $id_gerente;

//construct
public function __construct($valores){
    //Se eu usar o ::parent ele puxa todos os dados (mas só quero a chave estrangeira)             ??
    $this->id_departamento = $valores["ID_DEPARTAMENTO"];
    $this->nome_departamento = $valores["NOME_DEPARTAMENTO"];
    $this->id_gerente = $valores["ID_GERENTE"];
    $this->id_localizacao = $valores["ID_LOCALIZACAO"];
}

public function exibir(){
    //esse id_região do primeiro echo é puxado dentro da minha variável (regiao no caso) do arquivo JS
    //se esse id_regiao nao for passado ele não apaga o nó (de forma assíncrona/sem atualizar a pag)
    //o ID do THIS (JS) o controle quem faz é essa div abaixo!!!!
    echo "<div id='id_controle_departamento$this->id_departamento'>";
    //div e ID somente para controle... se usar esse id no botão alterar não da certo
    echo "<form id='form$this->id_departamento'>";
    echo "<input type='hidden' name='none' value='$this->id_departamento'/>";
    echo "<hr>";
    //utilizando um span (container generico) para alterar o texto. PRECISA ser assim, cada campo precisa ter um span.
    echo "<b>ID Departamento: </b><span id='id_departamento$this->id_departamento'>$this->id_departamento</span><br>";
    echo "<b>Nome do Departamento: </b><span id='nome_departamento$this->id_departamento'>$this->nome_departamento</span><br>";
    echo "<b>ID do Gerente: </b><span id='id_gerente$this->id_departamento'>$this->id_gerente</span><br>";
    echo "<b>ID Localização: </b><span id='id_localizacao$this->id_departamento'>$this->id_localizacao</span><br>";
    //as duas variáveis depois do this precisa ser definidas (no construct)

    //Botão de Alterar e Remover 
    echo "<button type='button' class='alterar_departamento' value='$this->id_departamento'>Alterar</button> 
          <button type='button' class='alterando_departamento' value='$this->id_departamento' style='display:none'>Alterar</button> 
          <button class='remover_departamento' value='$this->id_departamento'>Remover</button>
          </form>";

    echo "</hr>";
    echo "</div>";
}

}
?>

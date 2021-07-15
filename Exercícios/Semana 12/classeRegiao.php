<?php

    class Regiao {

//montagem da class... exatamente igual a montagem do cadastro
public $id_regiao; 
public $nome_regiao;

//construct
public function __construct($valores){
    $this->id_regiao = $valores["ID_REGIAO"];
    $this->nome_regiao = $valores["NOME_REGIAO"];
}

public function exibir(){
    //esse id_região do primeiro echo é puxado dentro da minha variável (regiao no caso) do arquivo JS
    //se esse id_regiao nao for passado ele não apaga o nó (de forma assíncrona/sem atualizar a pag)
    echo "<div id='id_regiao$this->id_regiao'>";
    //div e ID somente para controle... se usar esse id no botão alterar não da certo
    echo "<form id='form$this->id_regiao'>";
    echo "<input type='hidden' name='none' value='$this->id_regiao'/>";
    echo "<hr>";
    //utilizando um span (container generico) para alterar o texto. PRECISA ser assim, cada campo precisa ter um span.
    echo "<b>Id Região: </b><span id='regiao_id$this->id_regiao'>$this->id_regiao</span><br>";
    echo "<b>Nome Região: </b><span id='nome_regiao$this->id_regiao'>$this->nome_regiao</span><br>";
    //as duas variáveis depois do this precisa ser definidas (no construct)
    //após o nome do id - precisa colocar a chave primária (no caso id_regiao) e depois o valor para "ser modificado/exibido"

    //Botão de Alterar e Remover 
    echo "<button type='button' class='alterar' value='$this->id_regiao'>Alterar</button> 
          <button type='button' class='alterando' value='$this->id_regiao' style='display:none'>Alterar</button> 
          <button class='remover' value='$this->id_regiao'>Remover</button>
          </form>";

    echo "</hr>";
    echo "</div>";
}

}
?>
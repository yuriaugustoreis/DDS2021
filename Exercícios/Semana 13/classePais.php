<?php

    include_once "classeRegiao.php";

class Pais extends Regiao {

public $id_pais;
public $nome_pais;

//construct
public function __construct($valores){
    //Se eu usar o ::parent ele puxa todos os dados (mas só quero a chave estrangeira)             ??
    $this->id_regiao = $valores["ID_REGIAO"];
    $this->id_pais = $valores["ID_PAIS"];
    $this->nome_pais = $valores["NOME_PAIS"];
}

public function exibir(){
    //esse id_região do primeiro echo é puxado dentro da minha variável (regiao no caso) do arquivo JS
    //se esse id_regiao nao for passado ele não apaga o nó (de forma assíncrona/sem atualizar a pag)
    //o ID do THIS (JS) o controle quem faz é essa div abaixo!!!!
    echo "<div id='id_controle_pais$this->id_pais'>";
    //div e ID somente para controle... se usar esse id no botão alterar não da certo
    echo "<form id='form$this->id_pais'>";
    echo "<input type='hidden' name='none' value='$this->id_pais'/>";
    echo "<hr>";
    //utilizando um span (container generico) para alterar o texto. PRECISA ser assim, cada campo precisa ter um span.
    echo "<b>ID Região: </b><span id='id_regiao$this->id_pais'>$this->id_regiao</span><br>";
    echo "<b>ID País: </b><span id='id_pais$this->id_pais'>$this->id_pais</span><br>";
    echo "<b>Nome do País: </b><span id='nome_pais$this->id_pais'>$this->nome_pais</span><br>";
    //as duas variáveis depois do this precisa ser definidas (no construct)

    //Botão de Alterar e Remover 
    echo "<button type='button' class='alterar_pais' value='$this->id_pais'>Alterar</button> 
          <button type='button' class='alterando_pais' value='$this->id_pais' style='display:none'>Alterar</button> 
          <button class='remover_pais' value='$this->id_pais'>Remover</button>
          </form>";

    echo "</hr>";
    echo "</div>";
}

}
?>

<!-- #Para controle das chaves precisa SEMPRE colocar (DIV ID CONTROLE) - E replicar sempre antes dos outros THIS
      Assim, ele abre todas as caixinhas para alteração, caso não esteja nesse alinhamento não abrirá -->
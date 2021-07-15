<?php


class Funcao {

public $id_funcao;
public $titulo_funcao;
public $salario_minimo;
public $salario_maximo;

//construct
public function __construct($valores){
    //Se eu usar o ::parent ele puxa todos os dados (mas só quero a chave estrangeira)             ??
    $this->id_funcao = $valores["ID_FUNCAO"];
    $this->titulo_funcao = $valores["TITULO_FUNCAO"];
    $this->salario_minimo = $valores["SALARIO_MINIMO"];
    $this->salario_maximo = $valores["SALARIO_MAXIMO"];
}

public function exibir(){
    //esse id_região do primeiro echo é puxado dentro da minha variável (regiao no caso) do arquivo JS
    //se esse id_regiao nao for passado ele não apaga o nó (de forma assíncrona/sem atualizar a pag)
    //o ID do THIS (JS) o controle quem faz é essa div abaixo!!!!
    echo "<div id='id_controle_funcao$this->id_funcao'>";
    //div e ID somente para controle... se usar esse id no botão alterar não da certo
    echo "<form id='form$this->id_funcao'>";
    echo "<input type='hidden' name='none' value='$this->id_funcao'/>";
    echo "<hr>";
    //utilizando um span (container generico) para alterar o texto. PRECISA ser assim, cada campo precisa ter um span.
    echo "<b>ID Função: </b><span id='id_funcao$this->id_funcao'>$this->id_funcao</span><br>";
    echo "<b>Título Função: </b><span id='titulo_funcao$this->id_funcao'>$this->titulo_funcao</span><br>";
    echo "<b>Salário Mínimo: </b><span id='salario_minimo$this->id_funcao'>$this->salario_minimo</span><br>";
    echo "<b>Salário Máximo: </b><span id='salario_maximo$this->id_funcao'>$this->salario_maximo</span><br>";
    //as duas variáveis depois do this precisa ser definidas (no construct)

    //Botão de Alterar e Remover 
    echo "<button type='button' class='alterar_funcao' value='$this->id_funcao'>Alterar</button> 
          <button type='button' class='alterando_funcao' value='$this->id_funcao' style='display:none'>Alterar</button> 
          <button class='remover_funcao' value='$this->id_funcao'>Remover</button>
          </form>";

    echo "</hr>";
    echo "</div>";
}

}
?>
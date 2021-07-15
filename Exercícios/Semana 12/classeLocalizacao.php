<?php

    include_once "classePais.php";

class Localizacao extends Pais {

public $id_localizacao;
public $endereco;
public $cep;
public $cidade;
public $estado;
public $id_pais;

//construct
public function __construct($valores){
    //Se eu usar o ::parent ele puxa todos os dados (mas só quero a chave estrangeira)             ??
    $this->id_localizacao = $valores["ID_LOCALIZACAO"];
    $this->endereco = $valores["ENDERECO"];
    $this->cep = $valores["CEP"];
    $this->cidade = $valores["CIDADE"];
    $this->estado = $valores["ESTADO"];
    $this->id_pais = $valores["ID_PAIS"];

    //Precisa estar EXATAMENTE como o Banco de Dados, se não as informações não chegam!
}

public function exibir(){
    //esse id_região do primeiro echo é puxado dentro da minha variável (regiao no caso) do arquivo JS
    //se esse id_regiao nao for passado ele não apaga o nó (de forma assíncrona/sem atualizar a pag)
    //o ID do THIS (JS) o controle quem faz é essa div abaixo!!!!
    echo "<div id='id_controle_localizacao$this->id_pais'>";
    //div e ID somente para controle... se usar esse id no botão alterar não da certo
    echo "<form id='form$this->id_pais'>";
    echo "<input type='hidden' name='none' value='$this->id_pais'/>";
    echo "<hr>";
    //utilizando um span (container generico) para alterar o texto. PRECISA ser assim, cada campo precisa ter um span.
    echo "<b>Localização: </b><span id='id_localizacao$this->id_pais'>$this->id_localizacao</span><br>";
    echo "<b>Endereço: </b><span id='id_endereco$this->id_pais'>$this->endereco</span><br>";
    echo "<b>CEP: </b><span id='id_cep$this->id_pais'>$this->cep</span><br>";
    echo "<b>Cidade: </b><span id='id_cidade$this->id_pais'>$this->cidade</span><br>";
    echo "<b>Estado: </b><span id='id_estado$this->id_pais'>$this->estado</span><br>";
    echo "<b>ID do País: </b><span id='nome_pais$this->id_pais'>$this->id_pais</span><br>";
    //as duas variáveis depois do this precisa ser definidas (no construct)

    //Botão de Alterar e Remover 
    echo "<button type='button' class='alterar_localizacao' value='$this->id_pais'>Alterar</button> 
          <button type='button' class='alterando_localizacao' value='$this->id_pais' style='display:none'>Alterar</button> 
          <button class='remover_localizacao' value='$this->id_pais'>Remover</button>
          </form>";

    echo "</hr>";
    echo "</div>";

    }
}
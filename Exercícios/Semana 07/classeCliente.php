<?php

class Cliente{

    public $nome;
    public $cpf;
    public $email;
    public $endereco;
   
    public function __construct($valores){
        $this->nome = $valores["nome"];
        $this->cpf = $valores["cpf"];
        $this->email = $valores["email"];
        $this->endereco = $valores["endereco"];
    }

    public function exibir(){
        echo "<b>Cliente: </b>$this->nome<br />";
        echo "<b>Cpf: </b>$this->cpf<br />";
        echo "<b>Email: </b>$this->email<br />";
        echo "<b>Endereço: </b>$this->endereco<br />";
        echo "<hr />";
    }

}


?>
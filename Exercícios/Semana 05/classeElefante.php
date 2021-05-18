<?php

    require_once "classeAnimal.php";

    class Elefante extends Animal{
        public $tamanho_tromba;

        public function __construct($valores){
            $this->tamanho_tromba = $valores["tamanhoTromba"];
            parent::__construct($valores);
        }

        public function exibirDados(){
            echo '<p>Tamanho da Tromba: '.$this->tamanho_tromba.'</p>';
    }
}
?>
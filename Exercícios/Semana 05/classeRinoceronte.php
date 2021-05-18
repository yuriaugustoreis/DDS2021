<?php

    require_once "classeAnimal.php";

    class Rinoceronte extends Animal{
        public $tamanho_chifre;
    
        public function __construct($valores){
            $this->tamanho_chifre = $valores["tamanhoChifre"];
            parent::__construct($valores);
        }

        public function exibirDados(){
        echo '<p>Tamanho do Chifre:'.$this->tamanho_chifre.'</p>';
    }
}
?>
<?php

    require_once "classeAnimal.php";

    class Rinoceronte extends Animal{
        public $tamanho_chifre;
    

    public function exibirDados(){
        echo '<p>Tamanho do Chifre:'.$this->tamanho_chifre.'</p>';
    }
}
?>
<?php

    require_once "classeAnimal.php";

    class Leao extends Animal{
        public $tamanho_juba;


    public function exibirDados(){
        echo '<p>Tamanho da Juba: '.$this->tamanho_juba.'</p>';
    }
    }
?>

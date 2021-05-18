<?php

    require_once "classeAnimal.php";

    class Elefante extends Animal{
        public $tamanho_tromba;

        public function exibirDados(){
            echo '<p>Tamanho da Tromba: '.$this->tamanho_tromba.'</p>';
    }
}
?>
<?php

    require_once "classeAnimal.php";

    class Cavalo extends Animal{
        public $tamanho_crina;
        public $cor_pelo;

    public function exibirDados(){
        echo '<p>Tamanho da Crina: '.$this->tamanho_crina.'</p>
            <p>Cor do Pelo: '.$this->cor_pelo.'</p>';
    }
    }
?>



<?php

    require_once "classeAnimal.php";

    class Cavalo extends Animal{
        public $tamanho_crina;
        public $cor_pelo;

        public function __construct($valores){
            $this->tamanho_crina = $valores["tamanhoCrina"];
            $this->cor_pelo = $valores["corPelo"];
            parent::__construct($valores);
        }

        public function exibirDados(){
        echo '<p>Tamanho da Crina: '.$this->tamanho_crina.'</p>
            <p>Cor do Pelo: '.$this->cor_pelo.'</p>';
    }
    }
?>



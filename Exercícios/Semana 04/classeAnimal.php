<?php
    
    class Animal{
        public $peso;
        public $altura;
        public $dataNasc;
        public $sexo;

        public function exibirSessao(){
            echo '<p>Peso: '.$this->peso.' Kgs.</>
            <p>Altura: '.$this->altura.' Mts.</p>
            <p>Data Nascimento: '.$this->dataNasc.'</p>
            <p>Sexo: '.$this->sexo.'.</p>';
    }
}
?>
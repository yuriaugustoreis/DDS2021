<?php

    require_once "classeEntrada.php";
    require_once "interfaceExibicao.php";

    class TextArea extends Entrada implements Exibicao{
        public $cols;
        public $rows;

        public function __construct($valores){
            $this->cols=$valores["cols"];
            $this->rows=$valores["rows"];
            parent::__construct($valores);
        }

        public function exibir(){
            echo "<textarea name='$this->name' class='$this->class' cols='$this->cols'
                    rows='$this->rows' placeholder='$this->placeholder'></textarea><br />";
        }
    }
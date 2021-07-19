<?php

include "cabecalho.php";
include "classeFuncao.php";
include "conexao.php";

//mostrando todas informações... puxando tudo!
$sql = "SELECT * FROM funcao";

//query de conexão
$resultado = $conexao->query($sql) or die(print_r($conexao->errorInfo()));

if($resultado->rowCount()>0){
    
    foreach($resultado as $i=>$t){
        //foreach percorrend todas as colunas do bd
        $c = new Funcao($t);        
        $c->exibir();

    }

}
else {
    echo "Não há dados cadastrados";
}

?>
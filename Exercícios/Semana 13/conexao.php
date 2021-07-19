<?php

$sgbd="mysql";
$host ="localhost";
$usuario="root";
$senha="pwdpwd";
$bd="rh";

$conexao = new PDO("$sgbd:host=$host;dbname=$bd",$usuario,$senha);

?>
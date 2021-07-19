  
<?php
    require_once "conexao.php";

    //Recebe dados do formulario!
    $user = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email='$user' AND senha='$senha';";
    $resultado = $conexao->query($sql);

    //Consulta...
    if($resultado->rowCount() == '1'){
        // Percorre o resultado da consulta 
        foreach($resultado as $i=>$t){
            // Pega o id_usuario e o perfil
            $id_usuario = $t["id_usuario"];
            $perfil = $t["perfil"];
        }
        session_start();
        // Salva o id_usaurio e o perfil do usuario na sessao
        $_SESSION["autorizado"] = $id_usuario;
        $_SESSION["perfil"] = $perfil;
        header("location: cabecalho.php");
    }
    else{
        // Retorna com um dado erro com o metodo GET, que no arquivo login entendera e exibira uma msg de erro
        header("location: login.php?erro=1");
    }
?>
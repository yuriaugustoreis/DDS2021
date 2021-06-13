<?php
include "menu.php";
?>
        <form method="post" action="recebe_form_cliente.php">
        <?php

            include "classeInput.php";
            include "classeTextarea.php";

            $v["type"]="text";
            $v["name"]="nome";
            $v["id"]="nome";
            $v["class"]="i";
            $v["placeholder"]="Digite o nome do cliente...";
            $i = new Input($v);
            $i->exibir();

            $v = null;
            $v["type"]="number";
            $v["name"]="cpf";
            $v["id"]="cpf";
            $v["class"]="i";
            $v["placeholder"]="Digite o cpf do cliente...";
            $i = new Input($v);
            $i->exibir();

            $v = null;
            $v["type"]="text";
            $v["name"]="email";
            $v["id"]="email";
            $v["class"]="i";
            $v["placeholder"]="Digite o email do cliente...";
            $i = new Input($v);
            $i->exibir();

            $v1["name"]="endereco";
            $v1["placeholder"]="Informe o endereço...";
            $v1["cols"]="40";
            $v1["rows"]="4";
            $v1["class"]="t";
            $t = new TextArea($v1);
            $t->exibir();

            $v=null;
            $v["type"]="submit";
            $v["name"]="Enviar";
            $v["id"]="Enviar";
            $v["class"]="i"; 
            $i = new Input($v);
            $i->exibir();            

        ?>

        </form>
    </body>
</html>
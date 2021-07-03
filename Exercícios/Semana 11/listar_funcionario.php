<?php
    include "cabecalho.php";
    include "conexao.php";

    $sql = "SELECT ID_FUNCIONARIO, NOME, SOBRENOME, EMAIL, TELEFONE, DATA_CONTRATACAO, ID_FUNCAO, SALARIO, COMISSAO, ID_GERENTE, ID_DEPARTAMENTO FROM FUNCIONARIO";
    
    $resultado = $conexao->query($sql);

?>
<center>
<table border='1'>
    <tr>
        <th>ID_FUNCIONARIO</th>
        <th>NOME</th>
        <th>SOBRENOME</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
        <th>DATA_CONTRATACAO</th>
        <th>ID_FUNCAO</th>
        <th>SALARIO</th>
        <th>COMISSAO</th>
        <th>ID_GERENTE</th>
        <th>ID_DEPARTAMENTO</th>
    </tr>

    <?php
        foreach($resultado as $i=>$t){
            echo "<tr>
                    <td>".$t["ID_FUNCIONARIO"]."</td>
                    <td>".$t["NOME"]."</td>
                    <td>".$t["SOBRENOME"]."</td>
                    <td>".$t["EMAIL"]."</td>
                    <td>".$t["TELEFONE"]."</td>
                    <td>".$t["DATA_CONTRATACAO"]."</td>
                    <td>".$t["ID_FUNCAO"]."</td>
                    <td>".$t["SALARIO"]."</td>
                    <td>".$t["COMISSAO"]."</td>
                    <td>".$t["ID_GERENTE"]."</td>
                    <td>".$t["ID_DEPARTAMENTO"]."</td>
                  </tr>";
        }
    ?>

</table>
</body>
</center>
</html>
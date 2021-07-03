<?php
    include "cabecalho.php";
    include "conexao.php";

    $sql = "SELECT ID_DEPARTAMENTO, NOME_DEPARTAMENTO, ID_GERENTE, ID_LOCALIZACAO FROM DEPARTAMENTO";
    
    $resultado = $conexao->query($sql);

?>
<center>
<table border='1'>
    <tr>
        <th>ID_DEPARTAMENTO</th>
        <th>NOME_DEPARTAMENTO</th>
        <th>ID_GERENTE</th>
        <th>ID_LOCALIZACAO</th>
    </tr>

    <?php
        foreach($resultado as $i=>$t){
            echo "<tr>
                    <td>".$t["ID_DEPARTAMENTO"]."</td>
                    <td>".$t["NOME_DEPARTAMENTO"]."</td>
                    <td>".$t["ID_GERENTE"]."</td>
                    <td>".$t["ID_LOCALIZACAO"]."</td>
                  </tr>";
        }
    ?>

</table>
</body>
</center>
</html>
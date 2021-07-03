<?php
    include "cabecalho.php";
    include "conexao.php";

    $sql = "SELECT ID_FUNCAO, TITULO_FUNCAO, SALARIO_MINIMO, SALARIO_MAXIMO FROM FUNCAO";
    
    $resultado = $conexao->query($sql);

?>
<center>
<table border='1'>
    <tr>
        <th>ID_FUNCAO</th>
        <th>TITULO_FUNCAO</th>
        <th>SALARIO_MINIMO</th>
        <th>SALARIO_MAXIMO</th>
    </tr>

    <?php
        foreach($resultado as $i=>$t){
            echo "<tr>
                    <td>".$t["ID_FUNCAO"]."</td>
                    <td>".$t["TITULO_FUNCAO"]."</td>
                    <td>".$t["SALARIO_MINIMO"]."</td>
                    <td>".$t["SALARIO_MAXIMO"]."</td>
                  </tr>";
        }
    ?>

</table>
</body>
</center>
</html>
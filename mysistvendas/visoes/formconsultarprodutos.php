<?php
    include '..\controles\cnnbdmysistvendas.php';
    
    
    echo "<table border=2>";
        echo "<tr>";
            echo "<th>Descrição</th>";
            echo "<th> Unidade </th>";
            echo "<th>Valor unitário</th>";
        echo "</tr>";  
        
        $con = abrirConexao();
        $sql = "SELECT * FROM produtos";
        $resultado = mysqli_query($con, $sql) or die ("ERRO.");

        while($registro = mysqli_fetch_array($resultado)){
            $desc = $registro['descricao'];
            $unidade = $registro['unidade'];
            $vlUnitario = $registro['vlUnitario'];
           
        echo "<tr>";
            echo "<td>".$desc."</td>";
            echo "<td>".$unidade."</td>";
            echo "<td>".$vlUnitario."</td>";
        echo "</tr>";
        }

    mysqli_close($con);
    echo "</table>";
        
        


?>
<?php
    include "..\controlers\manterclientes.php";
    
    echo "<table border=2>";
    echo "<tr>";
        echo "<th>CPF</th>";
        echo "<th>Nome</th>";
        echo "<th>Email</th>";
        echo "<th>Data de nascimento</th>";
        echo "<th>Idade</th>";
        
    echo "</tr>";  

    $con = abrirConexao();
    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query($con, $sql) or die ("ERRO!");

    while($registro = mysqli_fetch_array($resultado)) {
        $cpf = $registro['cpf'];
        $nome = $registro['nome'];
        $email = $registro['email'];
        $data_nascimento = $registro['data_nascimento'];
        $idade = $registro['idade'];

        echo "<tr>";
        echo "<td>".$cpf."</td>";
        echo "<td>".$nome."</td>";
        echo "<td>".$email."</td>";
        echo "<td>".$data_nascimento."</td>";
        echo "<td>".$idade."</td>";
        
    echo "</tr>";
   
    
    }

    mysqli_close($con);
    echo "<a href=\"formatualizarcliente.php\">Atualizar</a>";
    echo "</table>";

?>
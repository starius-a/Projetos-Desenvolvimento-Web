<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a>
    <table>
        <tr>
            <td><h2>Instâncias de Governança</h2></td>
        </tr>
        <tr>
            <td>Identificador</td>
            <td>Municipal</td>
            <td>Estadual</td>
            <td>Regional</td>
            <td>Nacional</td>
            <td>Internacional</td>
            <td>*</td>
            <td>*</td>
        </tr>

        <?php
        
            include "../../controles/controlar_instancias.php";

            $resultadoListagem = listarInstancias();

            while($registro = mysqli_fetch_array($resultadoListagem)){
                $municipal = $registro["municipal"];
                $estadual = $registro["estadual"];
                $regional = $registro["regional"];
                $nacional = $registro["nacional"];
                $internacional = $registro["internacional"];
                $fkid_municipios = $registro["fkid_municipios"];

                echo "</tr>";               
                    echo "<td>".$fkid_municipios."</td>";
                    echo "<td>".$municipal."</td>";
                    echo "<td>".$estadual."</td>";
                    echo "<td>".$regional."</td>";
                    echo "<td>".$nacional."</td>";
                    echo "<td>".$internacional."</td>";
                    echo "<td> <a href='editar_instancias.php?fkid_municipios=".$registro["fkid_municipios"]."'>Editar</a> </td>";
                    echo "<td> <a href='excluir_instancias.php?fkid_municipios=".$registro["fkid_municipios"]."'>Excluir</a> </td>";


            }
        ?>
        </tr>
    
    </table>
</body>
</html>
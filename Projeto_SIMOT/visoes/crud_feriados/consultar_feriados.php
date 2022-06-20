<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feriados cadastrados</title>
</head>
<body>

    <a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a>
    <table>
        <tr>
            <td><h1>Feriados da cidade</h1></td>
        </tr>
        <tr>
            <td>Identificador</td>
            <td>Nome do Feriado</td>
            <td>Data do Feriado</td>
            <td>Chave estrangeira</td>
            <td>*</td>
            <td>*</td>
        </tr>

            <?PHP
                include "../../controles/controlar_feriados.php";

                $result = listarFeriados();

                while($registro = mysqli_fetch_array($result)){
                    $id_feriados = $registro["id_feriados"];
                    $nome_feriado = $registro["nome_feriado"];
                    $data_feriado = $registro["data_feriado"];
                    $fkid_municipios = $registro["fkid_municipios"];

                    echo "<tr>";
                    echo "<td>".$id_feriados."</td>";
                    echo "<td>".$nome_feriado."</td>";
                    echo "<td>".$data_feriado."</td>";
                    echo "<td>".$fkid_municipios."</td>";
                    echo "<td><a href='editar_feriado.php?id_feriados=".$registro["id_feriados"]."'>Editar</a></td>";
                    echo "<td><a href='excluir_feriado.php?id_feriados=".$registro["id_feriados"]."'>Excluir</a></td>";


                }
            
            ?>

            </tr>
    </table>
    
</body>
</html>
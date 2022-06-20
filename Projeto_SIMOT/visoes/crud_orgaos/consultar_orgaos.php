<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados</title>
</head>
<body>
    <a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a>

    <table>
    a
        <tr>
        <td>Chave estrangeira</td>
        <td>Nome do órgão </td>
        <td>Logradouro</td>
        <td>Bairro</td>
        <td>Distrito</td>
        <td>CEP</td>
        <td>Email</td>
        <td>Site</td>
        <td>Quantidade de funcinários</td>
        <td>Funcionários com ensino superior em Turismo</td>
        <td>*</td>
        <td>*</td>

        </tr>
    
        <?PHP
        
        include "../../controles/controlar_orgaos.php";
        
        $result = listarOrgaos();

        while($registro = mysqli_fetch_array($result)){
            $fkid_municipios = $registro["fkid_municipios"];
            $nome_orgao_oficial_tur = $registro["nome_orgao_oficial_tur"];
            $logradouro = $registro["logradouro"];
            $bairro = $registro["bairro"];
            $distrito = $registro["distrito"];
            $cep = $registro["cep"];
            $email = $registro["email"];
            $site = $registro["site"];
            $qtd_funcionarios = $registro["qtd_funcionarios"];
            $qtd_funcionarios_superior_turismo = $registro["qtd_funcionarios_superior_turismo"];


            echo "<tr>";
            echo "<td> $fkid_municipios </td>";
            echo "<td>$nome_orgao_oficial_tur</td>";
            echo "<td>$logradouro</td>";
            echo "<td>$bairro</td>";
            echo "<td>$distrito</td>";
            echo "<td>$cep</td>";
            echo "<td>$email</td>";
            echo "<td>$site</td>";
            echo "<td>$qtd_funcionarios</td>";
            echo "<td>$qtd_funcionarios_superior_turismo</td>";
            echo "<td><a href='editar_orgao.php?fkid_municipios=".$registro["fkid_municipios"]."'>Editar</a></td>";
            echo "<td><a href='excluir_orgao.php?fkid_municipios=".$registro["fkid_municipios"]."'>Excluir</a></td>";
        }

        ?>

        </tr>
    
    
    
    </table>
</body>
</html>
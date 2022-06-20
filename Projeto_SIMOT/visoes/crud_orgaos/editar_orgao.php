<?PHP

    include "../../controles/controlar_orgaos.php";

    $fkid_municipios = "";
    $nome_orgao_oficial_tur = "";
    $logradouro = "";
    $bairro = "";
    $distrito = "";
    $cep = "";
    $email = "";
    $site = "";
    $qtd_funcionarios = "";
    $qtd_funcionarios_superior_turismo = "";

    if(isset($_GET["fkid_municipios"])){
        $fkid_municipios = $_GET["fkid_municipios"];

        $result = pegarOrgao($fkid_municipios);
        $numRegistros = mysqli_num_rows($result);

        if($numRegistros > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                $fkid_municipios = $row["fkid_municipios"];
                $nome_orgao_oficial_tur = $row["nome_orgao_oficial_tur"];
                $logradouro = $row["logradouro"];
                $bairro = $row["bairro"];
                $distrito = $row["distrito"];
                $cep = $row["cep"];
                $email = $row["email"];
                $site = $row["site"];
                $qtd_funcionarios = $row["qtd_funcionarios"];
                $qtd_funcionarios_superior_turismo = $row["qtd_funcionarios_superior_turismo"];
            }
        }
    }

    if(isset($_POST["btnEditarOrgao"])){
        if(isset($_POST["fkid_municipios"])) {
            $fkid_municipios = $_POST["fkid_municipios"];
        }
    
        if(isset($_POST["nome_orgao_oficial_tur"])) {
            $nome_orgao_oficial_tur = $_POST["nome_orgao_oficial_tur"];
        }
    
        if(isset($_POST["logradouro"])) {
            $logradouro = $_POST["logradouro"];
            
        }
    
        if(isset($_POST["bairro"])) {
            $bairro = $_POST["bairro"];
        }
    
        if(isset($_POST["distrito"])) {
            $distrito = $_POST["distrito"];
        }
    
        if(isset($_POST["cep"])) {
            $cep = $_POST["cep"];
            
        }
    
        if(isset($_POST["email"])) {
            $email = $_POST["email"];
        }
    
        if(isset($_POST["site"])) {
            $site = $_POST["site"];
        }
    
        if(isset($_POST["qtd_funcionarios"])) {
            $qtd_funcionarios = $_POST["qtd_funcionarios"];
        }
    
        if(isset($_POST["qtd_funcionarios_superior_turismo"])) {
            $qtd_funcionarios_superior_turismo = $_POST["qtd_funcionarios_superior_turismo"];
        }

        $msg = editarOrgao($fkid_municipios, $nome_orgao_oficial_tur, $logradouro, $bairro, $distrito, $cep, $email, $site, $qtd_funcionarios, $qtd_funcionarios_superior_turismo);
            
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Órgão</title>
</head>
<body>
    
    <form action="editar_orgao.php" method="POST">
        <table>
            <tr>
                <td><a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a></td>
            </tr>
            <tr>
                <td>Atualizar Órgão Oficial do Turismo</td>
            </tr>
            <tr>
                <td>Chave estrangeira</td>
                <td><input type="number" name="fkid_municipios" value=<?PHP echo "$fkid_municipios"?>></td>
            </tr>
            <tr>
                <td> Nome do Órgão Oficial do Turismo</td>
                <td> <input type="text" name="nome_orgao_oficial_tur" id="nomeOrgaoOficial" value=<?PHP echo "$nome_orgao_oficial_tur"?>></td>
            </tr>
            <tr>
                <td> Logradouro</td>
                <td> <input type="text" name="logradouro" id="logradouro" value=<?PHP echo "$logradouro"?>></td>
            </tr>
            <tr>
                <td> Bairro</td>
                <td> <input type="text" name="bairro" id="bairro" value=<?PHP echo "$bairro"?>></td>
            </tr>
            <tr>
                <td> Distrito</td>
                <td> <input type="text" name="distrito" id="distrito" value=<?PHP echo "$distrito"?>></td>
            </tr>
            <tr>
                <td> CEP</td>
                <td> <input type="text" name="cep" id="cep" value=<?PHP echo "$cep"?>></td>
            </tr>
            <tr>
                <td> Email</td>
                <td> <input type="text" name="email" id="email" value=<?PHP echo "$email"?>></td>
            </tr>
            <tr>
                <td> Site</td>
                <td> <input type="text" name="site" id="site" value=<?PHP echo "$site"?>></td>
            </tr>
            <tr>
                <td> Qunantidade de funcionários</td>
                <td> <input type="text" name="qtd_funcionarios" id="qtdFuncionarios" value=<?PHP echo "$qtd_funcionarios"?>></td>
            </tr>
            <tr>
                <td> Funcionários com ensino superior em Turismo</td>
                <td> <input type="text" name="qtd_funcionarios_superior_turismo" id="funcionariosSuperiorTurismo" value=<?PHP echo "$qtd_funcionarios_superior_turismo"?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnEditarOrgao" value="Atualizar"></td>
            </tr>
        
        
        </table>
    </form>
</body>
</html>
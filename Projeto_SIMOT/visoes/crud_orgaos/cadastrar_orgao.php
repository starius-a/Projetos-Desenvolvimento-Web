<?PHP

    include "../../controles/controlar_orgaos.php";

    $verificar = "";
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

    if(isset($_POST["btnCadastrarOrgao"])){
        $verificar = verificarEntradas($fkid_municipios, $nome_orgao_oficial_tur, $logradouro, $bairro, $distrito, $cep, $email, $site, $qtd_funcionarios, $qtd_funcionarios_superior_turismo);
        $msg = cadastrarOrgao($fkid_municipios, $nome_orgao_oficial_tur, $logradouro, $bairro, $distrito, $cep, $email, $site, $qtd_funcionarios, $qtd_funcionarios_superior_turismo);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Órgão</title>
</head>
<body>
    
    <form action="cadastrar_orgao.php" method="POST">
        <table>
            <tr>
                <td><a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a></td>
            </tr>
            <tr>
                <td><h1>Cadastrar Órgão Oficial do Turismo</h1></td>
            </tr>
            <tr>
                <td><?PHP  echo "$verificar"?></td>
            </tr>
            <tr>
                <td>Chave estrangeira</td>
                <td><input type="number" name="fkid_municipios"></td>
            </tr>
            <tr>
                <td> Nome do Órgão Oficial do Turismo</td>
                <td> <input type="text" name="nome_orgao_oficial_tur" id="nomeOrgaoOficial"></td>
            </tr>
            <tr>
                <td> Logradouro</td>
                <td> <input type="text" name="logradouro" id="logradouro"></td>
            </tr>
            <tr>
                <td> Bairro</td>
                <td> <input type="text" name="bairro" id="bairro"></td>
            </tr>
            <tr>
                <td> Distrito</td>
                <td> <input type="text" name="distrito" id="distrito"></td>
            </tr>
            <tr>
                <td> CEP</td>
                <td> <input type="text" name="cep" id="cep"></td>
            </tr>
            <tr>
                <td> Email</td>
                <td> <input type="text" name="email" id="site"></td>
            </tr>
            <tr>
                <td> Site</td>
                <td> <input type="text" name="site" id="site"></td>
            </tr>
            <tr>
                <td> Qunantidade de funcionários</td>
                <td> <input type="text" name="qtd_funcionarios" id="qtdFuncionarios"></td>
            </tr>
            <tr>
                <td> Funcionários com ensino superior em Turismo</td>
                <td> <input type="text" name="qtd_funcionarios_superior_turismo" id="funcionariosSuperiorTurismo"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnCadastrarOrgao" value="Cadastrar"></td>
            </tr>
        
        
        </table>
    </form>
</body>
</html>
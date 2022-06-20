<?PHP

    include "../../controles/controlar_feriados.php";

    $verificar = "";
    $msg = "";
    $nome_feriado = "";
    $data_feriado = "";
    $fkid_municipios = "";

    if(isset($_POST["nome_feriado"])){
        $nome_feriado = $_POST["nome_feriado"];
    }

    if(isset($_POST["data_feriado"])){
        $data_feriado = $_POST["data_feriado"];
    }

    if(isset($_POST["fkid_municipios"])){
        $fkid_municipios = $_POST["fkid_municipios"];
    }

    if(isset($_POST["btnCadastrarFeriado"])){
        $verificar = verificarEntradas($nome_feriado, $data_feriado, $fkid_municipios);
        $msg = cadastrarFeriado($nome_feriado, $data_feriado, $fkid_municipios);

    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar feriados</title>
</head>
<body>
    
    <form action="cadastrar_feriados.php" name="cadastrarFeriados" id="cadastrarFeriados" method = "POST">
        <table>
            <tr>
                <td><a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a></td>
            </tr>
            <tr>
                <td><h1>Cadastrar feriado</h1></td>
            </tr>
            <tr>
                <td>
                    <?PHP echo "$verificar"?>
                </td>
            </tr>
            <tr>
                <td>Nome do feriado:</td>
                <td><input type="text" name="nome_feriado" id="nomeFeriado"></td>
            </tr>
            <tr>
                <td>Data do feriado:</td>
                <td><input type="text" name="data_feriado" id="data_feriado"></td>
            </tr>
            <tr>
                <td>Chave estrangeira:</td>
                <td><input type="number"name="fkid_municipios"></td>
            </tr>
            <tr>
            <td><input type="submit" value="cadastrar" name="btnCadastrarFeriado"></td>
            </tr>
        
        </table>
    
    </form>
    
</body>
</html>
<?PHP

    include "../../controles/controlar_feriados.php";

    $id_feriados = "";
    $nome_feriado = "";
    $data_feriado = "";
    $fkid_municipios = "";

    if(isset($_GET["id_feriados"])){
        $id_feriados= $_GET["id_feriados"];

        $result = pegarFeriado($id_feriados);
        $numRegistros = mysqli_num_rows($result);

        if($numRegistros > 0) {
            while($row = mysqli_fetch_assoc($result)){
                $id_feriados = $row["id_feriados"];
                $nome_feriado = $row["nome_feriado"];
                $data_feriado = $row["data_feriado"];
                $fkid_municipios = $row["fkid_municipios"];
            }
        }
    }

    if(isset($_POST["btnAtualizarFeriado"])){

        if(isset($_POST["id_feriados"])){
            $id_feriados = $_POST["id_feriados"];
        }

        if(isset($_POST["nome_feriado"])){
            $nome_feriado = $_POST["nome_feriado"];
        }

        if(isset($_POST["data_feriado"])){
            $data_feriado = $_POST["data_feriado"];
        }

        if(isset($_POST["fkid_municipios"])){
            $fkid_municipios = $_POST["fkid_municipios"];
        }

        $msg = editarFeriados($id_feriados, $nome_feriado, $data_feriado, $fkid_municipios);


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
    
    <form action="editar_feriado.php" name="editarFeriado" id="editarFeriado" method = "POST">
        <table>
            <tr>
                <td><a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a></td>
            </tr>
            <tr>
                <td><h1>Atualizar feriado</h1></td>
            </tr>
            <tr>
                <td>Identificador:</td>
                <td><input type="text" name="id_feriados" id="idferiado" value="<?PHP echo "$id_feriados"?>"></td>
            </tr>
            <tr>
                <td>Nome do feriado:</td>
                <td><input type="text" name="nome_feriado" id="nomeFeriado" value="<?PHP echo "$nome_feriado"?>"></td>
            </tr>
            <tr>
                <td>Data do feriado:</td>
                <td><input type="text" name="data_feriado" id="data_feriado"value="<?PHP echo "$data_feriado"?>"></td>
            </tr>
            <tr>
                <td>Chave estrangeira:</td>
                <td><input type="number" name="fkid_municipios" value="<?PHP echo "$fkid_municipios"?>"></td>
            </tr>
            <tr>
            <td><input type="submit" value="Atualizar" name="btnAtualizarFeriado"></td>
            </tr>
        
        </table>
    
    </form>
    
</body>
</html>
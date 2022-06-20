<?PHP

    include "../../controles/controlar_caracteristicas.php";

    $verificar = "";
    $fkid_municipios = "";
    $area_total_km = "";
    $area_urbana_km = "";
    $area_rural_km = "";
    $ano_base_area = "";
    $populacao_total = "";
    $populacao_urbana = "";
    $populacao_rural = "";
    $ano_base_populacao = "";
    $altitude_media = "";
    $media_temperatura = "";
    $minima_temperatura = "";
    $maxima_temperatura = "";
    $meses_mais_frios = "";
    $meses_mais_quentes = "";
    $meses_mais_chuvosos = "";
    $meses_menos_chuvosos = "";
    $principais_atv_economicas = "";

    if(isset($_POST["fkid_municipios"])){
        $fkid_municipios = $_POST["fkid_municipios"];
    }

    if(isset($_POST["area_total_km"])){
        $area_total_km = $_POST["area_total_km"];
    }

    if(isset($_POST["area_urbana_km"])){
        $area_urbana_km = $_POST["area_urbana_km"];
    }

    if(isset($_POST["area_rural_km"])){
       $area_rural_km = $_POST["area_rural_km"];
    } 
    
    if(isset($_POST["ano_base_area"])){
        $ano_base_area = $_POST["ano_base_area"];
    }

    if(isset($_POST["populacao_total"])){
        $populacao_total = $_POST["populacao_total"];
    }

    if(isset($_POST["populacao_urbana"])){
        $populacao_urbana = $_POST["populacao_urbana"];
    }

    if(isset($_POST["populacao_rural"])){
        $populacao_rural = $_POST["populacao_rural"];
    }

    if(isset($_POST["ano_base_populacao"])){
        $ano_base_populacao = $_POST["ano_base_populacao"];
    }

    if(isset($_POST["altitude_media"])){
        $altitude_media = $_POST["altitude_media"];
    }

    if(isset($_POST["media_temperatura"])){
        $media_temperatura = $_POST["media_temperatura"];
    }

    if(isset($_POST["minima_temperatura"])){
        $minima_temperatura = $_POST["minima_temperatura"];
    }

    if(isset($_POST["maxima_temperatura"])){
        $maxima_temperatura = $_POST["maxima_temperatura"];
    }

    if(isset($_POST["meses_mais_frios"])){
        $meses_mais_frios = $_POST["meses_mais_frios"];

    }

    if(isset($_POST["meses_mais_quentes"])){
        $meses_mais_quentes = $_POST["meses_mais_frios"];
    }

    if(isset($_POST["meses_mais_chuvosos"])){
        $meses_mais_chuvosos = $_POST["meses_mais_chuvosos"];
    }

    if(isset($_POST["meses_menos_chuvosos"])){
        $meses_menos_chuvosos = $_POST["meses_mais_chuvosos"];
    }

    if(isset($_POST["principais_atv_economicas"])){
        $principais_atv_economicas = $_POST["principais_atv_economicas"];
    }

    if(isset($_POST["btnCadastrarCaracteristicas"])){
        $verificar = verificarEntradas($fkid_municipios, $area_total_km, $area_urbana_km, $area_rural_km, $ano_base_area, $populacao_total, $populacao_urbana, $populacao_rural, $ano_base_populacao, $altitude_media, $media_temperatura, $minima_temperatura, $maxima_temperatura, $meses_mais_frios, $meses_mais_quentes, $meses_mais_chuvosos, $meses_menos_chuvosos, $principais_atv_economicas);
        $msg = cadastrarCaracteristicas($fkid_municipios, $area_total_km, $area_urbana_km, $area_rural_km, $ano_base_area, $populacao_total, $populacao_urbana, $populacao_rural, $ano_base_populacao, $altitude_media, $media_temperatura, $minima_temperatura, $maxima_temperatura, $meses_mais_frios, $meses_mais_quentes, $meses_mais_chuvosos, $meses_menos_chuvosos, $principais_atv_economicas);
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar características municipais</title>
</head>
<body>
<form action="cadastrar_caracteristicas.php" id = "cadastrarCaracteristicas" method = "POST">
    
        <table>
            <tr>
                <td><a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a></td>
            </tr>
            <tr>
                <td><h1>Cadastrar características municipais</h1></td>
            </tr>
            <tr>
                <td><?PHP echo $verificar;?></td>
            </tr>
            <tr>
                <td>Chave estrangeira</td>
                <td><input type="number" name="fkid_municipios"></td>
            </tr>
            <tr>
                <td>Área total em Km</td>
                <td><input type="number" name="area_total_km" id="areaTotal"></td>
            </tr>
            <tr>
                <td>Área urbana em Km</td>
                <td><input type="number" name="area_urbana_km" id="areaUrbana"></td>
            </tr>
            <tr>
                <td>Área rural em Km</td>
                <td><input type="number" name="area_rural_km" id="areaRural"></td>
            </tr>
            <tr>
                <td>Área de acordo com o ano base</td>
                <td><input type="number" name="ano_base_area" id="anoBaseArea"></td>
            </tr>
            <tr>
                <td>População total</td>
                <td><input type="number" name="populacao_total" id="populacaoTotal"></td>
            </tr>
            <tr>
                <td>População urbana</td>
                <td><input type="number" name="populacao_urbana" id="populacaoUrbana"></td>
            </tr>
            <tr>
                <td>População rural</td>
                <td><input type="number" name="populacao_rural" id="populacaoRural"></td>
            </tr>
            <tr>
                <td>População de acordo com o ano base</td>
                <td><input type="number" name="ano_base_populacao" id="anoBasePopulacao"></td>
            </tr>
            <tr>
                <td>Altitude média</td>
                <td><input type="number" name="altitude_media" id="altitudeMedia"></td>
            </tr>
            <tr>
                <td>Temperatura média</td>
                <td><input type="number" name="media_temperatura" id="mediaTemperatura"></td>
            </tr>
            <tr>
                <td>Temperatura mínima</td>
                <td><input type="number" name="minima_temperatura" id="minimaTemperatura"></td>
            </tr>
            <tr>
                <td>Temperatura máxima</td>
                <td><input type="number" name="maxima_temperatura" id="maximaTemperatura"></td>
            </tr>
            <tr>
                <td>Meses mais frios</td>
                <td><input type="text" name="meses_mais_frios" id="mesesFrios"></td>
            </tr>
            <tr>
                <td>Meses mais quentes</td>
                <td><input type="text" name="meses_mais_quentes" id="mesesQuentes"></td>
            </tr>
            <tr>
                <td>Meses mais chuvosos</td>
                <td><input type="text" name="meses_mais_chuvosos" id="mesesMaisChuvosos"></td>
            </tr>
            <tr>
                <td>Meses menos chuvosos</td>
                <td><input type="text" name="meses_menos_chuvosos" id="mesesMenosChuvosos"></td>
            </tr>
            <tr>
                <td>Principais atividades econômicas</td>
                <td><input type="text" name="principais_atv_economicas" id="principaisAtividadesEconomicas"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnCadastrarCaracteristicas" value="Cadastrar"></td>
            </tr>
        </table>
</form>
    
</body>
</html>
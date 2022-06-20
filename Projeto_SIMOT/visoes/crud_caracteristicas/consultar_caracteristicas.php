<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar características</title>
</head>
<body>
    <a href="../crud_prefeituras/acessar_prefeitura.php">Voltar</a>

    <table>
        <tr>
            <td>Chave estrangeira </td>
            <td>Área total</td>
            <td>Área urbana </td>
            <td>Área rural </td>
            <td>Área ano base </td>
            <td>População total </td>
            <td>População urbana </td>
            <td>População rural </td>
            <td>Popuçação ano base </td>
            <td>Altitude média </td>
            <td>Temperatura média </td>
            <td>Temperatura mínima </td>
            <td>Temperatura máxima </td>
            <td>Meses mais frios </td>
            <td>Meses mais quentes </td>
            <td>Meses mais chuvosos </td>
            <td>Meses menos chuvosos </td>
            <td>Principais atividades econômicas </td>
            <td>*</td>
            <td>*</td>
        </tr>

        <?PHP
        
            include "../../controles/controlar_caracteristicas.php";

            $result = listarCaracteristicas();

            while($registro = mysqli_fetch_array($result)) {
                $fkid_municipios = $registro["fkid_municipios"];
                $area_total_km = $registro["area_total_km"];
                $area_urbana_km = $registro["area_urbana_km"];
                $area_rural_km = $registro["area_rural_km"];
                $ano_base_area = $registro["ano_base_area"];
                $populacao_total = $registro["populacao_total"];
                $populacao_urbana = $registro["populacao_urbana"];
                $populacao_rural = $registro["populacao_rural"];
                $ano_base_populacao = $registro["ano_base_populacao"];
                $altitude_media = $registro["altitude_media"];
                $media_temperatura = $registro["media_temperatura"];
                $minima_temperatura = $registro["minima_temperatura"];
                $maxima_temperatura = $registro["maxima_temperatura"];
                $meses_mais_frios = $registro["meses_mais_frios"];
                $meses_mais_quentes = $registro["meses_mais_quentes"];
                $meses_mais_chuvosos = $registro["meses_mais_chuvosos"];
                $meses_menos_chuvosos = $registro["meses_menos_chuvosos"];
                $principais_atv_economicas = $registro["principais_atv_economicas"];

                echo "<tr>";
                echo "<td> $fkid_municipios </td>";
                echo "<td> $area_total_km </td>";
                echo "<td> $area_urbana_km </td>";
                echo "<td> $area_rural_km </td>";
                echo "<td> $ano_base_area </td>";
                echo "<td> $populacao_total </td>";
                echo "<td> $populacao_urbana </td>";
                echo "<td> $populacao_rural </td>";
                echo "<td> $ano_base_populacao </td>";
                echo "<td> $altitude_media </td>";
                echo "<td> $media_temperatura </td>";
                echo "<td> $minima_temperatura </td>";
                echo "<td> $maxima_temperatura </td>";
                echo "<td> $meses_mais_frios </td>";
                echo "<td> $meses_mais_quentes </td>";
                echo "<td> $meses_mais_chuvosos </td>";
                echo "<td> $meses_menos_chuvosos </td>";
                echo "<td> $principais_atv_economicas </td>";
                echo "<td><a href='editar_caracteristicas.php?fkid_municipios=".$registro["fkid_municipios"]."'>Editar</a></td>";
                echo "<td><a href='excluir_caracteristicas.php?fkid_municipios=".$registro["fkid_municipios"]."'>Excluir</a></td>";
            }
        
        
        ?>

        </tr>

    </table>
</body>
</html>
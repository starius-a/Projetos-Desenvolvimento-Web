<?PHP

    include "../../controles/a_conexao.php";

    function verificarEntradas($fkid_municipios, $area_total_km, $area_urbana_km, $area_rural_km, $ano_base_area, $populacao_total, $populacao_urbana, $populacao_rural, $ano_base_populacao, $altitude_media, $media_temperatura, $minima_temperatura, $maxima_temperatura, $meses_mais_frios, $meses_mais_quentes, $meses_mais_chuvosos, $meses_menos_chuvosos, $principais_atv_economicas){


        if($fkid_municipios == ""){
            return "Informe a chave estrangeira.";
        }

        if($area_total_km == "") {
            return "Informe a área total.";
        }

        if($area_urbana_km == "") {
            return "Informe a área urbana.";
        }

        if($area_rural_km == "") {
            return "Informe a área rural.";
        }

        if($ano_base_area == "") {
            return "Informe a área total de acordo com ano base.";
        }

        if($populacao_total == "") {
            return "Informe a população total.";
        }

        if($populacao_urbana == "") {
            return "Informe a população urbana.";
        }

        if($populacao_rural == "") {
            return "Informe a população rural.";
        }

        if($ano_base_populacao == "") {
            return "Informe a população de acordo com o ano base.";
        }

        if($altitude_media == "") {
            return "Informe a altitude média.";
        }

        if($media_temperatura == "") {
            return "Informe a temperatura média.";
        }

        if($minima_temperatura == "") {
            return "Informe a temperatura mínima.";
        }

        if($maxima_temperatura == "") {
            return "Informe a temperatura máxima.";
        }

        if($meses_mais_frios == "") {
            return "Informe os meses mais frios.";
        }

        if($meses_mais_quentes == "") {
            return "Informe os meses mais quentes.";
        }

        if($meses_mais_chuvosos == "") {
            return "Informe os meses mais chuvosos.";
        }

        if($meses_menos_chuvosos == "") {
            return "Informe os meses menos chuvosos.";
        }

        if($principais_atv_economicas == "") {
            return "Informe as principais atividades econômicas.";
        }

        return "";

    }

    

    function cadastrarCaracteristicas($fkid_municipios, $area_total_km, $area_urbana_km, $area_rural_km, $ano_base_area, $populacao_total, $populacao_urbana, $populacao_rural, $ano_base_populacao, $altitude_media, $media_temperatura, $minima_temperatura, $maxima_temperatura, $meses_mais_frios, $meses_mais_quentes, $meses_mais_chuvosos, $meses_menos_chuvosos, $principais_atv_economicas) {

        $msg = verificarEntradas($fkid_municipios, $area_total_km, $area_urbana_km, $area_rural_km, $ano_base_area, $populacao_total, $populacao_urbana, $populacao_rural, $ano_base_populacao, $altitude_media, $media_temperatura, $minima_temperatura, $maxima_temperatura, $meses_mais_frios, $meses_mais_quentes, $meses_mais_chuvosos, $meses_menos_chuvosos, $principais_atv_economicas);

        if($msg == "") {
            $con = abrirConexao();

            $sql = "INSERT INTO bdsimot.Caracteristicas_Municipios (fkid_municipios, area_total_km, area_urbana_km, area_rural_km, ano_base_area, populacao_total, populacao_urbana, populacao_rural, ano_base_populacao, altitude_media, media_temperatura, minima_temperatura, maxima_temperatura, meses_mais_frios, meses_mais_quentes, meses_mais_chuvosos, meses_menos_chuvosos, principais_atv_economicas) VALUES ('$fkid_municipios', '$area_total_km', '$area_urbana_km', '$area_rural_km', '$ano_base_area', '$populacao_total', '$populacao_urbana', '$populacao_rural', '$ano_base_populacao', '$altitude_media', '$media_temperatura', '$minima_temperatura', '$maxima_temperatura', '$meses_mais_frios', '$meses_mais_quentes', '$meses_mais_chuvosos', '$meses_menos_chuvosos', '$principais_atv_economicas');";

            if(mysqli_query($con, $sql)) {
                echo "Cadastro realizado com sucesso! Verificar cadastro no <a href='consultar_caracteristicas.php'>banco de dados</a>.";
            } else {
                echo "Cadastro não realizado!";
                echo "ERRO: " .$sql. "</br>" . mysqli_error($con); 
            }

            mysqli_close($con);
        }

        return array($msg);

    }

    function pegarCaracteristicas($fkid_municipios){
        $con = abrirConexao();
        $sql = "SELECT * FROM bdsimot.Caracteristicas_Municipios WHERE fkid_municipios = $fkid_municipios;";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        return $result;
    }

    function listarCaracteristicas(){
        $con = abrirConexao();
        $sql = "SELECT * FROM bdsimot.Caracteristicas_Municipios;";
        $resultadoListagem = mysqli_query($con, $sql);
        mysqli_close($con);
        return $resultadoListagem;
    }

    function editarCaracteristicas($fkid_municipios, $area_total_km, $area_urbana_km, $area_rural_km, $ano_base_area, $populacao_total, $populacao_urbana, $populacao_rural, $ano_base_populacao, $altitude_media, $media_temperatura, $minima_temperatura, $maxima_temperatura, $meses_mais_frios, $meses_mais_quentes, $meses_mais_chuvosos, $meses_menos_chuvosos, $principais_atv_economicas){

        $msg = verificarEntradas($fkid_municipios, $area_total_km, $area_urbana_km, $area_rural_km, $ano_base_area, $populacao_total, $populacao_urbana, $populacao_rural, $ano_base_populacao, $altitude_media, $media_temperatura, $minima_temperatura, $maxima_temperatura, $meses_mais_frios, $meses_mais_quentes, $meses_mais_chuvosos, $meses_menos_chuvosos, $principais_atv_economicas);

        if($msg == "") {

            $con = abrirConexao();

             //nome da coluna, =, '', variavel, ",", eterno retorno.
            $sql = "UPDATE bdsimot.Caracteristicas_Municipios SET 
            fkid_municipios = '$fkid_municipios',
            area_total_km = '$area_total_km',
            area_urbana_km = '$area_urbana_km',
            area_rural_km = '$area_rural_km',
            ano_base_area = '$ano_base_area',
            populacao_total = '$populacao_total',
            populacao_urbana = '$populacao_urbana',
            populacao_rural = '$populacao_rural',
            ano_base_populacao = '$ano_base_populacao',
            altitude_media = '$altitude_media',
            media_temperatura = '$media_temperatura',
            minima_temperatura = '$minima_temperatura',
            maxima_temperatura = '$maxima_temperatura',
            meses_mais_frios = '$meses_mais_frios',
            meses_mais_quentes = '$meses_mais_quentes',
            meses_mais_chuvosos = '$meses_mais_chuvosos',
            meses_menos_chuvosos = '$meses_menos_chuvosos',
            principais_atv_economicas = '$principais_atv_economicas'
            WHERE fkid_municipios = '$fkid_municipios';";

            if(mysqli_query($con, $sql)) {
                echo "Alteração realizada com sucesso! Verificar alteração no <a href='consultar_caracteristicas.php'>banco de dados</a>.";
            } else {
                echo "Alteração não realizada!";
                echo "ERRO: " .$sql. "</br>" . mysqli_error($con);
            }

            mysqli_close($con);
        }

        return array($msg);
    }

    function excluirCaracteristicas($fkid_municipios) {
        $con = abrirConexao();
        $sql = "DELETE FROM bdsimot.Caracteristicas_Municipios WHERE fkid_municipios = $fkid_municipios;";

        if(mysqli_query($con, $sql)){
            $msg = "Características excluídas!";
        } else {
            $msg = "Características excluídas!";
        }

        mysqli_close($con);
        return $msg;
    }

?>
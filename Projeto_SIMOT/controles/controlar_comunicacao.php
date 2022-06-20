<?PHP

    include "../../controles/a_conexao.php";

    function verificarEntradas($fkid_municipios, $internet_radio, $internet_cabo, $internet_banda_larga,$internet_discada, $internet_wireless, $internet_3g, $telefonia_movel, $telefonia_fixa) {

        if($fkid_municipios == "") {
            return "Informe a chave estrangeira.";
        }

        if($internet_radio == "") {
            return "Informe se o município tem acesso à Internet via radio.";
        }

        if($internet_cabo == "") {
            return "Informe se o município tem acesso à Internet via cabo.";
        }

        if($internet_banda_larga == "") {
            return "Informe se o município utiliza Internet banda larga.";
        }

        if($internet_discada == "") {
            return "Informe se o município utiliza Internet discada.";
        }

        if($internet_wireless == "") {
            return "Informe se o município utiliza Internet Wireless ";
        }

        if($internet_3g == "") {
            return "Informe se o município utiliza Internet 3G.";
        }

        if($telefonia_movel == "") {
            return "Informe se o  município utiliza telefonia móvel.";
        }

        if($telefonia_fixa == "") {
            return "Informe se o município utiliza telefonia fixa.";
        }

        return "";

    }

    function cadastrarComunicacao($fkid_municipios, $internet_radio, $internet_cabo, $internet_banda_larga, $internet_discada, $internet_wireless, $internet_3g, $telefonia_movel, $area_todo_municipio_tmovel, $area_parte_municipio_tmovel, $telefonia_fixa, $area_todo_municipio_tfixa, $area_parte_municipio_tfixa) {

        $msg = verificarEntradas($fkid_municipios, $internet_radio, $internet_cabo, $internet_banda_larga,$internet_discada, $internet_wireless, $internet_3g, $telefonia_movel, $telefonia_fixa);

        if($msg == "") {
            $con = abrirConexao();

            $sql = "INSERT INTO servicos_comunicacao (fkid_municipios, internet_radio, internet_cabo, internet_banda_larga, internet_discada, internet_wireless, internet_3g, telefonia_movel, area_todo_municipio_tmovel, area_parte_municipio_tmovel, telefonia_fixa, area_todo_municipio_tfixa, area_parte_municipio_tfixa)
            VALUES ('$fkid_municipios', '$internet_radio', '$internet_cabo', '$internet_banda_larga', '$internet_discada', '$internet_wireless', '$internet_3g', '$telefonia_movel', '$area_todo_municipio_tmovel', '$area_parte_municipio_tmovel', '$telefonia_fixa', '$area_todo_municipio_tfixa', '$area_parte_municipio_tfixa');";

            if(mysqli_query($con, $sql)) {
                echo "Cadastro realizado com sucesso! Verificar no <a href='consultar_comunicacao.php'>banco de dados</a>.";
            } else {
                echo "Cadastro não realizado.";
                echo "ERRO: $sql" ."</br>". mysqli_error($con);
            }

            mysqli_close($con);
        }

        return array($msg);

    }

    function pegarComunicaco($fkid_municipios) {
        $con = abrirConexao();
        $sql = "SELECT * FROM bdsimot.servicos_comunicacao WHERE fkid_municipios = $fkid_municipios;";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        return $result;

    }

    function listarServicos() {
        $con = abrirConexao();
        $sql = "SELECT * FROM bdsimot.servicos_comunicacao;";
        $resultadoListagem = mysqli_query($con, $sql);
        mysqli_close($con);
        return $resultadoListagem;
    }

    function editarComunicacao($fkid_municipios, $internet_radio, $internet_cabo, $internet_banda_larga, $internet_discada, $internet_wireless, $internet_3g, $telefonia_movel, $area_todo_municipio_tmovel, $area_parte_municipio_tmovel, $telefonia_fixa, $area_todo_municipio_tfixa, $area_parte_municipio_tfixa) {

        $msg = verificarEntradas($fkid_municipios, $internet_radio, $internet_cabo, $internet_banda_larga,$internet_discada, $internet_wireless, $internet_3g, $telefonia_movel, $telefonia_fixa);

        if($msg == "") {
            $con = abrirConexao();

            $sql = "UPDATE bdsimot.servicos_comunicacao SET 
            
            fkid_municipios = '$fkid_municipios', 
            internet_radio = '$internet_radio', 
            internet_cabo = '$internet_cabo', 
            internet_banda_larga = '$internet_banda_larga', 
            internet_discada = '$internet_discada', 
            internet_wireless = '$internet_wireless', 
            internet_3g = '$internet_3g', 
            telefonia_movel = '$telefonia_movel', 
            area_todo_municipio_tmovel = '$area_todo_municipio_tmovel', 
            area_parte_municipio_tmovel = '$area_parte_municipio_tmovel', 
            telefonia_fixa = '$telefonia_fixa', 
            area_todo_municipio_tfixa = '$area_todo_municipio_tfixa', 
            area_parte_municipio_tfixa = '$area_parte_municipio_tfixa'
            WHERE fkid_municipios = '$fkid_municipios';";

            if(mysqli_query($con, $sql)) {
                echo "Alteração realizada com sucesso! Verificar alteração no <a href='consultar_comunicacao.php'>banco de dados</a>.";
            } else {
                echo "Alteração não realizada!";
                echo "ERRO: $sql " ."</br>". mysqli_error($con);
            }

            mysqli_close();
        }

        return array($msg);
    }

    function excluirComunicacao($fkid_municipios){
        $con = abrirConexao();
        $sql = "DELETE FROM bdsimot.servicos_comunicacao WHERE fkid_municipios = $fkid_municipios;"

        
        if(mysqli_query($con, $sql)){
            $msg = "Excluído!";
        } else {
            $msg = "Não excluído!";
        }

        mysqli_close($con);
    }
    return array($msg);
    }
 


?>
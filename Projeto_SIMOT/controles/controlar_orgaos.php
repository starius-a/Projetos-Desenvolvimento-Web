<?PHP

    include "../../controles/a_conexao.php";

    function verificarEntradas($fkid_municipios, $nome_orgao_oficial_tur, $logradouro, $bairro, $distrito, $cep, $email, $site, $qtd_funcionarios, $qtd_funcionarios_superior_turismo) {

        if($fkid_municipios == "") {
            return "Informe a chave estrangeira.";
        }

        if($nome_orgao_oficial_tur == "") {
            return "Informe o nome do órgão.";
        }

        if($logradouro == "") {
            return "Informe o logradouro.";
        }

        if($bairro == ""){
            return "Informe o bairro.";
        }

        if($distrito == "") {
            return "Informe o distrito.";
        }

        if($cep == ""){
            return "Informe o CEP.";
        }

        if($email == "") {
            return "Informe o Email.";
        }

        if($site == "") {
            return "Informe o site.";
        }

        if($qtd_funcionarios == "") {
            return "Informe a quantidade de funcionários.";
        }

        if($qtd_funcionarios_superior_turismo == "") {
            return "Informe a quantidade de funcionários com ensino superior em Turismo.";
        }

        return "";

    }

    function cadastrarOrgao($fkid_municipios, $nome_orgao_oficial_tur, $logradouro, $bairro, $distrito, $cep, $email, $site, $qtd_funcionarios, $qtd_funcionarios_superior_turismo) {

        $msg = verificarEntradas($fkid_municipios, $nome_orgao_oficial_tur, $logradouro, $bairro, $distrito, $cep, $email, $site, $qtd_funcionarios, $qtd_funcionarios_superior_turismo);

        if($msg == "") {
            $con = abrirConexao();

            $sql = "INSERT INTO bdsimot.Orgao_Oficial_Tur (fkid_municipios, nome_orgao_oficial_tur, logradouro, bairro, distrito, cep, email, site, qtd_funcionarios, qtd_funcionarios_superior_turismo) VALUES ('$fkid_municipios', '$nome_orgao_oficial_tur', '$logradouro', '$bairro', '$distrito', '$cep', '$email', '$site', '$qtd_funcionarios', '$qtd_funcionarios_superior_turismo');";

            if(mysqli_query($con, $sql)) {
                echo "Cadastro realizado com sucesso! Verificar cadastro no <a href='consultar_orgaos.php'>banco de dados</a>.";
            } else {
                echo "Cadastro não realizado.";
                echo "ERRO: " .$sql. "</br>" .mysqli_error($con);
            }

            mysqli_close($con);
        }
            return array($msg);
    }

    function pegarOrgao($fkid_municipios) {
        $con = abrirConexao();
        $sql = "SELECT * FROM bdsimot.Orgao_Oficial_Tur WHERE fkid_municipios = $fkid_municipios;";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        return $result;
    }

    function listarOrgaos() {
        $con = abrirConexao();
        $sql = "SELECT * FROM bdsimot.Orgao_Oficial_Tur;";
        $resultadoListagem = mysqli_query($con, $sql);
        mysqli_close($con);
        return $resultadoListagem;
    }

    function editarOrgao($fkid_municipios, $nome_orgao_oficial_tur, $logradouro, $bairro, $distrito, $cep, $email, $site, $qtd_funcionarios, $qtd_funcionarios_superior_turismo) {

        $msg = verificarEntradas($fkid_municipios, $nome_orgao_oficial_tur, $logradouro, $bairro, $distrito, $cep, $email, $site, $qtd_funcionarios, $qtd_funcionarios_superior_turismo);

        if($msg == "") {

            $con = abrirConexao();

            $sql = "UPDATE bdsimot.Orgao_Oficial_Tur SET
            fkid_municipios = '$fkid_municipios',
            nome_orgao_oficial_tur = '$nome_orgao_oficial_tur',
            logradouro = '$logradouro',
            bairro = '$bairro',
            distrito = '$distrito',
            cep = '$cep',
            email = '$email',
            site = '$site',
            qtd_funcionarios = '$qtd_funcionarios',
            qtd_funcionarios_superior_turismo = '$qtd_funcionarios_superior_turismo'
            WHERE fkid_municipios = '$fkid_municipios';";

            if(mysqli_query($con, $sql)) {
                echo "Alteração realizada com sucesso! Verificar alteração no <a href=' consultar_orgaos.php'>banco de dados</a>. ";
            } else {
                echo "Alteração não realizada.";
                echo "ERRO: " .$sql. "</br>" .mysqli_error($con);
            }

            mysqli_close($con);

            }

            return array($msg);
    }

    function excluirOrgao($fkid_municipios) {
        $con = abrirConexao();
        $sql = "DELETE FROM bdsimot.Orgao_Oficial_Tur WHERE fkid_municipios = $fkid_municipios;";

        if(mysqli_query($con, $sql)) {
            $msg = "Orgão excluído!";
        } else {
            $msg = "Orgão não excluído!";
        }

        mysqli_close($con);
        return $msg;
    }

?>
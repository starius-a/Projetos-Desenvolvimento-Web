<?PHP

    include "../../controles/a_conexao.php";

    function verificarEntradas($nome_feriado, $data_feriado, $fkid_municipios){

        if($nome_feriado == ""){
            return "Informe o nome do feriado.";
        }

        if($data_feriado == ""){
            return "Informe a data do feriado.";
        }

        if($fkid_municipios == ""){
            return "Informe o identificador.";
        }

        return "";

    }

    function cadastrarFeriado($nome_feriado, $data_feriado, $fkid_municipios){
        $msg = verificarEntradas($nome_feriado, $data_feriado, $fkid_municipios);

        if($msg == ""){
            $con = abrirConexao();

            $sql = "INSERT INTO bdsimot.feriados (nome_feriado, data_feriado, fkid_municipios) values ('$nome_feriado', '$data_feriado', '$fkid_municipios');";

            if(mysqli_query($con, $sql)){
                echo "Feriado cadastrado com sucesso! Verificar cadastro no <a href='consultar_feriados.php'>banco de dados</a>.";
            } else{
                echo "Cadastro não realizado.";
                echo "ERRO: " .$sql. "</br>" .mysqli_error($con);
            }

            mysqli_close($con);
        }

        return array($msg);
    }

    function pegarFeriado($id_feriados){
        $con = abrirConexao();
        $sql = "SELECT * FROM bdsimot.feriados WHERE id_feriados = ".$id_feriados.";"; 
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        return $result;

    }

    function listarFeriados(){
        $con = abrirConexao();
        $sql = "SELECT * FROM bdsimot.feriados;";
        $resultadoListagem = mysqli_query($con, $sql);
        mysqli_close($con);
        return $resultadoListagem;
    }

    function editarFeriados($id_feriados, $nome_feriado, $data_feriado, $fkid_municipios){
        $msg = verificarEntradas($nome_feriado, $data_feriado, $fkid_municipios);

        if($msg == ""){
            $con = abrirConexao();

            //nome da coluna, =, '', variavel, ",", eterno retorno.
            $sql = "UPDATE feriados SET 
            nome_feriado = '$nome_feriado',
            data_feriado = '$data_feriado',
            fkid_municipios = '$fkid_municipios'
            WHERE id_feriados = '$id_feriados';";

            if(mysqli_query($con, $sql)){
                echo "Alteração realizada com sucesso! Verificar alteração no <a href='consultar_feriados.php'>banco de dados</a>.";
            }else{
                echo "Alteração não realizada.";
                echo "ERROR: " .$sql. "</br>" .mysqli_error($con);
            }

            mysqli_close($con);
        }

        return array($msg);
    }

    function excluirFeriado($id_feriados){

        $con = abrirConexao();
        $sql = "DELETE FROM bdsimot.feriados WHERE id_feriados = $id_feriados;";

        if(mysqli_query($con, $sql)){
            $msg = "Excluído!";
        } else {
            $msg = "Não excluído!";
        }

        mysqli_close($con);

        return $msg;
    }



?>

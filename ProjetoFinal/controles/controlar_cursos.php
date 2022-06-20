<?PHP

    include "..\controles\a_conexao.php";

    function verificarEntradas($nome, $carga_horaria, $descricao, $ano){
        if($nome == ""){
            return "Informe o nome do curso.";
        }
        if($carga_horaria == "") {
            return "Informe a carga horária do curso.";
        }
        if($descricao == ""){
            return "Informe a descrição do curso.";
        }
        if($ano == ""){
            return "Informe o ano em que o curso foi iniciado.";
        }

        return "";
    }

    function cadastrarCurso($nome, $carga_horaria, $descricao, $ano, $nome_imagem) {
        $msg = verificarEntradas($nome, $carga_horaria, $descricao, $ano);

        if($msg == ""){
            $con = abrirConexao();

            $sql = "INSERT INTO bdcursos.curso (nome, carga_horaria, descricao, ano, imagens) VALUES ('$nome',
            '$carga_horaria', '$descricao', '$ano', '$nome_imagem');";

            if(mysqli_query($con, $sql)){
                echo "Cadastro realizado com sucesso!";
                header("location: consultar_cursos.php");
            } else {
                echo "Cadastro não realizado!";
                echo "ERRO: " .$sql. "</br>" .mysqli_error($con);
            }

            mysqli_close($con);
            return array($msg);
        }
    }

    function pegarCurso($id_curso){
        $con = abrirConexao();
        $sql = "SELECT * FROM curso WHERE id_curso = ".$id_curso.";";
        $resultado = mysqli_query($con, $sql);
        mysqli_close($con);
        return $resultado;
    }

    function listarCursos(){
        $con = abrirConexao();
        $sql = "SELECT * FROM bdcursos.curso;";
        $resultadoListagem = mysqli_query($con, $sql);
        mysqli_close($con);
        return $resultadoListagem;
    }

    function excluirCurso($id_curso){
        $con = abrirConexao();
        $sql = "DELETE FROM bdcursos.curso WHERE id_curso = $id_curso;";

        if(mysqli_query($con, $sql)){
            $msg =  "Excluído.";
        } else {
            $msg =  "Não excluído.";
        }

        mysqli_close($con);
        return $msg;
    }

    



?>
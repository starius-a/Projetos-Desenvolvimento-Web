<?PHP 

    include "../controles/a_conexao.php";

    function verificarEntradas($nome) {

        if($nome == "") {
            return "Informe o nome da categoria.";
        }

        return "";
    }

    function cadastrarCategoria($id_categoria, $nome) {
        $msg = verificarEntradas($nome);

        if($msg == "") {

            $con = abrirConexao();
            $sql = "INSERT INTO categoria (nome) VALUES ('$nome');";

            if(mysqli_query($con, $sql)){
                echo "Cadastro realizado com sucesso!"
            } else {
                echo "Cadastro não realizado!";
            }

            mysqli_close($con);

        }

        return array($msg);
    }

    function pegarCategoria($id_categoria) {
        $con = abrirConexao();
        $sql = "SELECT * FROM categoria WHERE id_categoria = '$id_categoria';";
        $result = mysqli_query($con, $sql);
        mysqli_close($con);
        return $result;
    }

    function listarCategorias() {
        $con = abrirConexao();
        $sql = "SELECT * FROM categoria;";
        $resultadoListagem = mysqli_query($con, $sql);
        mysqli_close($con, $sql);
        return $resultadoListagem;
    }

    function atualizarCategoria($id_categoria, $nome) {
        $msg = verificarEntradas($nome);

        if($msg == "") {

            $con = abrirConexao();
            $sql = "UPDATE categoria SET nome = '$nome' WHERE id_categoria='$id_categoria';";

            if(mysqli_query($con, $sql)) {
                echo "Atualização realizada com sucesso"
            } else {
                echo "Alteração não realizada.";
                echo "ERRO: " .$sql. "</br>" . mysqli_error($con);
            }

            mysqli_close($con);
        }

        return array($msg);
    }

    function excluirCategoria($id_categoria) {
        $con = abrirConexao();
        $sql = "DELETE FROM categoria WHERE id_categoria='$id_categoria';";

        if(mysqli_query($con, $sql)){
            $msg =  "Excluído.";
        } else {
            $msg =  "Não excluída.";
        }

        mysqli_close($con);
        return $msg;
    }




?>
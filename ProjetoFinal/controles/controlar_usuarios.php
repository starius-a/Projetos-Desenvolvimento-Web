<?php
 
    include "..\controles\a_conexao.php";

    function verificarEntradas($nome, $cpf, $telefone, $email, $senha){
        if($nome == "") {
            return "Informe o seu nome.";
        }

        if($cpf == ""){
            return "Informe o seu CPF.";
        }

        if($telefone == ""){
            return "Informe o seu número de telefone.";
        }

        if($email == ""){
            return "Informe o seu Email.";
        }

        if($senha == ""){
            return "Informe a sua senha.";
        }

        return "";
    }

    function cadastrarUsuario($nome, $cpf, $telefone, $email, $senha) {
        $msg = verificarEntradas($nome, $cpf, $telefone, $email, $senha);

        if($msg == "") {
            $con = abrirConexao();

            $sql = "INSERT INTO bdcursos.usuario ( nome_completo, cpf, telefone, email, senha) values ('$nome', '$cpf', '$telefone', '$email', '$senha')";

            if(mysqli_query($con, $sql)){
                header('location: login.php');
            } else{
                echo "Cadastro não realizado!";
                echo "ERRO: " .$sql. "</br>" . mysqli_error($con);
            }

            mysqli_close($con);
            return array($msg);
        }

    }

    function pegarUsuario($id_usuario){
        $con = abrirConexao();

        $sql = "SELECT * FROM bdcursos.usuario WHERE id_usuario = " . $id_usuario . ";";

        $resultado = mysqli_query($con, $sql);
        mysqli_close($con);

        return $resultado;

    } 

    function listarUsuarios(){
        $con = abrirConexao();

        $sql = "SELECT * FROM bdcursos.usuario;";

        $resultadoListagem = mysqli_query($con, $sql);

        mysqli_close($con);

        return $resultadoListagem;

    }

    function atualizarUsuario($id_usuario, $nome, $cpf, $telefone, $email, $senha){

       
            $con = abrirConexao();

            $sql = "UPDATE bdcursos.usuario SET
            nome_completo = '$nome',
            cpf = '$cpf',
            telefone = '$telefone',
            email = '$email', 
            senha = '$senha' 
            WHERE id_usuario = '$id_usuario';";

            if(mysqli_query($con, $sql)){
                echo "Alteração realizada com sucesso! Verifcar no <a href='consultar_usuarios.php'>banco de dados</a>.";
            } else{
                echo "Alteração não realizada.";
                echo "ERRO: " .$sql. "</br>" . mysqli_error($con);
            }

            mysqli_close($con);
            return $con;
        
        
    }

    function autenticarUsuario($email, $senha) {

        session_start();
        $con = abrirConexao();

        $sql = "SELECT * FROM bdcursos.usuario WHERE email='$email' AND senha='$senha';";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION["email"] = $row["email"];
                $_SESSION["senha"] = $row["senha"];
                $_SESSION["nome_completo"] = $row["nome_completo"];
            }
            mysqli_close($con);
            header('Location: perfil.php');
        } else {
            mysqli_close($con);
            header('Location: login.php');
        }

        mysqli_close($con);
        return $result;
    }
    
    function excluirUsuario($id_usuario){

        $con = abrirConexao();
        $sql = "DELETE FROM bdcursos.usuario WHERE id_usuario = " .$id_usuario.";";

        
        if(mysqli_query($con, $sql)){
            $msg =  "Excluído.";
        } else {
            $msg =  "Não excluída.";
        }

        mysqli_close($con);
        return $msg;
    }

?>
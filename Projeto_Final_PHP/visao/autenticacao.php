<?php

    include "../controle/a_conexao.php";

    $usuario = "";
    $senha = "";

    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
    }
    if(isset($_POST["senha"])){
        $senha = $_POST["senha"];
    }


    $con = abrirConexao();

    $sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha'";

    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
        header('Location: perfil.php');
    } else {
        header('Location: login.php');
    }
   
?>
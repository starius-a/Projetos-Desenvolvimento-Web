<?php

    function abrirConexao(){

        $servidor = "localhost";
        $usuario = "ande";
        $senha = "5678";
        $bd = "bdprodutos";

        $con = mysqli_connect($servidor, $usuario, $senha, $bd);

        if(mysqli_connect_errno($con)){
            echo "Não foi possível abrir conexão: ";
            mysqli_connect_error();
        } else {
            echo "Conexão aberta!";
        }

        mysqli_close($con);
    }

?>
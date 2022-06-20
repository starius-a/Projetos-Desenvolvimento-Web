<?php

    function abrirConexao() {

        $servidor = "localhost";
        $usuario = "simo";
        $senha = "9135";
        $bd = "bdsimot";

        $con = mysqli_connect($servidor, $usuario, $senha, $bd);

        if(mysqli_connect_errno($con)) {
            echo "Erro ao tentar estabelecer conexão com o banco de dados: ";
            mysqli_connect_error();
        } else {
            echo "";
        }

        return $con;

    }


?>
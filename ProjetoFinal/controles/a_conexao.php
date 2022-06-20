<?php
    function abrirConexao(){

        $servidor = "localhost";
        $usuario = "bdcurso";
        $senha = "0987";
        $bd = "bdcursos";

        $con = mysqli_connect($servidor, $usuario, $senha, $bd);

        if(mysqli_connect_errno($con)){
            echo "Conexão não estabelecida.";
            mysqli_connect_error();
        } else {
            echo "";
        }

        return $con;
    }




    ?>
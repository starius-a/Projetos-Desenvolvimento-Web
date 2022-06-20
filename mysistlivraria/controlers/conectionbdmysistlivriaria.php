<?php
    function abrirConexao(){
        $con = mysqli_connect("localhost", "andy", "8569", "livraria");

        //Verificando a conexão

        if(mysqli_connect_errno($con)) {
            echo "Erro na conexão com o banco de dados: ";
            mysqli_connect_error();
        } else {
            echo "Conexão aberta!";
        }

        return $con;
    }

?>
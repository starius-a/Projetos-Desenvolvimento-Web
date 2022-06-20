<?php
    include 'cnnbdmysistvendas.php';

    function verificarEntradas($desc, $unidade, $vlUnitario){
        if($desc == "") {
            return "Digite a descrição do produto";
        }
        if($unidade == "") {
            return "Informe a unidade do produto";
        }
        if($vlUnitario == "") {
            return "Informe o valor unitário do produto";
        }

        return "";
    }

    function cadastrarProdutos($desc, $unidade, $vlUnitario) {
        $msg = verificarEntradas($desc, $unidade, $vlUnitario);

        if($msg == "") {
            $con = abrirConexao();

            $sql = "INSERT INTO produtos (descricao, unidade, vlUnitario) values 
            ('$desc', '$unidade', '$vlUnitario');";

            if(mysqli_query($con, $sql)) {
                echo " Cadastro realizado som sucesso.";
            } else {
                echo "Erro ao cadastrar produto";
            }

            mysqli_close($con);


        }

        return array($msg);
    }

?>
<?php
    include "conectionbdmysistlivriaria.php";

    function verificarEntradas($cpf, $nome, $data_nascimento, $idade, $email) {
        if($cpf == "") {
            return "Digite o seu CPF.";
        }
        if($nome == "") {
            return "Digite o seu nome.";
        }
        if($data_nascimento == "") {
            return "Digite a sua data de nascimento.";
        }
        if($idade == "") {
            return "Digite o seu email.";
        }
    }

    function cadastrarClientes($cpf, $nome, $data_nascimento, $idade, $email) {
        $msg = verificarEntradas($cpf, $nome, $data_nascimento, $idade, $email);

        if($msg == "") {
            $con = abrirConexao();

            $sql = "INSERT INTO cliente (cpf, nome, email, data_nascimento, idade)
            values ('$cpf', '$nome', '$data_nascimento', '$idade', '$email');";

            if(mysqli_query($con, $sql)) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar cliente.";
                mysqli_connect_error();
            }

            mysqli_close($con);
        }

        return array ($msg);
    }

    function editarClientes($cpf, $nome, $data_nascimento, $idade, $email) {
        $msg = verificarEntradas($cpf, $nome, $data_nascimento, $idade, $email);

        if($msg == "") {
            $con = abrirConexao();
            $sql = "UPDATE cliente SET " . 
            "cpf = '" .$cpf. "', " . 
            "nome = '" .$nome. "', " . 
            "email = '" .$email. "', " . 
            "data_nascimento = '" .$data_nascimento. "', " . 
            "idade = '" .$idade. "', " . 
            "WHERE cpf = " . $cpf. ";";

            if(mysqli_query($con, $sql)) {
                echo "Alteração realizada com sucesso.";
            } else {
                echo "Alteração não realizada.";
            }

            mysqli_close($con);
        }
        return array ($msg);
    }

?>
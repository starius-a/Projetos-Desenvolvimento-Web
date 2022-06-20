<?php
	include 'cnnbdmysistvendas.php';

   function verificarEntradas($cpf, $nome, $dataNascimento, $sexo, $endereco){
   		if($cpf == ""){
   			return "Digite o seu CPF.";
   		}
   		if($nome == ""){
   			return "Digite o seu Nome.";
   		}
   		if($dataNascimento == ""){
   			return "Digite a sua data de nascimento.";
   		}
   		if($sexo == ""){
   			return "Digite o seu sexo.";
   		}
   		if($endereco == ""){
   			return "Digite o seu endereço.";
   		}

   		return "";
   }

	function cadastrarCliente($cpf, $nome, $dataNascimento, $sexo, $endereco){

		$codigo = 0;
		$msg = verificarEntradas($cpf, $nome, $dataNascimento, $sexo, $endereco);

		if($msg == ""){
			$con = abrirConexao();

			$sql = "INSERT INTO Clientes(cpf, nome, dataNascimento, sexo, endereco) VALUES (" .
				"'" . $cpf . "', " .
				"'" . $nome . "', " .
				"'" . $dataNascimento . "', " .
				"'" . $sexo . "', " .
				"'" . $endereco . "');" ;

			//echo "<br><br>SQL: " . $sql;

			$lastInsertedid = -1;
		     
		    if (mysqli_query($con, $sql)) {
		 	   	$lastInsertedid = mysqli_insert_id($con);
		 	   	$msg = "Cadastro realizado com sucesso.";
		 	   	$codigo = 1;
			} else {
		    	echo "Error: " . $sql . "<br>" . mysqli_error($con);
		    	$msg = "O cadastro não pode ser realizado.";
		    	$codigo = -1;
			}
			mysqli_close($con);
			
		}

		return array($codigo, $msg);

	}

	function listarClientes(){
		$con = abrirConexao();

		$sql = "Select * from Clientes;" ;

		$result = mysqli_query($con, $sql);

		return $result;

	}

	function pegarCliente($idCliente){

		$con = abrirConexao();

		$sql = "Select * from Clientes where idCliente = " . $idCliente . ";" ;

		$result = mysqli_query($con, $sql);

		return $result;

	}

	function atualizarCliente($idCliente, $cpf, $nome, $dataNascimento, $sexo, $endereco){

		$codigo = 0;
		$msg = verificarEntradas($cpf, $nome, $dataNascimento, $sexo, $endereco);

		if($msg == ""){
			$con = abrirConexao();

			$sql = "UPDATE Clientes SET " .
				"cpf = '" . $cpf . "', " .
				"nome = '" . $nome . "', " .
				"dataNascimento = '" . $dataNascimento . "', " .
				"sexo = '" . $sexo . "', " .
				"endereco = '" . $endereco . "' " .
				"WHERE idCliente = " . $idCliente . ";" ;

			//zreturn "<br><br>SQL: " . $sql;

		    if (mysqli_query($con, $sql)) {
		 	   	$msg = "Alteração realizada com sucesso.";
		 	   	$codigo = 1;
			} else {
		    	//echo "Error: " . $sql . "<br>" . mysqli_error($con);
		    	$msg = "A alteração não pode ser realizada.";
		    	$codigo = -1;
			}
			mysqli_close($con);
			
		}

		return array($codigo, $msg);

	}

	function excluirCliente($idCliente){

		$con = abrirConexao();

		$sql = "DELETE FROM bdmysistvendas.clientes WHERE idCliente=" . $idCliente . ";" ;

		//return "<br><br>SQL: " . $sql;
	     
	    if (mysqli_query($con, $sql)) {
	 	   	$msg = "Remoção realizada com sucesso.";
		} else {
	    	//echo "Error: " . $sql . "<br>" . mysqli_error($con);
	    	//$msg = "O cadastro não pode ser removido.";
	    	$msg = "Error: " . $sql . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);
	

		return $msg;

	}

?>
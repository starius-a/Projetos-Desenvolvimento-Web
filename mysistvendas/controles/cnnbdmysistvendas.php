<?php
	function abrirConexao(){
		$con = mysqli_connect("localhost",
			"mys","YES", "bdmysistvendas");
		// Checando a conexão
		if (mysqli_connect_errno($con)){
			echo "Erro ao conectar com a base de dados: ";
			mysqli_connect_error();
		}else{
			echo "Conexão Aberta!!";
		}

		return $con;

	}

?>
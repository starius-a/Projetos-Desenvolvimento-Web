<?php
	include '..\controles\manterclientes.php';


	$msg = "";

	$idCliente = "";
	$cpf = "";
	$nome = "";
	$dataNascimento = "";
	$sexo = "";
	$endereco = "";

	if(isset($_GET['idCliente'])){
    	$idCliente = $_GET['idCliente'];

		$result = pegarCliente($idCliente);

    	$numRegistros = mysqli_num_rows($result);

		if ($numRegistros > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$idCliente = $row["idCliente"];
		    	$cpf = $row["cpf"];
		    	$nome = $row["nome"];
		    	$dataNascimento = $row["dataNascimento"];
		    	$sexo = $row["sexo"];
		    	$endereco = $row["endereco"];

		    }

		}

   }

   	if(isset($_POST['btexcluir'])){
		
		if(isset($_POST['idCliente'])){
	    	$idCliente = $_POST['idCliente'];
    	}

		if(isset($_POST['cpf'])){
	    	$cpf = $_POST['cpf'];
	   }
	   	if(isset($_POST['nome'])){
	    	$nome = $_POST['nome'];
	   }
	   	if(isset($_POST['dataNascimento'])){
	    	$dataNascimento = $_POST['dataNascimento'];
	   }
	  	if(isset($_POST['sexo'])){
	    	$sexo = $_POST['sexo'];
	   }
		if(isset($_POST['endereco'])){
	    	$endereco = $_POST['endereco'];
	   }

    	$msg = excluirCliente($idCliente);
   }

 ?>

 <html>
	<body>
		<form action="formexcluircliente.php" name="formExcluirCliente" 
		id="formExcluirCliente" method="POST">

		<table>
			<tr>
				<td colspan="2"><b><a href="\mysistvendas\index.php"><<< Voltar</a></b></td>
			</tr>
			<tr>
				<td colspan="2"><h2>Excluir Cliente</h2> </td>
			</tr>
			<tr>
				<td colspan="2">  <?php echo $msg ?></td>
			</tr>
			<tr>
				<td><b>Id Cliente: </b></td>
				<td> <input type="text" name="idCliente" value="<?php echo $idCliente ?>" readonly> </td>
			</tr>
			<tr>
				<td><b>CPF: </b></td>
				<td> <input type="text" name="cpf" value="<?php echo $cpf ?>"> </td>
			</tr>
			<tr>
				<td><b>Nome: </b></td>
				<td> <input type="text" name="nome" value="<?php echo $nome ?>"> </td>
			</tr>
			<tr>
				<td><b>Data de Nascimento: </b></td>
				<td> <input type="text" name="dataNascimento" value="<?php echo $dataNascimento ?>"> </td>
			</tr>
			<tr>
				<td><b>Sexo: </b></td>
				<td> <input type="text" name="sexo" value="<?php echo $sexo ?>"> </td>
			</tr>
			<tr>
				<td><b>Endereço: </b></td>
				<td> <input type="text" name="endereco" value="<?php echo $endereco ?>"> </td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btexcluir" value="Excluir">
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>

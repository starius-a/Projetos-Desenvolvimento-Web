<?php
	include '..\controles\manterclientes.php';


	$msg[0] = 0;
	$msg[1] = "";

	$cpf = "";
	$nome = "";
	$dataNascimento = "";
	$sexo = "";
	$endereco = "";

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

   	if(isset($_POST['btcadastrar'])){
    	$msg = cadastrarCliente($cpf, $nome, $dataNascimento, $sexo, $endereco);
   }

 ?>

 <html>
	<body>
		<form action="formcadastrarcliente.php" name="formCadastrarCliente" 
		id="formCadastrarCliente" method="POST">

		<table>
			<tr>
				<td colspan="2"><b><a href="\mysistvendas\index.php"><<< Voltar</a></b></td>
			</tr>
			<tr>
				<td colspan="2"><h2>Cadastrar Cliente</h2> </td>
			</tr>
			<tr>
				<td colspan="2">  <?php echo $msg[1] ?></td>
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
					<?php if($msg[0] != 1){ 
						echo "<input type=\"submit\" name=\"btcadastrar\" value=\"Cadastrar\" >";
					}else{
						echo "<input type=\"submit\" name=\"btcadastrar\" value=\"Cadastrar\" disabled>";
					}
					?>
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>

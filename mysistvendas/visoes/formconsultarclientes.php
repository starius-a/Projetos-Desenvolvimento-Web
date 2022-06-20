<?php 
	include '..\controles\manterclientes.php';

	$msg = "";
	$numRegistros = 0;

	$nome = "";


   	if(isset($_POST['btconsultar'])){

    	$result = listarClientes();

    	$numRegistros = mysqli_num_rows($result);

		if ($numRegistros > 0) {
		    // output data of each row
		    $cont = 0;
		    while($row = mysqli_fetch_assoc($result)) {
		    	$clientes[$cont][0] = $row["idCliente"];
		    	$clientes[$cont][1] = $row["cpf"];
		    	$clientes[$cont][2] = $row["nome"];
		    	$clientes[$cont][3] = $row["dataNascimento"];
		    	$clientes[$cont][4] = $row["sexo"];
		    	$clientes[$cont][5] = $row["endereco"];

		    	$cont++;
		    }

		}

   }

?>

<html>
	<body>
		<form action="formconsultarclientes.php" name="formConsultarClientes" 
		id="formConsultarClientes" method="POST">

		<table>
			<tr>
				<td colspan="6"><b><a href="\mysistvendas\index.php"><<< Voltar</a></b></td>
			</tr>
			<tr>
				<td colspan="2"><h2>Consultar Cliente</h2></td>
			</tr>
			<tr>
				<td colspan="6" align="center">
					Nome: <input type="text" name="nome" value="<?php echo $nome ?>">
					<input type="submit" name="btconsultar" value="Consultar">
				</td>
			</tr>
			<tr>
				<td colspan="6" align="center"><b>Clientes</b></td>
			</tr>
			<tr>
				<td><b>Id Cliente</b></td>
				<td><b>CPF</b></td>
				<td><b>Nome</b></td>
				<td><b>Data de Nascimento</b></td>
				<td><b>Sexo</b></td>
				<td><b>Endereço</b> <a href=""></a></td>
				<td> * </td>
				<td> * </td>
			</tr>
			<?php
				if($numRegistros > 0 ){
					for ($i=0; $i < $numRegistros; $i++) { 
						echo "<tr> \n";
				        echo 	"<td>" . $clientes[$i][0] . "</td> \n";
			        	echo 	"<td>" . $clientes[$i][1] . "</td> \n";
			    	    echo 	"<td>" . $clientes[$i][2] . "</td> \n";
				        echo 	"<td>" . $clientes[$i][3] . "</td> \n";
				        echo 	"<td>" . $clientes[$i][4] . "</td> \n";
				        echo 	"<td>" . $clientes[$i][5] . "</td> \n";
				        echo 	"<td><a href=\"formatualizarcliente.php?idCliente=" . $clientes[$i][0] . "\"> atualizar </a></td> \n";
				        echo 	"<td><a href=\"formexcluircliente.php?idCliente=" . $clientes[$i][0] . "\"> excluir </a></td> \n";
		    		    echo "</tr> \n";

					}

				}
			?>

		</table>

		</form>
	</body>
</html>

<?php
    include '..\controles\manterprodutos.php';

    $desc = "";
    $unidade = "";
    $vlUnitario = "";

    if (isset($_POST['descricao'])) {
        $desc = $_POST['descricao'];
    }

    if (isset($_POST['unidade'])) {
        $unidade = $_POST['unidade'];
    } 

    if (isset($_POST['vlUnitario'])) {
        $vlUnitario = $_POST['vlUnitario'];
    } 

    if(isset($_POST['btcadastrar'])){
    	$msg = cadastrarProdutos($desc, $unidade, $vlUnitario);
   }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>

    <style>
        input {
            width: 500px;
        }
    </style>
</head>
<body>
    <form action="formcadastrarprodutos.php" name = "formCadastrarProdutos" id = "formCadastrarProdutos" 
    method = "POST">

        <table>
            <tr>
                <td colspan="2"><b><a href = "\mysistvendas\index.php"> <<< Voltar</a></b></td>
            </tr>
            <tr>
                <td colspan = "2"><h2>Cadastrar Proodutos</h2></td>
            </tr>
            <tr>
                <td><b>Descrição:</b></td>
                <td><input type="text" name="descricao"></td>
            </tr>
            <tr>
                <td><b>Unidade:</b></td>
                <td><input type="text" name= "unidade"></td>
            </tr>
            <tr>
                <td><b>Valor unitário:</b></td>
                <td><input type="text" name="vlUnitario"></td>
            </tr>
            <tr>
				<td colspan="2" >
					<input type="submit" name="btcadastrar" value="Cadastrar" >
				</td>
			</tr>

        </table>

    </form>
    
</body>
</html>
<?php
    include "..\controlers\manterclientes.php";
    $cpf = "";
    $nome = "";
    $data_nascimento = "";
    $idade = "";
    $email = "";   
    
    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
    }
    if(isset($_POST["cpf"])) {
        $cpf = $_POST["cpf"];
    }
    if(isset($_POST["data_nascimento"])){
        $data_nascimento = $_POST["data_nascimento"];
    }

    if(isset($_POST["idade"])) {
        $idade = $_POST["idade"];
    }

    if(isset($_POST["email"])) {
        $email = $_POST["email"];
    }
    if(isset($_POST['btcadastrar'])){
    	$msg = cadastrarClientes($cpf, $nome, $email, $data_nascimento, $idade);
   }


?>

<html>
    <body>
        <table>
            <form action = "formcadastrarcliente.php" name = "Cadastrar_Cliente" id = "Cadastrar_Cliente"
            method = "POST">
                <tr>
                    <td coslpan = "2"><b><a href = "\mysistlivraria\views\index.html"><<< Voltar</a><b></td>
                </tr>
                <tr>
                    <td coslpan = "2"><h2>Cadastrar cliente</h2></td>
                </tr>
                <br>
                <tr>
                    <td><b>Nome:<b></td>
                    <td><input type = "text" name = "nome" 
                    value = "<?php echo $nome?>" placeholder = "Seu nome"> </td>
                </tr>
                <tr>
                    <td><b>Idade:<b></td>
                    <td><input type = "text" name = "idade" 
                    value = "<?php echo $idade?>" placeholder = "Sua idade"> </td>
                </tr>
                <tr>
                    <td><b>Data de nascimento:<b></td>
                    <td><input type = "text" name = "data_nascimento" 
                    value = "<?php echo $data_nascimento?>" placeholder = "yyyy-mm-dd"> </td>
                </tr>
                <tr>
                    <td><b>Email::<b></td>
                    <td><input type = "text" name = "email" 
                    value = "<?php echo $email ?>" placeholder = "user@mail.com"> </td>
                </tr>
                <tr>
                    <td><b>CPF:<b></td>
                    <td><input type = "text" name = "cpf" 
                    value = "<?php echo $cpf?>" placeholder = "Somente números"> </td>
                </tr>
                <tr>
				<td colspan="2" align="justify">
					<?php 
						echo "<input type=\"submit\" name=\"btcadastrar\" value=\"Cadastrar\" >";
					?>
				</td>

            </form> 
        </table>
    </body>

</html>


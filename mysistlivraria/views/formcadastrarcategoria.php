<?php
    $categoria = "";

    if(isset($_POST["categoria"])) {
        $categoria = $_POST["categoria"];
    }
?>

<hmtl>
    <body>
        <table>
            <form action = "formcadastrarcategoria.php" name = "CadastrarCategoria" id = "CadastrarCategoria" method = "POST">
                <tr>
                    <td colspan = "2"><a href = "\mysistlivraria\views\index.html"> <<< Voltar </a></td>
                </tr>
                <tr>
                    <td colspan = "2"><h2>Cadastrar categoria</h2></td>
                </tr>
                <tr>
                    <td> Nome da categoria: </td>
                    <td><input type = "text" name = "categoria" value = "<?php echo $categoria?>"></td>
                </tr>
                <td colspan="2" align="justify">
					<?php 
						echo "<input type=\"submit\" name=\"btcadastrar\" value=\"Cadastrar\" >";
					?>
				</td>
            </form>
        </table>
    </body>
</html>

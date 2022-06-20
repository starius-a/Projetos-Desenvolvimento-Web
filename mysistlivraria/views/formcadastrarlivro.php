<?php

    $titulo = "";
    $subtitulo = "";
    $autor = "";
    $edicao = "";
    $editora = "";
    $data_lancamento = "";
    $numeroPaginas = "";

    if(isset($_POST['titulo'])) {
        $titulo = $_POST['titulo'];
    }

    if(isset($_POST['subtitulo'])) {
        $subtitulo = $_POST['subtitulo'];
    }

    if(isset($_POST['autor'])) {
        $autor = $_POST['autor'];
    }

    if(isset($_POST['edicao'])) {
        $edicao = $_POST['edicao'];
    }

    if(isset($_POST['editora'])) {
        $eitora = $_POST['editora'];
    }

    if(isset($_POST['data_lancamento'])) {
        $data_lancamento = $_POST['data_lancamento'];
    }
    
    if(isset($_POST['numeroPaginas'])) {
        $numeroPaginas = $_POST['numeroPaginas'];
    }

?>

<html>
    <table>
        <form action = "formcadastrarlivro.php" name = "CadastrarLivro" id = "CadastrarLivro" method = "POST">
        <tr>
            <td colspan = "2"> <a href = "\mysistlivraria\views\index.html"> <<< Voltar </a></td>
        </tr>
        <tr>
            <td colspan = "2"><h2>Cadastrar livro</h2></td>
        </tr>
        <tr>
            <td><strong>Título:</strong></td>
            <td> <input type = "text" name = "titulo" value = "<?php echo $titulo?>"></td>
        </tr>
        <tr>
        <td><strong>Subtítulo:</strong></td>
            <td> <input type = "text" name = "subtitulo" value = "<?php echo $subtitulo?>"></td>
        </tr>
        <tr>
        <td><strong>Autor:</strong></td>
            <td> <input type = "text" name = "autor" value = "<?php echo $autor?>"></td>
        </tr>
        <tr>
        <td><strong>Edição:</strong></td>
            <td> <input type = "text" name = "edicao" value = "<?php echo $edicao?>"></td>
        </tr>
        <tr>
        <td><strong>Editora:</strong></td>
            <td> <input type = "text" name = "editora" value = "<?php echo $editora?>"></td>
        </tr>
        <tr>
        <td><strong>Data de lançamento:</strong></td>
            <td> <input type = "text" name = "data_lancamento" value = "<?php echo $data_lancamento?>"></td>
        </tr>
        <tr>
        <td><strong>Nº de páginas:</strong></td>
            <td> <input type = "text" name = "numeroPaginas" value = "<?php echo $numeroPaginas?>"></td>
        </tr>
        <td colspan="2" align="justify">
					<?php 
						echo "<input type=\"submit\" name=\"btcadastrar\" value=\"Cadastrar\" >";
					?>
		</td>
        </form>

    </table>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../a_imagens/iconPhp.jpg" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <h1>Página de login</h1>
    
    <form action="autenticacao.php" method = "POST">
        <table>
        <tr>
            <td><label for="usuario">Usuário:</label></td>
            <td><input type="text" name="usuario" size="20" id = "usuario"></td>
        </tr>
        <tr>
            <td><label for="senha">Senha:</label></td>
            <td><input type="password" name="senha" size="20" id = "senha"></td>
        </tr>
        <tr>
            <td> <input type="submit" value = "Autenticar"></td>
        </tr>
        
    
        </table>
   
    
    </form>
</body>
</html>
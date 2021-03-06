<?php

  include "../controles/controlar_usuarios.php";

    $id_usuario = "";
    $nome = "";
    $cpf = "";
    $telefone = ""; 
    $email = "";
    $senha = "";
    $msg = "";

    if(isset($_GET["id_usuario"])){
        $id_usuario = $_GET["id_usuario"];

        $resultado = pegarUsuario($id_usuario);
        $numRegistro = mysqli_num_rows($resultado);

        if($numRegistro > 0){
            while($row = mysqli_fetch_assoc($resultado)){
                $id_usuario = $row["id_usuario"];
                $nome = $row["nome_completo"];
                $cpf = $row["cpf"];
                $telefone = $row["telefone"];
                $email = $row["email"];
                $senha = $row["senha"];
            }
        }
    }

if(isset($_POST["btnAtualizarUsuario"])){

    if(isset($_POST["id_usuario"])){
        $id_usuario = $_POST["id_usuario"];
    }

    if(isset($_POST["nome_completo"])){
        $nome = $_POST["nome_completo"];
      }
    
      if(isset($_POST["cpf"])){
        $cpf = $_POST["cpf"];
      }
    
      if(isset($_POST["telefone"])){
        $telefone = $_POST["telefone"];
      }
    
      if(isset($_POST["email"])){
        $email = $_POST["email"];
      }
    
      if(isset($_POST["senha"])){
        $senha = $_POST["senha"];
      }

      $msg = atualizarUsuario($id_usuario, $nome, $cpf, $telefone, $email, $senha);
}
  

?>


<!DOCTYPE html>
<html>
  <head>
    <title>TiCursos-Atualização</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="estilo01.css" />

  </head>

  <body>

   <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
     <a class="navbar-brand" href="index.php"><img  id="logo" src="logo02.jpeg" alt="Imagem da logo"> TiCursos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consultar_cursos.php">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil.php">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consultar_usuarios.php">Usuarios</a>
        </li>

        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Procurar</button>
      </form>
    </div>
</nav>

    <div class="container-fluid">

    <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
          <h2 class="titulo">Atualização</h2>
          <hr>
          </div>
     </div>

    <div class="row">
       <div class="col-12 menu">
         <p><a href="index.php">Home</a> | Atualização </p>
         </div>
    </div>
     
    <div class="row">
      <form class="row g-3 formulario" name = "editar_usuario.php" action="editar_usuario.php" method = "POST">
        <div class=" col-lg-12 col-12 col-md-12">

        
        <div class="col-12 col-md-12 col-lg-12">
          <label for="exampleFormControlInput1"  class="form-label">Identificador:</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="id_usuario" value = "<?php echo $id_usuario?>" readonly>
        </div>

          <label for="exampleFormControlInput1"  class="form-label">Nome Completo:</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome completo" name="nome_completo" value = "<?php echo $nome?>">
         </div>

         <div class="col-12 col-md-12 col-lg-12">
          <label for="exampleFormControlInput1"  class="form-label">CPF:</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="CPF" name="cpf" value = "<?php echo $cpf?>">
         </div>

         <div class="col-12 col-md-12 col-lg-12">
          <label for="exampleFormControlInput1"  class="form-label">Telefone</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="(00) 00000-0000" name="telefone" value = "<?php echo $telefone?>">
         </div>

        <div class="col-12 col-md-12 col-lg-12">
          <label for="exampleFormControlInput1"  class="form-label">Email:</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" name="email" value = "<?php echo $email?>">
        </div>

        <div class="col-12 col-md-12 col-lg-12">
          <label for="exampleInputPassword1" class="form-label">Senha:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name= "senha" value = "<?php echo $senha?>">
        </div>

         <div class="col-12 col-md-12 col-lg-12"> 
          <button type="submit" class="btn btn-primary" name="btnAtualizarUsuario">Atualizar</button>
          <a href="consultar_usuarios.php" class="btn btn-dark">Usuários Cadastrados</a>
         </div>
         
      </form>     
    </div>
    
   
   
   </div> 
    

    
  <footer>
  <div class="footer">
      <p>© 2022 Todos Os Direitos Reservados | TiCursos</p>
    
    </div>
</footer>
  



   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
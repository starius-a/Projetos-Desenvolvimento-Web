<?PHP

  session_start();

  if(isset($_SESSION["email"])) {

  
?>


<!DOCTYPE html>
<html>
  <head>
    <title>TiCursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="estilo01.css"/>

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
          <h2 class="titulo">Perfil do Usuário</h2>
          <h3>Bem-vindo(a), <?PHP echo $_SESSION['nome_completo'];?></h3>
          <hr>
          </div>
     </div>

    <div class="row">
       <div class="col-12 menu">
         <p><a href="index.php">Home</a> | Perfil </p>
         </div>
    </div>

  <div class="row">
    <div class="col-2 col-md-2 col-lg-2 imagem-logo">
      <p><img src="logo.jpeg" alt="Imagem de uma estudante" class="img-fluid"/><p>
    </div>
    </div>
  
  <div class="row">
    <div class="col-sm-3 col-md-3 mb-4">
      <p class="text-center"> 
        <a href="dados.php" class="btn btn-outline-dark btn-custom">Perfil</a>
       </p>
    </div>

    <div class="col-sm-3 col-md-3 mb-4">
      <p class="text-center"> 
        <a href="inscricoes.php" class="btn btn-outline-dark btn-custom">Inscrições</a>
       </p>
    </div>

    <div class="col-sm-3 col-md-3 mb-4">
      <p class="text-center"> 
        <a href="itens.php" class="btn btn-outline-dark btn-custom">Cursos</a>
       </p>
    </div>

    <div class="col-sm-3 col-md-3 mb-4">
      <p class="text-center"> 
        <a href="cadastroitem.php" class="btn btn-outline-dark btn-custom">Cadastrar item</a>
       </p>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-sm-6 col-md-4 mb-4">
   <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
    <div class="card-header">Perfil</div>
    <div class="card-body">
    <p class="card-text">Aqui você visualiza e/ou edita suas informações pessoais.</p>
  </div>
  <div class="card-footer border-light"><a href="dados.php" class="btn btn-primary">Acessar</a></div>
</div>
</div>

<div class="col-sm-6 col-md-4 mb-4">
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Inscrições</div>
  <div class="card-body">
    <p class="card-text">Acesse os cursos que você está inscrito no TiCursos.</p>
  </div>
  <div class="card-footer border-light"><a href="inscricoes.php" class="btn btn-primary">Acessar</a></div>
</div>
</div>

<div class="col-sm-12 col-md-4 mb-4">
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Cursos</div>
  <div class="card-body">
    <p class="card-text">Administre os cursos e inscrições do TiCursos.</p>
  </div>
  <div class="card-footer border-light"><a href="itens.php" class="btn btn-primary">Acessar</a></div>
</div>
</div>

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

<?PHP 
  }else{
    header("location: login.php");
  }
?>
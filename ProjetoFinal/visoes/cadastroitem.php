<?PHP

  session_start();

  if(isset($_SESSION["nome_completo"])) {

  
?>


<?PHP

  include "..\controles\controlar_cursos.php";

  $msg = "";
  $nome = "";
  $carga_horaria = "";
  $descricao = "";
  $ano = "";
  $nome_imagem = "";
  $imagem_temp = "";
  $destino = "";

  if(isset($_FILES['imagem_curso']) && !empty($_FILES["imagem_curso"]["name"])){
    $imagem_temp = $_FILES["imagem_curso"]["tmp_name"];
    $destino = "../imagens/".$_FILES["imagem_curso"]["name"];
    move_uploaded_file($imagem_temp, $destino);
    $nome_imagem = $_FILES["imagem_curso"]["name"];

  } else {
    $nome_imagem = "sem_imagem.png";
  }

  if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
  }

  if(isset($_POST["carga_horaria"])){
    $carga_horaria = $_POST["carga_horaria"];
  }

  if(isset($_POST["descricao"])){
    $descricao = $_POST["descricao"];
  }

  if(isset($_POST["ano"])){
    $ano = $_POST["ano"];
  }

  if(isset($_POST["btnCadastrarItem"])){
    $msg = cadastrarCurso($nome, $carga_horaria, $descricao, $ano, $nome_imagem);
  }


?>





<!DOCTYPE html>
<html>
  <head>
    <title>TiCursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    

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
          <div class="col-sm-12 col-md-12">
          <h1 class="titulo">Perfil do Usuário</h1>
          <hr>
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
     <form class="row g-3 formulario" action = "cadastroitem.php" method="POST" enctype="multipart/form-data">
       <h2>Cadastrar Curso:</h2>
        <div class=" col-lg-12 col-12 col-md-12">
          <label for="exampleFormControlInput1"  class="form-label">Título:</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="nome">
         </div>

         <div class=" col-lg-12 col-12 col-md-12">
          <label for="exampleFormControlInput1"  class="form-label">Selecione uma imagem:</label>
          <input type="file" class="form-control" id="exampleFormControlInput1" name="imagem_curso">
         </div>

         <div class="col-12 col-md-12 col-lg-12">
          <label for="exampleFormControlTextarea1" class="form-label">Descrição:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
          </div>

         <div class="col-12 col-md-12 col-lg-12">
          <label for="exampleFormControlInput1"  class="form-label">Carga Horária:</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" name="carga_horaria">
         </div>

        <div class="col-12 col-md-12 col-lg-12">
          <label for="exampleFormControlInput1"  class="form-label">Ano Início:</label>
          <input type="year" class="form-control" id="exampleFormControlInput1" name="ano">
         </div>

         <div class="col-12 col-md-12 col-lg-12">
         <label for="exampleFormControlInput1"  class="form-label">Selecione a categoria:</label>
          <br>
          <div class="col-sm-10">
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" >
              <label class="form-check-label" for="gridRadios1" name="Básico">Básico</label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"         value="option2">
              <label class="form-check-label" for="gridRadios2" name="Médio">Médio</label>
          </div>
          <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"         value="option3" name="Avançado">
                <label class="form-check-label" for="gridRadios3">Avançado</label>
          </div>
          </div>
          </div>

         <div class="col-12 col-md-12 col-lg-12"> 
          <button type="submit" class="btn btn-primary" name="btnCadastrarItem">Cadastrar</button>
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


<?PHP 
  }else{
    header("location: login.php");
  }
?>
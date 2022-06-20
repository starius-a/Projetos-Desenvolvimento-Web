<?PHP

  session_start();

  if(isset($_SESSION["nome_completo"])) {

  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cursos</title>
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
          <h1 class="titulo">Cursos</h1>
          <hr>
          </div>
     </div>

    <div class="row">
       <div class="col-12 menu">
         <p><a href="index.php">Home</a> | Cursos</p>
         </div>
    </div>

    
    <div class="row">
      <form class="row row-cols-lg-auto g-3 align-items-center">
      <h4>Filtro:</h4>
      <div class="col-sm-6 col-md-12">
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Nível do Curso</label>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Qual curso pretende cursar?">
    </div>

  <div class="col-sm-6 col-md-12">
    <label class="visually-hidden" for="inlineFormSelectPref">oi</label>
    <select class="form-select" id="inlineFormSelectPref">
      <option selected>Nível do Curso</option>
      <option value="1">Básico</option>
      <option value="2">Médio</option>
      <option value="3">Avançado</option>
    </select>
  </div>

  <div class="col-sm-12 col-md-12">
    <button type="submit" class="btn btn-primary">Buscar Curso</button>
  </div>
</form>

</div> 

<br>

    <div class="row">
          <div class="col-sm-6 col-md-4 mb-4">
    <div class="card h-100">
      <img src="computador02.jpg" class="card-img-top" alt="Imagem de um computador.">
      <div class="card-body">
        <h5 class="card-title">Curso Básico</h5>
        <p class="card-text"> Assuntos Abordados: Navegação na Internet; Edição de textos; Planilha eletrônica; Apresentação de slides utilizando o Sistema Operacional Windows e aplicativos do pacote Office como Word; Excel e Power Point.</p>
         <a href="detalhes.php" class="btn btn-dark">Acessar Curso</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 mb-4">
    <div class="card h-100">
      <img src="computador02.jpg" class="card-img-top" alt="Imagem de um computador.">
      <div class="card-body">
        <h5 class="card-title">Curso Médio</h5>
        <p class="card-text">Assuntos Abordados:
          Office 2019; Word 2019; Excel 2019; Power Point 2019; Digitação; Internet (Navegação / E-mail / Redes Sociais / Segurança).</p>
        <a href="detalhes.php" class="btn btn-dark">Acessar Curso</a>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-4 mb-4">
    <div class="card h-100">
      <img src="computador02.jpg" class="card-img-top" alt="Imagem de um computador.">
      <div class="card-body">
        <h5 class="card-title">Curso Avançado</h5>
        <p class="card-text">Assuntos Abordados:
         Editor de texto; Planilha eletrônica e apresentação; Consolidação de dados; Hardware e Software; Banco de dados SQL; Sistemas operacionais; Microsoft office avançado.</p>
        <a href="detalhes.php" class="btn btn-dark">Acessar Curso</a>
      </div>
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
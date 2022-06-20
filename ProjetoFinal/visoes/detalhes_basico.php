<?PHP

  session_start();

  if(isset($_SESSION["nome_completo"])) {

  
?>

<!DOCTYPE html>
<html>
  <head>
    <title>TiCursos</title>
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
          <h2 class="titulo">Curso</h2>
          <hr>
          </div>
     </div>

    <div class="row">
       <div class="col-12 menu">
         <p><a href="index.php">Home</a> | Cursos</p>
         </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <h1 class="detalhes-titulo">Cursos Básicos de Informática </h1>
        </div>
    </div>


    <div class="row">
      <div class="col-12 col-md-12 col-lg-12 imagem-curso">
      <p><img src="computador02.jpg" alt="Imagem um computador." class="img-fluid"><p>
    </div>
     </div>

     <table class="table table-light table-hover">
      <tr>
        <th scope="col">Identificador</th>
        <th scope="col">Nome do curso</th>
      </tr>

        <tr>
     
     <?PHP
     
      include "../controles/a_conexao.php";

      $curso = "";
      $categoria = "";

      $con = abrirConexao();
      $sql = "SELECT * FROM cursos_categoria WHERE id_categoria='1';";
      $result = mysqli_query($con, $sql);
      $numRegistros = mysqli_num_rows($result);

      if($numRegistros > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          $id = $row["id_categoria"];
          $curso = $row["curso_id_curso"];
          $categoria = $row["categoria_id_categoria"];
        }
      }

    echo "<td> $id </td>";
    echo "<td> $curso </td>";





     
     ?>


        
        </tr>
    
    </table>
    
    </div>
    </div>
    

  <br>

 


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
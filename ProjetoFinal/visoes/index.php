

<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'>
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

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="computador.jpg" class="d-block w-100" alt="Imagem de um computador.">
      <div class="carousel-caption">
        <h5>TiCursos</h5>
        <p>Olá, seja bem-vindo ao TiCursos. Neste site, você usuário, pode encontrar cursos de Informática em três níveis, cada um envolvendo assuntos de fundamental importância, os quais contribuirá para sua vida estudantil e entrada no mercado de trabalho. Que você aproveite cada apostila que aqui oferecemos e se entregue ao máximo para melhores resultados. Bons estudos!</p>
      </div>
    </div>
    </div>
</div>


    <div class="container-fluid">

    <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
          <h2 class="titulo">Categoria de cursos</h2>
          <hr>
          </div>
     </div>

    <div class="row">
          <div class="col-sm-6 col-md-4 mb-4">
    <div class="card h-100">
      <img src="computador02.jpg" class="card-img-top" alt="Imagem de um computador.">
      <div class="card-body">
        <h5 class="card-title">Cursos básicos</h5>
        <p class="card-text">Informática básica é o conjunto de conhecimentos e habilidades mínimas para que um indivíduo seja parte do processo de inclusão digital. Nos cursos de informática básica o que se estuda é a navegação na Internet, edição de textos, planilha eletrônica, apresentação de slides utilizando o Sistema Operacional Windows e aplicativos do pacote Office como Word, Excel e Power Point.</p>
        <a href="detalhes_basico.php" class="btn btn-dark">Acessar Curso</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4 mb-4">
    <div class="card h-100">
      <img src="computador02.jpg" class="card-img-top" alt="Imagem de um computador.">
      <div class="card-body">
        <h5 class="card-title">Cursos Médios</h5>
        <p class="card-text">A informática intermediária é a etapa subsequente do aprendizado que inicia na informática básica. Tem como objetivo ampliar e aprofundar os conhecimentos iniciais da utilização do computador, internet, softwares e aplicativos.</p>
        <a href="detalhes_medio.php" class="btn btn-dark">Acessar Curso</a>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-4 mb-4">
    <div class="card h-100">
      <img src="computador02.jpg" class="card-img-top" alt="Imagem de um computador.">
      <div class="card-body">
        <h5 class="card-title">Cursos Avançados</h5>
        <p class="card-text">Os cursos de Informática Avançado foram desenvolvidos para o aluno aproveitar ao máximo as ferramentas da informática, visando aumentar a produtividade no ambiente de trabalho e também na escola. Nos cursos, o aluno vai aprender os principais recursos de ferramentas como: Editor de texto, planilha eletrônica e apresentação, consolidação de dados, Hardware e Software, Banco de dados SQL, sistemas operacionais, microsoft office avançado.</p>
        <a href="detalhes_avancado.php" class="btn btn-dark">Acessar Curso</a>
      </div> 
    </div>
  </div>
  </div>

  


   </div>

   <div class="container-fluid">

<div class="row">
      <div class="col-12 col-md-12 col-lg-12">
      <h2 class="titulo">Todos os cursos disponíveis</h2>
      <hr>
      </div>
 </div>

   <table class="table table-light table-hover">
      <tr>
        <th scope="col">Nome do curso</th>
        <th scope="col">Carga horária</th>
        <th scope="col">Descrição</th>
        <th scope="col">Ano</th>
        
      </tr>

        <tr>
            <?PHP

                include "../controles/controlar_cursos.php";
                $resultadoListagem = listarCursos();

                while($registro = mysqli_fetch_array($resultadoListagem)){
                    $id_curso = $registro["id_curso"];
                    $nome = $registro["nome"];
                    $carga_horaria = $registro["carga_horaria"];
                    $descricao = $registro["descricao"];
                    $ano = $registro["ano"];

                    echo "<tr>";
                
                    echo "<td>$nome</td>";
                    echo "<td>$carga_horaria</td>";
                    echo "<td>$descricao</td>";
                    echo "<td>$ano</td>";
                    echo "</tr>";



                }
            ?>
        
        </tr>
    
    </table>

    
  <footer>
  <div class="footer">
      <p>© 2022 Todos Os Direitos Reservados | TiCursos</p>
    </div>
  </footer>


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>

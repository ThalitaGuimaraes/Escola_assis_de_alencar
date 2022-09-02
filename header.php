
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- font icons from bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Escola Assis de Alencar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Feed/index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Feed/sobre.php">sobre </a>
        </li>
        <li class="nav-item">
          
          <a class="nav-link" href="Feed/relatorio.php">relatórios <i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            mais
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Feed/admin/adicionar-artigo.php">Publicar artigo <i class="fa fa-print" aria-hidden="true"></i></a></li>
            <li><a class="dropdown-item" href="Feed/admin/excluir-artigo.php">Editar/Deletar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="configuracao.php">Configuração <i class="fa fa-cogs" aria-hidden="true"></i></a></li>
          </ul>
        </li>
      
      </ul>
   
        <a class="btn btn-outline-success bg-success text-light" href="logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
      
    </div>
  </div>
</nav>
    
</body>
</html>
<?php
session_start();
require '../config.php';
require '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->adicionar($_POST['nome'],$_POST['titulo'], $_POST['conteudo']);

    redireciona('../index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">



    
    <title>Adicionar Artigo</title>



</head>
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Escola Assis de Alencar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../relatorio.php">relatórios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            mais
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="adicionar-artigo.php">Publicar artigo</a></li>
            <li><a class="dropdown-item" href="index.php">Editar/Deletar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Configuração</a></li>
          </ul>
        </li>
      
      </ul>
         <div class="logout">
        <a class="btn btn-outline-success" href="../assets/logout.php">Logout</a>
</div>    
    </div>
  </div>
</nav>

<body>
<div class="container-sm">
    <div id="container">
        <h1>Adicionar Artigo</h1>
        <form action="adicionar-artigo.php" method="POST" class="mb-4">
        <div class="mb-4">
  <label for="exampleFormControlInput1" class="form-label"><b>Nome do Professor</b></label>
  <input type="text" class="form-control"name="nome" id="exampleFormControlInput1" placeholder="Nome do professor">
</div>
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"><b>titulo</b></label>
  <input type="text" class="form-control"name="titulo" id="exampleFormControlInput1" placeholder="titulo">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"><b>escreva o relatórios</b></label>
  <textarea class="form-control" name="conteudo"id="exampleFormControlTextarea1" rows="4"></textarea>
</div>
  <input class="enviar" type="submit" value="enviar" >
        </form>
    </div>
</div>
<?php
    include('../../assets/footer.php');
    ?>
</body>

</html>
<style>
.enviar{
  margin-left:48%;
}

</style>
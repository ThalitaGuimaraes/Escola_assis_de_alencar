<?php
session_start();
require '../config.php';
include '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->editar($_POST['id'],$_POST['nome'], $_POST['titulo'], $_POST['conteudo']);

    redireciona('../admin/index.php');
}

$artigo = new Artigo($mysql);
$art = $artigo->encontrarPorId($_GET['id']);

include('../../assets/header.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <meta charset="UTF-8">


    <title>Editar Artigo</title>
</head>

<body>
<div class="container-sm">
    <div id="container">
        <h1>Editar relatório</h1>
        <form action="adicionar-artigo.php" method="POST">
        <div class="mb-3">
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
  <input type="submit" value="enviar" >
        </form>
    </div>
</div>
<?php
    include('../../assets/footer.php');
    ?>
</body>

</html>
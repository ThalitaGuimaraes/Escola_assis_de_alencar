<?php
session_start();
require '../../assets/conexao.php';
require '../config.php';
include '../src/Artigo.php';



$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html >
<html lang="pt-br" >

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <!-- font icons from bootstrap -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body >
<?php include('Boot/header.php'); ?>




    <div id="container" class="m-4" data-imprimaAqui>
        <h1>Página Administrativa</h1>
        
        <table class="table">
  <caption>Lista de usuários</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PROFESSOR</th>
      <th scope="col">TITULO</th>
      <th scope="col">RELATOR</th>
      <th scope="col">EDITAR</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($artigos as $art) { ?>
    <tr>
      <th scope="row"><?php echo $art['id']; ?></th>
      <td><?php echo $art['nome']; ?></td>
      <td><?php echo $art['titulo']; ?></td>
      <td><?php echo $art['conteudo']; ?></td>
      <td>
     <a class="botao" href="editar-artigo.php?id=<?php echo $art['id']; ?>"><input type="submit" value="Editar"></a>
     </td>
     <td>
     <a class="botao" href="excluir-artigo.php?id=<?php echo $art['id']; ?>"><input type="submit" value="Excluir" ></a>
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
       
    <p><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <input type="button" value="Imprimir" data-imprimir> </p> 
    </div>

  <?php
    include('../../assets/footer.php');
    ?>
</body>

<script src="../../javascript/imprimir.js"></script>
</html>

<style>
  input:hover{
    background-color:#17A2B8;
    color:white;
    border-radius:1px;
  }
</style>
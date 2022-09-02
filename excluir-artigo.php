<?php
session_start();
require '../config.php';
include '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->remover($_POST['id']);

    redireciona('../index.php');
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <!-- font icons from bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./adminStyle.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
</head>

<body>
<div id="container">
        <h1 class="excluir_h1"><i class="fa fa-exclamation-triangle excluir_icon" aria-hidden="true"></i> Você realmente deseja excluir o artigo? <i class="fa fa-exclamation-triangle excluir_icon" aria-hidden="true"></i></h1>
        <section class="btns">
            <form method="post" action="excluir-artigo.php">
                <p class="botao-area">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                    <button class="botao">Excluir <i class="fa fa-trash" aria-hidden="true"></i></button>
                </p>
            </form>
            <div class="btn-back">
                <button class="botao-back" data-back><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button>
            </div>
        </section>
    </div>
    <?php
    include('../../assets/footer.php');
    ?>
    <script src="../../javascript/admin-btns.js"></script>
</body>

</html>
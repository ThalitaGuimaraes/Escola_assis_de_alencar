<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
$conexao->set_charset('utf8');



?>
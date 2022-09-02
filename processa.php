<?php 
session_start();
include("conexao.php");

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST,'sobrenome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_NUMBER_INT);

$result_professor = "INSERT INTO professor (nome ,sobrenome,email ,senha) VALUES ('$nome','$sobrenome','$email','$senha')";
$resultado_professor = mysqli_query($conexao, $result_professor);

if(mysqli_insert_id($conexao)){
    header("Location: ../index.php");
} else {
    header('Location: ../index.php');
}



?>
<?php 
session_start(); 
include "conexao.php";

if (isset($_POST['email']) && isset($_POST['senha'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$senha = validate($_POST['senha']);

	if (empty($email)) {
		header("Location: ../index.php?error=User Name is required");
	    exit();
	}else if(empty($senha)){
        header("Location: ../index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM professor WHERE email='$email' AND senha='$senha'";

		$result = mysqli_query($conexao, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['senha'] === $senha) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['nome'] = $row['nome'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../Feed/index.php");
		        exit();
            }else{
				header("Location: ../index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: ../index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<?php
	$cpf=$_POST['cpf'];
	$conexao=mysqli_connect("localhost","root","","meusite",3306);
	if($conexao){

	}
	else{
	}
	$sql=mysqli_query($conexao,"SELECT cpf FROM usuarios WHERE cpf = '$cpf'")or die("erro ao selecionar");
	if(mysqli_num_rows($sql)==0){
		$sql="INSERT INTO usuarios  VALUES ('" . $_POST['cpf'] . "','" . $_POST['nome'] ."','" . $_POST['senha'] ."')";
		session_start();
		$_SESSION['sucesso'] = 1;
		header('Location: login.php');
	}
	else{
		session_start();
		header('Location: cadastro.php');
		$_SESSION['erro'] = 1;
	}	
	//echo mysqli_error($conexao);
	?>
</body>
</html>

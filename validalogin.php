<?php
	$cpf=$_POST['cpf'];
	$senha=$_POST['senha'];

	$conexao=mysqli_connect("localhost","root","","meusite",3306);
	if($conexao){
		echo " conexao com sucesso";
	}
	else{
		echo "erro nessa bosta";
	}
	$sql=mysqli_query($conexao,"SELECT cpf, senha FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'")or die("erro ao selecionar");
	if(mysqli_num_rows($sql)==0){
		session_start();
		header('Location: login.php');
		$_SESSION['sucesso'] = 2;
		die();
	}
	else{
		session_start();
		header('Location: mostrausuario.php');
		$_SESSION['login'] = 1;
		
	}
?>			
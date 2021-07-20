<!DOCTYPE html>
<html>
<head>
	<title>Pagina de login</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="login.css">
</head>
<body class="text-center">
	<form class="form-signin" action="conexao.php" method="POST">
	<?php 
	session_start();		
	if(!$_SESSION){
		
	}
	else if($_SESSION['erro']==1){?>
		<div class="alert alert-danger" role="alert">
 		 Erro ao cadastrar!
	</div><?php
	}
	session_destroy();
	?>
		<img  src="logo3.png" width="250px">
		<h3 class="mb-2">Cadastro</h3>
		<input type="text" name="cpf" class="form-control" placeholder="CPF" required autofocus>
		<input type="text" name="nome" class="form-control" placeholder="Nome" required autofocus>
		<input type="password" name="senha" placeholder="Senha" class="form-control" required autofocus>
		<div class="checkbox mb-3">
			<br><a href="login.php">Voltar</a>
		</div>
		<input type="submit" name="enviar" value="Cadastrar" class="btn btn-primary btn-lg btn-block">
		
	</form>
</body>
</html>
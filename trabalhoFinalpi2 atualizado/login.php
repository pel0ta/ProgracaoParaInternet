<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pagina de login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles.css">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
		
		<script type="text/javascript" src="script.js"></script>	
	</head>

	<body class="text-center login-body">
		<form class="form-signin" id="formlogin">
			<img src="imagensPHP/logo.png" width="250px" alt="Logo">

			<h3 class="mb-2">Login</h3>

			<input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required autofocus>

			<input type="password" name="senha" placeholder="Senha" class="form-control" maxlength="32" required>

			<button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
			
			<div class="dropdown-divider"></div>
				Não tem cadastro? <a href="cadastro.php">Clique aqui</a>
			</div>

			<div class="alert alert-danger fade mt-3" role="alert">
				Usuário e/ou senha incorretos!
			</div>
		</form>

		<form action="index.php" id="form" method="POST">
			<input type="hidden" name="login" id="login" class="form-control">
		</form>
	</body>
</html>
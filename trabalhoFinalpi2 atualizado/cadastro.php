<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pagina de Cadastro</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
		
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body class="text-center">
		<form class="form-signin" action="operacoes/insereusuario.php" id="formcad">
			<input type="text" name="admin" class="form-control" value="<?php echo isset($_SESSION["login"]) ? "1" : "0"; ?>" hidden>

			<img  src="imagensPHP/logo.png" width="250px" alt="Logo">

			<h3 class="mb-2">Cadastro</h3>

			<input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF" required autofocus>

			<input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="100" required autofocus>

			<input type="email" name="email" class="form-control" placeholder="Email" maxlength="100" required autofocus>

			<input type="password" name="senha" placeholder="Senha" class="form-control" maxlength="32" required autofocus>

			<div class="form-row justify-content-between">
				<div class="col-4">
					<button type="button" class="btn btn-danger btn-block" onclick="history.back()">Voltar</button>
				</div>

				<div class="col-7">
					<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
				</div>
			</div>
			<div class="alert fade mt-3" role="alert"></div>
		</form>
	</body>
</html>
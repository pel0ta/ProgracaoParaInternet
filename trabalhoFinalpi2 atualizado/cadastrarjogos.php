<?php 
	session_start();

	if(!isset($_SESSION['login']) || $_SESSION['login'] != "1")
		header("Location: index.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar Jogo</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
		
		<script type="text/javascript" src="script.js"></script>	
	</head>

	<body class="text-center">
		<?php include_once "headerNavbar.php"; ?>

		<form class="form-signin" action="operacoes/inserejogo.php" id="formcad" enctype="multipart/form-data">
			<h3 class="mb-2">Cadastro de jogo</h3>
			
			<input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="255" required autofocus>
			
			<input type="nember" name="preco" id="preco" class="form-control" placeholder="Preço" required autofocus>
			
			<input type="number" name="quantidade" id="qnt" class="form-control" placeholder="Quantidade" required autofocus>
			
			<input type="radio" name="plataforma" value="PS3"> PS3<br>
			
			<input type="radio" name="plataforma" value="XBOX"> XBOX<br>
			
			<input type="radio" name="plataforma" value="PC"> PC<br><br>
			
			<p>Selecione o gênero do jogo</p>
			<select name="genero" class="form-control">
				<option value="Ação">Ação</option>
				<option value="Esporte">Esporte</option>
				<option value="Corrida">Corrida</option>
				<option value="Luta">Luta</option>
			</select><br>
			
			<p>Enviar imagem:</p>
			<input type="file" required name="arquivo">

			<div class="form-row mt-3 justify-content-between">
				<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
			</div>
			<div class="alert fade mt-3" role="alert"></div>
		</form>
	</body>
</html>
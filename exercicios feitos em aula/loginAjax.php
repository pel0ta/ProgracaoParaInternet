<!DOCTYPE html>
<html>
<head>
	<title>Pagina de login</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="login.css">
	<script type="text/javascript">
		$(function()){
		$("#meuform").submit(function(event{
			event.preventDefault();//cancela o evento padrao
			var dados_form=$(this).serialize();
			$.ajax({
				type:"post",
				url:"realizarlogin.php",
				data:dados_form,
				success: function(responseData){
					$("#mensagemDiv").html("sucesso! respostado servidor:<br/>"+responseData);
				},
				error: function (request,status,error){
					$("#mensagemDiv").html("Erro! Resposta do servidor:<br/>"+request.responseText);
				}
			});
		});
	});
	</script>
</head>
<body class="text-center">
	<form class="form-signin" action="validalogin.php" method="POST">
		<?php 
		session_start();		
	if(!$_SESSION){
		
	}
	else if($_SESSION['sucesso']==1){?>
		<div class="alert alert-success" role="alert">
 		 cadastro com sucesso!
	</div><?php
	}
	else if($_SESSION['sucesso']==2){?>
		<div class="alert alert-danger" role="alert">
 		 Erro ao logar!
	</div><?php
	}
	session_destroy();
		 ?>
		<img  src="logo3.png" width="250px">
		<h3 class="mb-2">Login</h3>
		<input type="text" name="cpf" class="form-control" placeholder="CPF" required autofocus>
		<input type="password" name="senha" placeholder="Senha" class="form-control" required>
		<div class="checkbox mb-3">
			<label><input type="checkbox" name="lembrar"> Lembrar de min</label>
			<br><a href="cadastro.php">cadastrar</a>
		</div>
		<input type="submit" name="enviar" value="Entrar" class="btn btn-primary btn-lg btn-block">
		
	</form>
</body>
</html>
<?php
	session_start();

	if(!isset($_SESSION['login']) || $_SESSION['login'] != "1")
		header("Location: index.php");

	include_once "operacoes/conn.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tabela de Usuarios</title>

		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles.css">
	</head>	
	<body>
		<?php include_once "headerNavbar.php"; ?>

		<div class="mt-5 container">
			<table class="my-3 table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">cpf</th>
						<th scope="col">nome</th>
						<th scope="col">email</th>
						<th scope="col">senha</th>
					</tr>
				</thead>
				<tbody> 
				<?php 
					$dados = select("SELECT * FROM usuarios");
					foreach($dados as $dado){
				?>
					<tr>	
						<td><?php echo $dado['cpf']; ?></td>
						<td><?php echo $dado['nome']; ?></td>
						<td><?php echo $dado['email']; ?></td>	
						<td><?php echo $dado['senha']; ?></td>		
					</tr> 	
				<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>	
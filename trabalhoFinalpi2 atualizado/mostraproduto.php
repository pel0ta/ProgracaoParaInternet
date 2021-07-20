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
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID </th>
						<th scope="col">Nome</th>
						<th scope="col">Preço</th>
						<th scope="col">Quantidade</th>
						<th scope="col">Plataforma</th>	
						<th scope="col">Genero</th>			
					</tr>
				</thead>
				<tbody> 
				<?php 
					$dados = select("SELECT * FROM jogos");
					foreach ($dados as $dado){
				?>
					<tr>	
						<td><?php echo $dado['id']; ?></td>
						<td><?php echo $dado['nome']; ?></td>
						<td><?php echo $dado['preco']; ?></td>
						<td><?php echo $dado['quantidade']; ?></td>
						<td><?php echo $dado['plataforma']; ?></td>
						<td><?php echo $dado['genero']; ?></td>		
					</tr> 	
				<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>	
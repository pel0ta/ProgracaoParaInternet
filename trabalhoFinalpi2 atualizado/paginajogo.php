<?php
	session_start();
	
	$idjogo = $_GET['id'];

	include "conn.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MEGA JOGOS</title>

		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles.css">	
	</head>
			
  	<body class="d-flex flex-column h-100">
		<?php include "headerNavbar.php" ?>
	
		<div class="container-fluid">
			<div class="row">
				<?php
					$dados = select("SELECT * FROM jogos WHERE id = $idjogo");
				?>
				<div class="col-md-6"  >
					<div class="card-body">
						<img src=./imagensPHP/<?php echo $dados['imagem']; ?> class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"><?php echo $dados['id']; ?></h5>
							<p class="card-text">VALOR R$: <?php echo $dados['preco']; ?></p>
							<li class="list-group-item">Quantidade: <?php echo $dados['quantidade']; ?></li>
							<li class="list-group-item">Plataforma: <?php echo $dados['plataforma']; ?></li>
							<li class="list-group-item">Genero: <?php echo $dados['genero']; ?></li><br>
							<a href="paginajogo.php" class="btn btn-primary">COMPRAR</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
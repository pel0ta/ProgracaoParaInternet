<?php
	session_start();

	if(!isset($_SESSION["carrinho"]))
        $_SESSION["carrinho"] = [];

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION['login'] = $_POST["login"];
		header("Location: index.php");
	}

	include_once "operacoes/conn.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MEGA JOGOS </title>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="styles.css">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
		
		<script type="text/javascript" src="script.js"></script>
	</head>

	<body class="d-flex flex-column h-100">
		<?php include "headerNavbar.php" ?>

		<div class="container-fluid my-3">
			<div class="row">
				<?php
					$key = "1";
					$value = "1";
					
					if(isset($_GET["gen"])) {
						$key = "genero";
						$value = $_GET["gen"];
					}
					else if(isset($_GET["plat"])) {
						$key = "plataforma";
						$value = $_GET["plat"];
					}

					$dados = select("SELECT * FROM jogos WHERE $key = '$value'");

					foreach($dados as $dado){
						if($dado['quantidade']){
				?>
					<div class="col-3 my-2">
						<div class="card">
							<img src="imagensPHP/<?php echo  $dado['imagem'] ?>" class="card-img-top" width="200px" height="400px">

							<div class="card-body">
								<h5 class="card-title"><?php echo $dado['nome'] ?></h5>

								<p class="card-text">R$ <?php echo $dado['preco'] ?></p>

								<div class="form-row justify-content-center align-itens-between">
									<div class="col-5">
										<a role="button" href="paginajogo.php?id=<?php echo $dado['id'];?>" class="btn btn-success btn-block">Detalhes</a>
									</div>

									<form class="col-6">
										<input type="hidden" name="id" value="<?php echo $dado['id'];?>">
										<input type="hidden" name="img" value="imagensPHP/<?php echo  $dado['imagem'] ?>">
										<input type="hidden" name="nome" value="<?php echo $dado['nome'] ?>">
										<input type="hidden" name="preco" value="<?php echo $dado['preco'] ?>">
										
										<button type="button" onclick="addCarrinho($(this).parent())" class="btn btn-primary btn-block">Add Carrinho</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				<?php }} ?>
			</div>
		</div>
	</body>
</html>
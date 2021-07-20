<!DOCTYPE html>
<html>
<head>
	<title>loja</title>
</head>
	<body>
		<?php
			session_start();
		?>
		<H1 ><p>ERA PRA SER UMA LOJA</p></H1><BR><BR>
		<form action="carrinho.php" method="POST">
		<input type="submit" name="Add carrinho" value="VER carrinho"><br><br>
		</form>
		<form action="#" method="POST">
			<div>
				<img src="a.jpg"> 
				<p>Detroid</p>
				<p>valor R$ 120,00</p>
				<input type="hidden" id="jogo1" name="nomejogo" value="Detroid">
				<input type="hidden" id="jogo1" name="preco" value="120.00">
				<input type="submit" name="Add carrinho" value="Add carrinho">
			</div><br><br>
		</form>
		<form action="#" method="POST">
			<div>
				<img src="b.jpg"> 
				<p>Just cause 4</p>
				<p>valor R$ 160,00</p>
				<input type="hidden" id="jogo2" name="nomejogo" value="Just cause 4">
				<input type="hidden" id="jogo2" name="preco" value="160.00">
				<input type="submit" name="Add carrinho" value="Add carrinho">
			</div><br><br>
			<div>
		</form>
		<form action="#" method="POST">
				<img src="c.jpg"> 
				<p>Survival Evolved</p>
				<p>valor R$ 80,00</p>
				<input type="hidden" id="jogo2" name="nomejogo" value="Survival Evolved">
				<input type="hidden" id="jogo2" name="preco" value="80.00">
				<input type="submit" name="Add carrinho" value="Add carrinho">
			</div><br><br>
		</form>
	</body>
</html>
<?php
	$nome=0;
	$valor=0;
	
	if(isset($_POST['nomejogo'])){
		$nome=$_POST['nomejogo'];
		$valor=$_POST['preco'];

		$novo = array('nomejogo'=>$nome, 'preco'=>$valor);
		if(isset($_SESSION['jogos'])){
			$carrinho = $_SESSION['jogos'];
			array_push($carrinho, $novo);

			$_SESSION['jogos'] = $carrinho;
		}
		else {
			$_SESSION['jogos'] = array($novo);
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>converte funçoes </title>
</head>
<body>
	<form action="exercio6Funcoes.php" method="POST">
		<label>Texto:</label>
		<input type="text" name="texto"><br>
		<label>substituir:</label>
		<input type="text" name="susb"><br>
		<label>por:</label>
		<input type="text" name="por"><br><br>
		<input type="submit" value="Enviar">
		</form>
		<?php
			$novo=$_POST["texto"];
			$novafrase = str_replace($_POST["susb"], $_POST["por"], $novo);
			echo "$novafrase";
		?>
	
</body>
</html>

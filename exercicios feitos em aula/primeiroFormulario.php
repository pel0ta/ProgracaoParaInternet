<!DOCTYPE html>
<html>
<head>
	<title>Formularios em php</title>
</head>
<body>
	<h1>Manipulando dados de formularios em php</h1>
	<form action="enviarcontato.php" method="POST">
		<label>Nome:</label>
		<input type="text" name="nome">
		<br><br>
		<label>Email</label>
		<input type="Email" name="email">
		<br><br>
		<label>idade</label>
		<select>
			<?php
			$estados=[
				"MG"=>"Minas Gerais",
				"AM"=>"Amazonas",
				"TO"=>"Tocantins",
				"DF"=>"Distrito Federal",
				"SP"=>"Sao paulo",
			];
			for ($i=18; $i <=50 ; $i++) { 
				echo "<option>".$i."</option>";
			}
		?>	
		</select><br><br>
		<label>Selecione um estado</label>
		<select>
			<?php
				foreach ($estados as $ch=> $value) {
					echo "<option value='$ch'>".$value."</option>";
				 }  
			?>
		</select>
		<br><br>
		<label>Descrição</label><br>
		<textarea name="descricao" cols="40" rows="5">
		</textarea>
		<br><input  type="submit" value="Enviar">
	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Tabela de Usuarios</title>
</head>	
	<body>
		<?php
		session_start();
			if($_SESSION['login']===1){
			?>	
				<link rel="stylesheet" href="bootstrap.min.css">
		<div class="container">
		<?php
			$conexao=mysqli_connect("localhost","root","","meusite",3306);
			$sql=mysqli_query($conexao,"SELECT *FROM usuarios");
		?>
		<div class="container">
		<table class="table">
		  	<thead class="thead-dark">
		   		<tr>
		    	  	<th scope="col">cpf</th>
		      		<th scope="col">nome</th>
		      		<th scope="col">senha</th>	
		     	</tr>
		  	</thead>
			<tbody> 
			<?php 
			while($dados = mysqli_fetch_array($sql)){
		 		$cpf = $dados['cpf'];
		 		$nome = $dados['nome'];
		  		$senha = $dados['senha']; 
		  	?>
			<tr>	
		      <td><?php echo $cpf ?></td>
		      <td><?php echo $nome ?></td>
		      <td><?php echo $senha ?></td>		
			</tr> 	
			<?php } ?>
			</tbody>
		</table>
	</div>
	<button onclick="sair()"><a href="sair.php">Sair</button>
	</body>
</html>	
	<?php			
		}
		else {
			header('Location: login.php');
		}
	?>
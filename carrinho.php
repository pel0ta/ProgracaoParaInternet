<?php
	session_start();
	if($_SESSION){
		$itens=$_SESSION["jogos"];
		echo "Os intens no carrinho sao : <br>";
		foreach ($itens as $value) {
			echo "<br>". $value['nomejogo']."  ".$value['preco'];
		}
	}
	else{
		echo "nenhum produto add no carrinho";
	}
	session_destroy()

?>
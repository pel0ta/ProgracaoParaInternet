<?php

	$dados=$_POST["addmore"];
	$total=0;
	$soma = 0;
	foreach ($dados as $value) {
		if($value==null){
			echo "nenhum valor Digitado :( ";
			exit();
		}
		else{
			if($value>=0){
				$soma+=$value;
			}
			else{
				$total++;
			}
		}
	}
	
	echo "A Soma  dos valores´positivos são: ".$soma;
	echo "<br>A quantidade de valores Negativos foi: ".$total;
?>

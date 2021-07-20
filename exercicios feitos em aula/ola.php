<!DOCTYPE html>
<html>
<head>
	<title>aprendendo PHP</title>
</head>
<body>
	<?php
		echo "exercio 1<br>";
		$a=[2,6,1,5,3];
		sort($a);
		foreach ($a as $value) {
			echo "$value";
		}
		echo"<br> exercio 2<br>";
		$soma=0;
		$total=0;
		$b=[2,5,-1,3,-4,9,0,-6,7,8];
		foreach ($b as $value) {
			if($value>=0){
				$soma+=$value;
			}
			else{
				$total++;
			}
		}
		echo "<br>soma positivos ".$soma;
		echo "<br>total negativos ".$total;

		echo "<br><br>exercio 3<br>";
		$c=[2,5,1,3,4,99,0,6,7,8,2,5,1,3,4,9,0,6,7,-8];
		$menor=999;
		$maior=-999;
		$tot=0;
		$media=0;
		$soma1=0;
		foreach ($c as $value) {
			$soma1+=$value;
			$tot++;
			if($menor>$value){
				$menor=$value;
			}
			else if($maior<$value){
				$maior=$value;
			}
		}
		$media=$soma1/$tot;
		echo "<br>o menor valor e ".$menor;
		echo "<br>o maior valor e ".$maior;
		echo "<br>a media é ".$media;
	?>

</body>
</html>
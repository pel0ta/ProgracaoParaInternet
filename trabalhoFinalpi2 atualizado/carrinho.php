<?php
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION['login'] = $_POST["login"];
		header("Location: index.php");
	}
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

        <div class="container jumbotron mt-3 text-center">
            <h3>Carrinho de compra</h3>

            <?php
                $subtotal = 0;
                if(count($_SESSION["carrinho"]))
                    foreach($_SESSION["carrinho"] as $key => $jogo){
                        $preco = floatval(number_format(str_replace(",", ".", str_replace(".", "", str_replace("R$ ", "", $jogo[3]))), 2, '.', ''));
                        
                        $subtotal += $preco * intval($jogo[0]);
            ?>
                        <div class="card my-2">
                            <div class="px-3 form-row align-items-center justify-content-center">
                                <img src="<?php echo $jogo[1]; ?>" width="80px" height="100px">

                                <div class="card-body">
                                        <h5 class="card-title"><?php echo $jogo[2]; ?></h5>

                                        <p class="card-text"><?php echo $jogo[3]; ?></p>
                                </div>

                                <div class="py-2" style="min-width: 30px">
                                    <div class="card" onclick="atualizaCar(<?php echo $key; ?>, 'soma', <?php echo $preco ?>)" style="cursor: pointer">
                                        <span class="text-center align-middle">+</span>
                                    </div>

                                    <p class="pt-3 card-text text-center" id="p-<?php echo $key; ?>"><?php echo $jogo[0]; ?></p>

                                    <div class="card" onclick="atualizaCar(<?php echo $key; ?>, 'subtrai', <?php echo $preco ?>)" style="cursor: pointer">
                                        <span class="text-center align-middle">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } else echo "<br><br><h5>Seu carrinho está vazio</h5>;"?>
                <div class="text-right">
                    <br><h5>Subtotal R$ <span id="sub"><?php echo $subtotal; ?></span></h5>
                </div>
        </div>
        
        <div class="form-row justify-content-around">
            <div class="col-4">
                <button type="button" class="btn btn-success btn-block" onclick="window.location.href = 'index.php'">Continuar comprando</button>
            </div>

            <div class="col-4">
                <button type="button" class="btn btn-primary btn-block">Finalizar Compra</button>
            </div>
        </div>
    </body>
</html>
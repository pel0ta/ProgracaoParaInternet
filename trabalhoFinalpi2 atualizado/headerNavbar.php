<?php
    if(isset($_SESSION["login"]) && $_SESSION["login"] == 1){
?>
    <header class="mb-5">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand mr-5" href="index.php">Home</a>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="navbar-brand" href="cadastro.php">Cadastrar usuário</a>
                    </li>

                    <li class="nav-item active">
                        <a class="navbar-brand" href="mostrausuario.php">Mostrar usuários</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-brand" href="cadastrarjogos.php">Cadastrar jogos</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-brand" href="mostraproduto.php">Mostrar jogos</a>
                    </li>
                </ul>

                <div class="justify-content-end">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="navbar-brand" href="sair.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php } else { ?>
    <header class="mb-5">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand mr-5" href="index.php">Home</a>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="navbar-brand" href="?plat=PS3">PS3</a>
                    </li>

                    <li class="nav-item active">
                        <a class="navbar-brand" href="?plat=XBOX">XBOX</a>
                    </li>

                    <li class="nav-item">
                        <a class="navbar-brand" href="?plat=PC">PC</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="genero" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gênero
                        </a>

                        <div class="dropdown-menu" aria-labelledby="genero">
                            <a class="dropdown-item" href="?gen=Ação">Ação</a>
                            <a class="dropdown-item" href="?gen=Esporte">Esporte</a>
                            <a class="dropdown-item" href="?gen=Corrida">Corrida</a>
                            <a class="dropdown-item" href="?gen=Luta">Luta</a>
                        </div>
                    </li>
                </ul>

                <div class="row justify-content-end align-items-center">
                    <a href="carrinho.php"><img class="mr-3" onmouseover="dropCar()" onmouseout="catchCar()" src="imagensPHP/carrinho.png" style="cursor: pointer" width="35px" height="35px" alt="Logo"></a>
                    
                    <div id="dropcar">
                        <div class="mr-4 dropdown-menu dropdown-menu-right">
                            <h4 class="mx-2 text-secondary text-center">Carrinho</h4>

                            <?php if(count($_SESSION["carrinho"]))
                                    foreach($_SESSION["carrinho"] as $key => $jogo){   
                            ?>
                                <div class="card m-2" id="car-<?php echo $key; ?>">
                                    <div class="px-3 py-2 form-row align-items-center justify-content-center text-center">
                                        <img src="<?php echo $jogo[1]; ?>" width="80px" height="100px">

                                        <div class="card-body">
                                                <h5 class="card-title"><?php echo $jogo[2]; ?></h5>

                                                <p class="card-text"><?php echo $jogo[3]; ?></p>
                                        </div>

                                        <div class="py-2" style="min-width: 30px">
                                            <span class="text-center align-middle">Qtd</span>

                                            <p class="pt-3 card-text text-center" id="p-<?php echo $key; ?>"><?php echo $jogo[0]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                
                    <div class="row" id="carrinho" <?php if(!count($_SESSION["carrinho"])) echo "hidden"; ?>>
                        <span class="text-center align-middle"><?php echo count($_SESSION["carrinho"]); ?></span>
                    </div>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <?php if(!isset($_SESSION["login"])) {?>
                                <a class="navbar-brand" href="login.php">Logar</a>
                            <?php } else { ?>
                                <a class="navbar-brand" href="sair.php">Sair</a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php } ?>
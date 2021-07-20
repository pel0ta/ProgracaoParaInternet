<?php
	session_start();

    if(array_key_exists($_POST["id"], $_SESSION["carrinho"])) {
        $_SESSION["carrinho"][$_POST["id"]][0]--;
        
        if(!$_SESSION["carrinho"][$_POST["id"]][0]) {
            unset($_SESSION["carrinho"][$_POST["id"]]);
        }
    }
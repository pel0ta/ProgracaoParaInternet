<?php
    session_start();

    $id = $_POST["id"];
    $img = $_POST["img"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];

    if(array_key_exists($id, $_SESSION["carrinho"])) {
        $_SESSION["carrinho"][$id][0]++;
    }
    else
        $_SESSION["carrinho"][$id] = Array(1, $img, $nome, $preco);
    
    echo count($_SESSION["carrinho"]);
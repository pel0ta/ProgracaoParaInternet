<?php
    include "conn.php";
    
    $cpf = $_POST['cpf'];
    $senha = md5($_POST['senha']);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $admin = $_POST['admin'];
    
    $usuario = insert("INSERT INTO usuarios(cpf, senha, nome, email, admin)  VALUES ('$cpf', '$senha', '$nome', '$email', '$admin')");

    if($usuario)
        echo true;
    else
        echo false;
    
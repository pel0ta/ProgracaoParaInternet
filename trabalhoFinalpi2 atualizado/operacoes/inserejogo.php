<?php
    include "conn.php";
    
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $plataforma = $_POST['plataforma'];
    $genero = $_POST['genero'];

    if(isset($_FILES['arquivo'])){
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novonome = md5(time()) . $extensao;
		$PASTA="./imagensPHP/";
		
		if (!file_exists($PASTA)){
    		mkdir("$PASTA", 0700);
        }	
        
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $PASTA.$novonome);
        
        $jogo = insert("INSERT INTO jogos(nome, preco, quantidade, plataforma, genero, novonome, data) VALUES ('$nome', '$preco', '$quantidade', '$plataforma', '$genero', '$novonome', NOW())");

        if($jogo)
            echo true;
        else
            echo false;
    }

    echo false;
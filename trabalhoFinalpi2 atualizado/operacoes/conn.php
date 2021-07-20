<?php

function conexao()
{
	$conn = mysqli_connect("localhost", "root", "", "trabalhofinal");
	if ($conn->connect_error)
	throw new Exception('Falha na conex�o com o MySQL: ' . $conn->connect_error);

	return $conn;   
}

function select($query) {
    $conexao = conexao();
    $dados = [];
    
    if($conexao) {
        $sql = mysqli_query($conexao, $query);
        
        while($dado = mysqli_fetch_array($sql))
            array_push($dados, $dado);
            
        mysqli_close($conexao);
    }

    return $dados;
}

function insert($query) {
    $conexao = conexao();

    if($conexao) {
        if(mysqli_query($conexao, $query))
            return true;
        else
            return false;
    }

    return false;
}
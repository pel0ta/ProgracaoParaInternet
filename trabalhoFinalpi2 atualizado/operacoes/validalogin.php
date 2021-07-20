<?php
	include "conn.php";
	
	$cpf = $_POST['cpf'];
	$senha = md5($_POST['senha']);

	$usuario = select("SELECT cpf, admin FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'");

	if(!count($usuario))
		echo false;
	else
		echo $usuario[0]["admin"];
	
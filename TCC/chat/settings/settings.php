<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "usbw";
	$banco = "tcc";

	//Iniciando a conexão
	$con= mysqli_connect($host, $usuario, $senha,$banco) OR print(mysql_error());
	

	if(!$con){
		echo "não foi possivel conectar ao MySQL" . PHP_EOL;
		echo "Debugging erro:". mysqli_connect_error() . PHP_EOL;
		
	}
	//Outras configs
	date_default_timezone_set('America/Sao_Paulo');
	$globalData = date("d/m/Y");
	$globalHora = date("H:i");
	$showNome = false;

	if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != null){
		$nomeAtual = $_SESSION['nome'];
		$usuarioAtual = $_SESSION['usuario'];
		$showNome = true;
	}
?>
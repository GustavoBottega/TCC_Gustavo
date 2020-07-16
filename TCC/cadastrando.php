<?php

include("chat/settings/settings.php");


$nome = $_POST['nome'];
$nome_user = $_POST['nome_user'];
$email = $_POST['email'];
$senha = $_POST ['senha'];
$data_nasc = $_POST ['data_nasc'];
$sql = "insert into usuario  (nome,usuario, email,senha, data_nasc) values ('$nome'  ,'$nome_user'  , '$email' ,'$senha','$data_nasc') " ;


$query = mysqli_query($con, $sql );

if ($query){

	header("location:chat/");
}
else{
	echo "Erro ao inserir registro." . mysqli_error($con);
}

mysqli_close($con);


?> 

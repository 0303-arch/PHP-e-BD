<?php 

	$host= "localhost";
	$user= "etecia";
	$pwd= "123456";
	$db="dbLoja";

	$con= mysqli_connect($host,$user,$pwd,$db);

	if(mysqli_connect_errno()){

		echo "Erro ao entrar com a base de dados:".

	mysqli_connect_error();

	}else{

		$sql= 'create table tbPEssoas(codPessoa int not null auto_increment,
		nome varchar(100),
		email varchar(100),
		telCel char(10),
		primary key(codPessoa))';

		if(mysqli_querry($sql)){
			echo ("Banco de Dados criado com sucesso");
		}
		
		mysql_close($con);
	}


	




 ?>
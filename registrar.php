<?php 
session_start();

	include("conexoes.php");
	include("funcoes.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$nome_usuario = $_POST['nome_usuario'];
		$senha = $_POST['senha'];

		if(!empty($nome_usuario) && !empty($senha) && !is_numeric($nome_usuario))
		{

			
			$id_usuario = random_num(20);
			$query = "insert into usuarios (id_usuario,nome_usuario,senha) values ('$id_usuario','$nome_usuario','$senha')";

			mysqli_query($con, $query);

			header("Location: logar.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Registrar</div>

			<input id="text" type="text" name="nome_usuario"><br><br>
			<input id="text" type="password" name="senha"><br><br>

			<input id="button" type="submit" value="Registrar"><br><br>

			<a href="login.php">Logar-se</a><br><br>
		</form>
	</div>
</body>
</html>
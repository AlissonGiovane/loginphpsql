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

			
			$query = "select * from usuarios where nome_usuario = '$nome_usuario' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['senha'] === $senha)
					{

						$_SESSION['id_usuario'] = $user_data['id_usuario'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="nome_usuario"><br><br>
			<input id="text" type="password" name="senha"><br><br>

			<input id="button" type="submit" value="Logar"><br><br>

			<a href="registrar.php">Registrar-se</a><br><br>
		</form>
	</div>
</body>
</html>
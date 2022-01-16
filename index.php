<?php 
session_start();

	include("conexoes.php");
	include("funcoes.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Meu login</title>
</head>
<body>

	<a href="logar.php">Sair</a>
	<h1>Essa é a pagina principal</h1>

	<br>
	Olá, <?php echo $user_data['nome_usuario']; ?>
		
</body>
</html>
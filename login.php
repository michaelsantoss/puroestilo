<?php 
	session_start();
	if (isset($_SESSION['login'])&&isset($_SESSION['senha'])) {
	header('location:home.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Area de login || Puro Estilo</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
	<form action="controle.php" method="POST">
		login <input type="text" name="login"><br>	
		senha <input type="password" name="senha">
		<br>
		<input type="submit" value="Entrar">	
	</form>
</body>
</html>
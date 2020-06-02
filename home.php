<?php 
	session_start();
	if (!isset($_SESSION['login'])&&!isset($_SESSION['senha'])) {
		header('location:login.php');
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Puro Estilo::<?php echo $_SESSION['nome']; ?></title>
 	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
 </head>
 <body>
 	<nav>
 		<p><h3>Puro Estilo ::: <?php echo $_SESSION['nome']; ?></h3><b></p>
 		<ul>
 			<li><a href="">Cadastrar Produto</a></li>
 			<li><a href="">Ver Vendas</a></li>
 			<li><a href="">Ver Devedores</a></li>
 			<li><a href="">Ver Encomendas</a></li>
 		</ul>
 	</nav>
 </body>
 </html>
 <a href="sair.php" id="sair">sair</a>
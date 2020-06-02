<?php 	
session_start();
if (!empty($_POST['login']) && !empty($_POST['senha'])) {
		include_once 'bd/conexao.php';
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$acao = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
		$resultado = mysqli_query($conn,$acao);
		if(mysqli_num_rows($resultado)>0){
			while ($dados = mysqli_fetch_assoc($resultado)) {
				$_SESSION['login'] = $dados['login'];
				$_SESSION['senha'] = $dados['senha'];
				$_SESSION['nome'] = $dados['nome'];
				header('location:home.php');
			}
		}else{
			echo "<script>
					alert('Login ou senha incorreto, tente novamente.');
					window.location.href='login.php';
			  </script>";	
		}





	}else{
		echo "<script>
				alert('Login e/ou senha vazio, tente novamente.');
				window.location.href='login.php';
			  </script>";
	}	
 ?>
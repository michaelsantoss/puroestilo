<?php 
	session_start();
  if (!isset($_SESSION['login'])&&!isset($_SESSION['senha'])) {
    header('location:../login.php');
  }
  include_once '../bd/conexao.php';

  $nome = $_POST['nome'];
  $tamanho = $_POST['tam'];
  $qtd = $_POST['qtd'];
  $desc = $_POST['desc'];
  $vp = $_POST['vp'];
  $vv = $_POST['vv'];

  $confere = "SELECT * FROM prod_disponiveis WHERE nome = '$nome'";
  $result = mysqli_query($conn,$confere);
  if (mysqli_num_rows($result)>0) {
  	echo "
  		<script>
  			if(!confirm('Já existe um item com esse nome, deseja continuar o cadastro?')){
  				window.location.href='../cadastrar_prod.php';
  			}
  		</script>
  		";
  }
  $acao = "INSERT INTO prod_disponiveis(nome,tamanho,descricao,quantidade,valor_pago,valor_venda) VALUES('$nome','$tamanho','$desc','$qtd','$vp','$vv')";
  $result = mysqli_query($conn,$acao);
  if ($result) {
  	echo "<script>
					alert('Produto inserido com sucesso!');
					window.location.href='../cadastrar_prod.php';
			  </script>";
  }else{
  	echo "n bombo";
  }
 ?>
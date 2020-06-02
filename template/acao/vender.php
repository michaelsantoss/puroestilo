<?php 
	session_start();
  if (!isset($_SESSION['login'])&&!isset($_SESSION['senha'])) {
    header('location:../login.php');
  }
  include_once '../bd/conexao.php';
  
  $id = $_POST['id'];
  $nome = $_POST['nomep'];
  $vv = $_POST['valorpago'];
  $quantidade = $_POST['quantidade'];
  $vendedor = $_SESSION['nome'];
  $cliente = $_POST['comprador'];

  $acao = "INSERT INTO prod_vendidos(id_prod,nome, valor_venda, quantidade, vendedor, cliente)VALUES('$id','$nome','$vv','$quantidade','$vendedor','$cliente')";
  $result = mysqli_query($conn,$acao);
  if ($result) {
    echo "<script>
          alert('Produto vendido com sucesso!');
        </script>";
  }else{
    echo "n bombo";
  }


















/*
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
  }*/
 ?>
<?php 
	session_start();
  if (!isset($_SESSION['login'])&&!isset($_SESSION['senha'])) {
    header('location:../login.php');
  }
  include_once '../bd/conexao.php';
  
  $id = $_POST['id'];
  $nome = $_POST['nomep'];
  $vv = $_POST['vv'];
  $quantidade = $_POST['quantidade'];
  $vendedor = $_SESSION['nome'];
  $cliente = $_POST['comprador'];

 $acao = "INSERT INTO prod_vendidos(id_prod,nome, valor_venda, quantidade, vendedor, cliente)VALUES('$id','$nome','$vv','$quantidade','$vendedor','$cliente')";
  $result = mysqli_query($conn,$acao);
  if ($result) {
    echo "<script>
          alert('Produto vendido com sucesso!');
          window.location.href='../';
          </script>";
  }else{
    echo "n bombo";
  }

 ?>
<?php 
	session_start();
  if (!isset($_SESSION['login'])&&!isset($_SESSION['senha'])) {
    header('location:../login.php');
  }
  include_once '../bd/conexao.php';
  
  $id = $_POST['id'];
  $nome = $_POST['nomep'];
  $tamanho = $_POST['tam'];
  $quantidade = $_POST['quantidade'];
  $descricao = $_POST['desc'];
  $valorpago = $_POST['valorpago'];
  $vv = $_POST['vv'];
  $vendedor = $_SESSION['nome'];
 
 $acao = "UPDATE prod_disponiveis SET nome=$nome, tamanho = $tamanho, descricao = $descricao, quantidade = $quantidade, valor_pago = $valorpago, valor_venda = $vv WHERE id_prod=$id";
  $result = mysqli_query($conn,$acao);
  if ($result) {
    echo "<script>
          alert('Produto atualizado com sucesso!');
          window.location.href='../';
          </script>";
  }else{
    echo "n bombo";
  }

 ?>
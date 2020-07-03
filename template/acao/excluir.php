<?php 
	session_start();
  if (!isset($_SESSION['login'])&&!isset($_SESSION['senha'])) {
    header('location:../login.php');
  }
  include_once '../bd/conexao.php';
  
  $id = $_GET['id'];
  
 $acao = "DELETE FROM prod_disponiveis WHERE id_prod = $id";
  $result = mysqli_query($conn,$acao);
  if ($result) {
    echo "<script>
          alert('Produto excluido com sucesso!');
          window.location.href='../';
          </script>";
  }else{
    echo "n bombo";
  }

 ?>
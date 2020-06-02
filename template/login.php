<?php 
  session_start();
  if (isset($_SESSION['login'])&&isset($_SESSION['senha'])) {
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Puro Estilo - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark" style="background-image: url('imagens/logo.jpeg');">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Puro Estilo - Login</div>
      <div class="card-body">
        <form action="controle.php" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="login" required="required" autofocus="autofocus" name="login">
              <label for="inputEmail">Login</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="senha" required="required" name="senha">
              <label for="inputPassword">Senha</label>
            </div>
          </div>
          
          <input type="submit" class="btn btn-primary btn-block" value="Entrar">
        </form>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>

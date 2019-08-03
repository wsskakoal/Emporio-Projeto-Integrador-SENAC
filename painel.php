<?php
session_start();
include('verifica_login.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>Empório do seu Jõao</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="painel.php">EMPÓRIO DO SEU JOÃO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="listaclientes.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listafornecedores.php">Fornecedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaestoque.php">Estoque</a>
        </li>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cadastro
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <a href="cadcliente.php" class="dropdown-item"> Cadastro de clientes</a>
            <a href="entraproduto.php" class="dropdown-item">Entrada de Produtos</a>
            <a href="saiproduto.php" class="dropdown-item">Saída de produtos</a>
            <a href="cadfornecedor.php" class="dropdown-item">Cadastro de fornecedores</a>
          </div>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="pesquisaprodutos.php">Pesquisa de Produtos</a>
        </li>

      </ul>
     
  

    </div>
  </nav>
  <span class="navbar-text">
  <h2>Olá, Bem vindo <?php echo $_SESSION['usuario']; ?>  </h2>
  </span>
  <ul class="nav justify-content-end">
  <li class="nav-item"><h2><a href="logout.php"> SAIR </a> </h2><li>
</ul>
  </nav>
  
  <img src="http://vindevinho.com.br/wp-content/uploads/2017/03/DSC0614.jpg" alt="some text" width=100% height=88%>
  
</body>
</html>








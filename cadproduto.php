<?php
session_start();
include('verifica_login.php');
?>
<html lang="br">
    <head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro de produtos</title>
    <meta charset="utf-8">
    </head>

<body>
    <div class="principal">
        <form action="cadpro.php" method="POST">
            <h1 class="border" > Cadastro de produtos </h1>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nome do produto</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="true">
              </div>
            <!-- 

              <div class="form-group col-md-6">
                <label for="inputEmail4">estoque minimo</label>
                <input type="text" class="form-control" id="eminimo" name="eminimo" placeholder="eminimo">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">estoque maximo</label>
                <input type="text" class="form-control" id="emaximo" name="emaximo" placeholder="emaximo">
              </div>
              
            -->
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
    </div>
</body>
</html>
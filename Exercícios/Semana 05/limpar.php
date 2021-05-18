<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Limpeza de Cadastro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Limpar Sessão</h1>
</div>

<?php 
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>Limpar</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Cadastrar um novo animal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listar.php">Lista de Animais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="limpar.php">Limpar Cadastros</a>
      </li>    
    </ul>
  </div>  
</nav><br>
<center><h5>Sua sessão está limpa.</h5></center>

</html>
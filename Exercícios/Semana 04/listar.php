<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Cadastro de Animais</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        .nav-link{
        text-align: center;
    }
    </style>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Lista de Animais</h1>
  <p>Abaixo, você confere os animais cadastrados!</p> 
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="text-align:center">
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
        <?php
            require_once "classeLeao.php";
            require_once "classeRinoceronte.php";
            require_once "classeElefante.php";
            require_once "classeCavalo.php";

            session_start();

            //Exibindo as informações por meio de funções criadas nas classes
            if(!empty($_SESSION["animais"])){
                foreach($_SESSION["animais"] as $i=>$v){
                    $v->exibirSessao();
                    $v->exibirDados();
                    echo '<hr>';
            }
          } else {
                echo '<center><h5>Ainda não há animal cadastrado</h5></center>';
            }
        ?>
    </body>
</html>

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

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Cadastro de Animais</h1>
  <p>Faça o cadastro do seu animal, ou navegue em nosso site.</p> 
</div>

  <style>
    .botaoenviar{
      width: 245px;
    }
  </style>

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
        <form method="POST">
            <?php
            session_start();
                if(empty($_POST)){
                    echo'<select name="animal" required>
                        <option label="Selecione a especie do animal..."></option>
                        <option>Leão</option>
                        <option>Rinoceronte</option>
                        <option>Elefante</option>
                        <option>Cavalo</option>
                    </select><br/>';
                }

                else if(!empty($_POST["animal"])){
                   $_SESSION["especie"] = $_POST["animal"];
                  
                    echo '<input type="number" name="peso" placeholder="Digite o peso" style="width:245px" required/><br/>
                    <input type="number" name="altura" placeholder="Digite a altura" style="width:245px" required/><br/>
                    <input type="date" name="dataNasc" style="width:245px" required/><br/>
                    <input type="text" name="sexo" placeholder="Digite o sexo" style="width:245px" required/>
                    </select><br/>';

                    if($_POST["animal"] == "Leão"){
                        echo'<input type="number" name="tamanhoJuba" placeholder="Digite o tamanho da juba" style="width:245px" required/><br/>';
                    }
                    else if($_POST["animal"] == "Elefante"){
                        echo'<input type="number" name="tamanhoTromba" placeholder="Digite o tamanho da tromba" style="width:245px" required/><br/>';
                    }
                    else if($_POST["animal"] == "Rinoceronte"){
                        echo'<input type="number" name="tamanhoChifre" placeholder="Digite o tamanho da chifre" style="width:245px" required/><br/>';
                    }
                    else{
                        echo'<input type="number" name="tamanhoCrina" placeholder="Tamanho da crina" style="width:245px" required/><br/>';
                        echo'<input type="text" name="corPelo" placeholder="Cor do pelo" style="width:245px" required/><br/>';
                    }

                }

                else if(!empty($_POST["peso"])){

                    if($_SESSION["especie"] == "Leão"){
                        
                        require_once "classeLeao.php";

                        $a = new Leao($_POST);
                        $a->especie = $_SESSION["especie"];
                        $a->peso = $_POST["peso"];
                        $a->altura = $_POST["altura"];
                        $a->dataNasc = $_POST["dataNasc"];
                        $a->sexo = $_POST["sexo"];
                        $a->tamanho_juba = $_POST["tamanhoJuba"];
                    }

                    else if($_SESSION["especie"] == "Rinoceronte"){

                        require_once "classeRinoceronte.php";

                        $a = new Rinoceronte($_POST);
                        $a->especie = $_SESSION["especie"];
                        $a->peso = $_POST["peso"];
                        $a->altura = $_POST["altura"];
                        $a->dataNasc = $_POST["dataNasc"];
                        $a->sexo = $_POST["sexo"];
                        $a->tamanho_chifre= $_POST["tamanhoChifre"];
                    }

                    else if($_SESSION["especie"] == "Elefante"){

                        require_once "classeElefante.php";

                        $a = new Elefante($_POST);
                        $a->especie = $_SESSION["especie"];
                        $a->peso = $_POST["peso"];
                        $a->altura = $_POST["altura"];
                        $a->dataNasc = $_POST["dataNasc"];
                        $a->sexo = $_POST["sexo"];
                        $a->tamanho_tromba= $_POST["tamanhoTromba"];
                    }

                    else if($_SESSION["especie"] == "Cavalo"){

                        require_once "classeCavalo.php";

                        $a = new Cavalo($_POST);
                        $a->especie = $_SESSION["especie"];
                        $a->peso = $_POST["peso"];
                        $a->altura = $_POST["altura"];
                        $a->dataNasc = $_POST["dataNasc"];
                        $a->sexo = $_POST["sexo"];
                        $a->tamanho_crina = $_POST["tamanhoCrina"];
                        $a->cor_pelo = $_POST["corPelo"];
                    }

                    $_SESSION["animais"][] = $a;
            
                    echo'<center><h5>Obrigado, animal cadastrado</h5></center><hr/>';
                
                }                    
            ?>
            <br>
            <input type="submit" class="botaoenviar" value="Enviar">
        </form>
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFSP - Pet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        .form-group{
            width: 300px;
            height: 70px;
        }
        .btn-primary{
            width: 300px;
        }
    </style>

    <header>
    <div class="jumbotron text-center">
        <h1>Bem vindo ao IFSPET</h1>
        <p>O melhor lugar para seu bichinho de estimação!</p>
    </div>
    </header>

<?php   

    if(!empty($_POST)){

        echo "<p><b>Informações do PET</p></b>";
        echo "<b>Espécie do Animal: </b>" .$_POST["especieanimal"]. "<br>";
        echo "<b>Nome: </b>" .$_POST["nomeanimal"]. "<br>";
        echo "<b>Peso: </b>" .$_POST["pesoanimal"]. " Kg(s)<br>";
        echo "<b>Idade: </b>" .$_POST["idadeanimal"]. " Ano(s)<br><hr>";
    
}
?>


    <form action="2021-04-12-exercicio.php" method="post">
        <p>Digite as informações do seu animal:</p>
            <div class="form-group">
                <label for="sel1">Selecione uma espécie:</label>
                <select class="form-control" name="especieanimal">
                    <option>Selecione:</option>
                    <option>Cachorro</option>
                    <option>Coelho</option>
                    <option>Gato</option>
                    <option>Tartaruga</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nome do Animal:</label>
                    <input type="text" class="form-control" placeholder="Nome do Animal" name="nomeanimal">
                </div>
                <div class="form-group">
                    <label for="num1">Peso do Animal:</label>
                    <input type="number" class="form-control" placeholder="Peso do Animal (Ex: 22,5)" step="0.1" name="pesoanimal">
                </div>
                <div class="form-group">
                    <label for="num2">Idade do Animal:</label>
                    <input type="number" class="form-control" placeholder="Idade em Anos (Ex: 10)" name="idadeanimal">
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Enviar</button><br><br>
        </form>


</body>
</html>
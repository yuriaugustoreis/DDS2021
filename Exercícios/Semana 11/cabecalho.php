<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="folha_estilo.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
    <!-- Iniciando "Header" -->
    <div class="jumbotron text-center"  style="margin-bottom:0">
        <h1>Bem vindo ao IFSP-RH</h1>
        <p>Sistema de RH</p> 
    </div>

    <!-- Iniciando Navbar esquerdo com Cadastro -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-bottom:10px">
        <div class="collapse navbar-collapse" id="collapsibleNavbar-left">
        <a class="navbar-brand">Cadastrar:</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="cadastrar_regiao.php">Região</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastrar_pais.php">País</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastrar_localizacao.php">Localização</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastrar_departamento.php">Departamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastrar_funcao.php">Função</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastrar_funcionario.php">Funcionário</a>
            </li> 
            </ul>
    </div>
    <!-- Iniciando Navbar pesquisa -->
    <!-- <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <form class="form-inline fmCenter" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar">
            <button class="btn btn-success" type="submit">Pesquisar</button>
        </form>
    </div> -->
    <!-- Iniciando Navbar direito com Listar -->
    <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavbar-right">
        <a class="navbar-brand ml-auto">Listar:</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            <a class="navbar-brand">Cadastrar:</a>
        </button>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="listar_regiao.php">Região</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listar_pais.php">País</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listar_localizacao.php">Localização</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listar_departamento.php">Departamento</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listar_funcao.php">Função</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listar_funcionario.php">Funcionário</a>
        </li> 
        </ul>
    </div>  
</nav>


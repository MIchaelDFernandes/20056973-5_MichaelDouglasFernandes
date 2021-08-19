<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Bolos Caseiros</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="container-fluid">
            <nav class="bg-danger fixed-top navbar navbar-dark navbar-expand-md">
                <a class="navbar-brand" href="index.php">Bolos Caseiros</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="mr-auto navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?acessando=quemsomos">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?acessando=contato">Contato</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            <div class="bg-info cabecalho container-fluid mt-5 pb-5 pt-5 text-center">
                <h1 class="text-white">Deliciosos Bolos Caseiros</h1>
                <p>Trabalhamos com encomendas desde 2005!</p>
            </div>
        </header>
        <main class="container-fluid">
        <?php
            $pagina = isset( $_GET['acessando'] ) ? $_GET['acessando'] : '';
            if($pagina==''){
                include ('home.php');}		
            elseif(file_exists($pagina.'.php')){
                include ($pagina.'.php');
            }
            else{ 
                include ('home.php');}
        ?>
        </main>
        <footer class="bg-success container-fluid">
            <div class="row text-center">
                <div class="col">
                    <p>&copy;2021</p>
                </div>
            </div>
            <div class="row">
                <div class="border border-0 border-light col-md-6 col-sm-12 font-weight-bold text-center"> 
                    <p> Desenvolvido por:   
                </div>
                <div class="border-bottom-0 border-left-0 border-light border-top-0 col-md-6 col-sm-12"> 
                    <p> Michael Douglas Fernandes</p>
                    <p>R.A.:&nbsp;20056973-5</p>
                    <p>para curso de Sistemas para Internet na Unicesumar</p>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>

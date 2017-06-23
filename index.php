<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mercadorias</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- css site -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default nav_personalizada">
      <div class="container-fluid">
      

       <!--barra de navegação -->
        <div class="navbar-header">

          <a class="navbar-brand" href="#" >
            <picture >
              <img src="img/dinheiro.png" class="img_dinheiro">
              <p class="inline">Site de Compra e Venda</p>
            </picture>
          </a>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
            <span class="sr-only">Esconder navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        </div>
      
 <!-- ocultar barra de navegação -->
     

          <!-- barra de navegação -->

        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav  pull-right">
            <li class="input_pesquisa">
               <form method="post" action="buscar_logica_visitante.php" class="form-inline">
                <div class="form-group">
                <input type="text" name="buscar" class="form-control" placeholder="Pesquisa de produtos">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-default btn-success">Buscar</button>
                 </div>
                </form>
            </li>
              
              
            <li><a href="index.php" class="">Inicio </a></li>
            <li><a href="cadastro.php">Cadastre-se</a></li>
            <li><a href="logar.php">Entrar</a></li>
          </ul>
        </div>
      </div>
     
    </nav>

    <!-- body do site -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <article>
            <h1>Compra e venda de produtos</h1>
            <h3>-Produtos Novos e usados.</h3>
            <h3>-Negocie com diretamente com o comprador/vendedor.</h3>
          </article>
        </div>
      </div><!-- fim da row -->

      <!-- imagem negociaçao -->
      <div class="row">
        <div class="col-md-12">
            <img src="img/negociacao.png" class="img-responsive img-alinhamento">
            <hr>
        </div>
      </div>
     
    </div><!-- fim container -->
     <footer class="rodape">
          <p class="footer_texto"> &copy;Todos os direitos reservados</p>
    </footer>

    
    
    
 


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="javascript/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
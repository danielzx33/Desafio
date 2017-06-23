<?php 
session_start();

if (!isset($_SESSION['status_login'])) {
    header("location: index.php");
}

$texto = isset($_SESSION["texto"])  ? $_SESSION["texto"] : null;
$compra_venda = isset($_SESSION['compra_venda'])? $_SESSION['compra_venda']: null; 
/*1 compra
2 venda*/

for ($i=1; $i <=count($compra_venda) ; $i++) { 
    if ($compra_venda[$i] == 1) {
        $compra_venda_texto[$i] =' Compra';

    }if ($compra_venda[$i] == 2) {
        $compra_venda_texto[$i] =' Venda';
    }
  }
   

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Site compra é venda</title>

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

          <!-- barra de navegação -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav  pull-right">
            <li class="input_pesquisa">
              <form method="post" action="buscar_logica.php">
                <input type="text" name="buscar" class="form-control" placeholder="Pesquisa de produtos">
            </li>
              <li class="">
                <button type="submit" class="btn btn-default btn-success btn-alinhamento" style="margin-right: 125px;">Buscar</button>
              </li>
              </form>
            <li><a href="home.php" class="">Inicio </a></li>
            <li><a href="registro_compra_venda.php">Anunciar</a></li>
            <li><a href="logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- body do site -->
    <div class="container">
      <div class="row">

        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-heading"><p class="panel-personalizado">Você entrou como: </p></div>
            <div class="panel-body">
              <h3><a class=""><?php echo $_SESSION['status_login']; ?></a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="img/dinheiro.png" class="img-responsive tamanho_dinheiro">
        </div>

   

        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-heading"><p class="panel-personalizado">Serviços</p></div>
            <div class="panel-body">
              <h3><a class="" href="registro_compra_venda.php">Registrar compra/venda</a></h3>
              <hr>
              <h3><a class="" href="historico_operacoes.php">Histórico de operacões</a></h3>
            </div>
          </div>
        </div>

      </div>
      <?php
                for ($i=1; $i <= count($texto); $i++) { 
                  echo '<div class="row">';
                  echo '<div class="col-md-3"></div>';
                  echo '<div class="col-md-6 mercadorias alinhamento_historico">';
                  echo '<div class="panel panel-default">';
                  echo '<div class="panel-heading center">';
                  echo '<h2 class="inline">Tipo da operação:</h2>';
                  echo '<h2 class="inline">'.$compra_venda_texto[$i].'</h2>';
                  echo '</div>';
                  echo '<div class="panel-body busca_operacoes">';
                  echo $texto[$i];
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="col-md-3"></div>';
                  echo '</div>';

                  
                }
              ?>
     

    </div><!-- fim container body -->
    
     <footer class="rodape">
         <p class="footer_texto"> &copy;Todos os direitos reservados</p>
      </footer>
    
    
    
 
 


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="javascript/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
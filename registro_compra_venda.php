<?php 
session_start();

if (!isset($_SESSION['status_login'])) {
    header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
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

    <!-- scripts -->
     <script src="javascript/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="javascript/validar.js">
    </script>

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

        <div class="col-md-6 mercadorias">
            <form method="post" action="validador_compra_venda.php">
              <div class="form-group">
                  <label ><h1 class="registro">Nome do produto:</h1></label>
                  <input type="text" name="nome_produto" class="form-control" placeholder="ex: maquina de café" id="produto_nome">

                  <label><h1 class="registro">Tipo:</h1></label>
                  <input type="text" name="tipo_produto" class="form-control" placeholder="ex: eletrônico" id="produto_tipo">
                    
                  <div class="row">

                    <div class="col-md-4">
                      <label><h1 class="registro">Quantidade:</h1></label>
                      <input type="text" name="quantidade_produto" class="form-control" placeholder="ex: 2" id="produto_quantidade">
                    </div>

                    <div class="col-md-4">
                    <label><h1 class="registro">Preço unidade</h1></label>
                    <input type="text" name="valor_produto" class="form-control" placeholder="ex: 150,00" id="produto_preco">
                    </div>

                     <div class="col-md-4">
                    <label><h1 class="registro">Operação</h1></label>
                    <select class="form-control" name="compra_venda" id="produto_operacao">
                      <option value="">Tipo operação</option>
                      <option value="1">Compra</option>
                      <option value="2">Venda</option>
                    </select>
                    </div>

                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-default btn-primary btn-lg" id="anuncio">Anunciar</button>
                      <br>
                      <?php
                      $pedido = isset($_GET['id']) ? $_GET['id'] : null;
                      if (isset($pedido)) {
                        echo "<h1 class='registro_pedido'>Número da operacão: $pedido</h1>";
                      }
                      ?>
                    </div>
                  </div>
              </div>
            </form>
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
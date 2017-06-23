 <?php $erro = isset($_GET['erro'])? $_GET['erro'] : 0; 
              if ($erro){
               $estilo =  'style="border: 2px solid red"';
             }else{
                $estilo ='';
              }
               ?>
             

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

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
                <form method="post" action="buscar_logica_visitante.php">
                <input type="text" name="buscar" class="form-control" placeholder="Pesquisa de produtos">
            </li>
              <li class="">
                <button type="submit" class="btn btn-default btn-success btn-alinhamento" style="margin-right: 60px;">Buscar</button>
              </li>
              </form>
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
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="fundo_formulario formulario">
            <h1 class="">Conectar-se ao site</h1>
            <form method="post" action="valida_login.php">

              <label for="input_login" class="label_formulario">Login:</label>
              <input type="text" class="form-control" id="input_login" name="status_login" <?php echo $estilo ?>>

              <label for="input_senha" class="label_formulario">Senha:</label>
              <input type="password" class="form-control" id="input_senha" name="status_senha" <?php echo $estilo ?>>
              <br>
              <?php $erro = isset($_GET['erro'])? $_GET['erro'] : 0; 
              if ($erro) 
               echo "<p class='erro_input'>Login ou senha invalido</p>";
               ?>

              <button type="submit" class="btn btn-primary pull-right" id="logar">Logar</button>
              <div class="clearfix"></div>

            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
      
    </div><!-- container fim -->

    
    

      <footer class="rodape">
          <p class="footer_texto"> &copy;Todos os direitos reservados</p>
      </footer>
 


 
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
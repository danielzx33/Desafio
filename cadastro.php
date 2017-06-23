<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- css site -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
<!-- script -->
    <script src="javascript/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="javascript/validar.js" >

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
    <div class="container content">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 formulario">
          <form action="validador_cadastro.php" method="post">
            <div class="fundo_formulario">
              <h1>Faça seu cadastro para iniciar suas negociações</h1>
              <label for="login_usuario" class="label_formulario">Login:</label>
              <input type="text" id="login_usuario" name="login_cadastro" class="form-control">

              
              <label for="senha_usuario" class="label_formulario">Senha:</label>
              <input type="password" id="senha_usuario" name="senha_cadastro" class="form-control">

              
              <label for="email_usuario" class="label_formulario"> Email:</label>
              <input type="email"  id="email_usuario" name="email_cadastro" class="form-control">

              <br>

              <button type="submit" class="btn btn-primary btn-md" id="cadastro"> Cadastrar</button>
            </div>
          </form>
        </div> 
         <div class="col col-md-3"></div> 
      </div><!-- row -->
 
    
    
  

    </div><!-- container -->

    <!-- footer -->
   <footer class="rodape">
          <p class="footer_texto"> &copy;Todos os direitos reservados</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
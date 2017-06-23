<?php

 
 require_once('classe_banco.php');

 $usuario = $_POST['login_cadastro'];
 $senha = md5($_POST['senha_cadastro']);
 $email = $_POST['email_cadastro'];

 	
 $banco = new banco();
 $acesso_bd = $banco->conexao_banco();
 $sql_consulta = "SELECT nome_cliente, email_cliente from cliente where nome_cliente = '$usuario' or email_cliente = '$email'";
 $duplicado = false;
 if($consulta = mysqli_query($acesso_bd, $sql_consulta)){

 	$duplicado = false;
 		$get_user = '';
 
	 	$matriz_dados = mysqli_fetch_array($consulta, MYSQLI_ASSOC);

	 	if($matriz_dados['nome_cliente'] == $usuario){
	 		
	 		$get_user = 'user=1&';
	 		$duplicado = true;
	 	}
	 	if ($matriz_dados['email_cliente'] == $email) {
	 		$get_user.= 'email=1';
	 		$duplicado = true;
	 	}

	 	
	 	if ($duplicado) {
	 		
	 		header('location: cadastro.php?'.$get_user);
	 		
	 		die();
	 	} 	
	 	
	 		 	
	}else{
		echo "erro ao acessar o banco, entre em contato com o administrador";
		
	}

 $sql_insert = "insert into cliente(nome_cliente,email_cliente,senha) values('$usuario','$email', '$senha' )";

 if(mysqli_query($acesso_bd, $sql_insert)){

 	header('location: index.php');

 }else{
 	echo "erro ao efetuar o cadastro, entre em contato com o administrador";
 }
 

?>
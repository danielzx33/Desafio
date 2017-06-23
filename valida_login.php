<?php

session_start();
require_once('classe_banco.php');

 $usuario = $_POST['status_login'];
 $senha = md5($_POST['status_senha']);

 $_SESSION['status_login'] = $_POST['status_login'];
 

$query = "select id_cliente, nome_cliente, senha from cliente where nome_cliente = '$usuario' and senha = '$senha'";
 	
 $banco = new banco();
 $acesso_bd = $banco->conexao_banco();

 if($consulta = mysqli_query($acesso_bd, $query)){
 	$matriz = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
 	
 	$_SESSION['id_cliente'] = $matriz['id_cliente'];
 	
 	if($matriz['nome_cliente'] == $usuario && $matriz['senha'] == $senha) {
 		header('location: home.php');
 	}else{
 		header("location: logar.php?erro=1");
 	}
 }else{
 	echo "erro ao consultar o serviço, entre em contato com o administrador";
 }

 ?>
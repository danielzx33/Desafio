<?php

session_start();
require_once('classe_banco.php');


$id_user = intval($_SESSION['id_cliente']);
$cont = 1;

$query = "select * from produto where id_cliente = $id_user";
 	
 $banco = new banco();
 $acesso_bd = $banco->conexao_banco();

 if($resultado = mysqli_query($acesso_bd, $query)){
 	while ($operacoes = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

 		 	 $texto[$cont] ='<p>Codigo do Produto: '.$operacoes['id_produto'].'</p>';
             $texto[$cont].='<p>Produto: '.$operacoes['nome_produto'].'</p>';
             $texto[$cont].='<p>Tipo do Produto: '.$operacoes['tipo_produto'].'</p>';
             $texto[$cont].='<p>quantidade: '.$operacoes['quantidade_produto'].'</p>';
             $texto[$cont].='<p>valor unitário: '.$operacoes['valor_produto'].'</p>';
             $compra_venda[$cont] = $operacoes['compra_venda']; 
              $cont = $cont +1;
 		
 	}
 	$_SESSION["texto"] = $texto;
 	$_SESSION['compra_venda'] = $compra_venda;
 	header('location: operacoes.php');


 	

 }else{
 	echo "erro ao acessar o banco, entre em contato com o administrador";
 }
 	



 ?>
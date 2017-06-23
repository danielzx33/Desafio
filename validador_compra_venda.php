<?php

session_start();
require_once('classe_banco.php');

$id_cliente = intval($_SESSION['id_cliente']);

 $nome_produto = $_POST['nome_produto'];
 $tipo_produto = $_POST['tipo_produto'];
 $valor_produto = $_POST['valor_produto'];
 $quantidade_produto = $_POST['quantidade_produto'];
 $compra_venda = intval($_POST['compra_venda']);
 


 
 $sql = "insert into produto(nome_produto,tipo_produto,valor_produto,quantidade_produto,compra_venda,id_cliente) ";
 $sql.= "values('$nome_produto','$tipo_produto','$valor_produto','$quantidade_produto',$compra_venda,$id_cliente)";
 	
 $banco = new banco();
 $acesso_bd = $banco->conexao_banco();
echo $sql;
 if($dados = mysqli_query($acesso_bd,$sql)) {
 	$id_bd = mysqli_insert_id($acesso_bd);
 	header("location: registro_compra_venda.php?id=$id_bd");

 }else{
 	echo "erro ao acessar o banco, entre em contato com o administrador";
 }

 
?>
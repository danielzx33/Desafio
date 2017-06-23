<?php
session_start();


require_once('classe_banco.php');

$pesquisa = isset($_POST['buscar']) ? $_POST['buscar']: "" ;





$query = "select * from produto where nome_produto like '%$pesquisa%'";
 	
 $banco = new banco();
 $acesso_bd = $banco->conexao_banco();


 
 if($link = mysqli_query($acesso_bd, $query)){
 	$cont = 1;

 	while ($matriz = mysqli_fetch_array($link,MYSQLI_ASSOC)) {
 		
 		if($matriz['compra_venda'] == 1){
 			$compra_venda_texto = 'Comprando';
 		}else{
 			$compra_venda_texto = 'Vendendo';
 		}
 		   $textov[$cont] = '<div class="row">';
           $textov[$cont].= '<div class="col-md-3" ></div>';
           $textov[$cont].= '<div class="col-md-6">';
           $textov[$cont].= '<div class="panel panel-default">';
           $textov[$cont].= '<div class="panel-body">';
           $textov[$cont].= '<p class="vendas">Produto: '.$matriz['nome_produto'].'</p>';
           $textov[$cont].= '<p class="vendas">Tipo: '.$matriz['tipo_produto'].'</p>';
           $textov[$cont].= '<p class="vendas">Quantidade: '.$matriz['quantidade_produto'].'</p>';
           $textov[$cont].= '<p class="vendas">Valor Unidade: '.$matriz['valor_produto'].'</p>';
           $textov[$cont].= '<p class="vendas destaque_compra">'.$compra_venda_texto.'</p>';
           $textov[$cont].= '</div>';
           $textov[$cont].= '</div>';
           $textov[$cont].= '</div>';
           $textov[$cont].= '<div class="col-md-3"></div>';
           $textov[$cont].= '</div>';
           $cont++;
 	}
 	$_SESSION['saida'] = $textov;
 	
 	
 	header("location: buscar_visitante.php");

 }else{
 	echo "erro ao conectar ao banco, entre em contato com o administrador";
 }

 		 	
 

 	

 	



 ?>
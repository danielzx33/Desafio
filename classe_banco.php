<?php 

class banco{

private $host = "localhost";
private $login = "u623794895_user"; /*u623794895_user*/
private $senha = "guimazx33"; /*'guimazx33'*/
private $nome_banco = "u623794895_bd"; /*u623794895_bd*/

public function conexao_banco(){

	$conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->nome_banco);
	mysqli_set_charset($conexao, "utf-8");

	if (mysqli_connect_errno()) {
		echo "erro conectar-se ao banco, entre em contato com o administrador erro: ".mysqli_connect_erro();
	}
	return $conexao;
	
								}
			}



?>
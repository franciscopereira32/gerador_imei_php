<?php
session_start();
include('conexao_login.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: login_index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where usuario = '{$usuario}' and senha = '{$senha}'";
#$query_setor= "select setor from usuario where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

if(!$result){
	$_SESSION['nao_autenticado'] = true;
	header('Location: login_index.php');
	exit();
}else{

	while($row = mysqli_fetch_assoc($result)){

		if($row['setor'] == "1"){
			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');
			exit();
		}else{
			$_SESSION['usuario'] = $usuario;
			header('Location: index_producao.php');
			exit();
		}
	}

}

#$setor = mysqli_query($conexao, "SELECT setor FROM usuario WHERE usuario ='{$usuario}' and senha='{$senha}'");
#$retornaSetor = ($_SESSION['setor']);
#$row = mysqli_num_rows($result);
#$row_setor = mysqli_num_rows($setor);

#if($row == 1 && $retornaSetor == 1){
#	$_SESSION['usuario'] = $usuario;
#	header('Location: index.php');
#	exit();
#} else{
#	$_SESSION['nao_autenticado'] = true;
#	header('Location: login_index.php');
#	exit();
#}
?>
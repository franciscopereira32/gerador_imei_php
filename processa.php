<?php
session_start();
include_once("conexao.php");
#include("conexao_bk.php");

$imei = filter_input(INPUT_POST, 'imei', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);

$resultado = "INSERT INTO numero_imei (imei_id, modelo) VALUES ('$imei', '$modelo')";
$resultado_imei = mysqli_query($conn, $resultado);

$deleta = "DELETE from imei WHERE (imei_id=$imei)";


if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>IMEI cadastrado com sucesso</p> $modelo";
	$_SESSION['msn'] = $modelo;
	header("Location: inserir.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Falha ao cadastrar IMEI</p>";

	header("Location: inserir.php");
}
?>
<?php 
session_start();
if(!$_SESSION['usuario']){
	header('Location: login_index.php');
	exit();
}
?>
<?php 
session_start();
include_once "log.php";
include_once "luhn.php";
include_once "log_range.php"
#include "processa_imei.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


	<title>cadastrar imei</title>
</head>
<body>
<div class="font-monospace d-grid gap-2 col-6 mx-auto">
	<h2 style="color: darkblue;" class="mx-auto">Cadastrar IMEI</h2>
	<?php 
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		logRange($_SESSION['msn']);
		unset($_SESSION['msg']);
	}
	?>

	<style>
 		p {
 			white-space: pre;
 		}
	</style>

	<form method="get" action="processa_imei.php">
		<label class="position-absolute top-4 start-50 translate-middle">GERAR TABELA DE IMEI: </label>
		<br><a class="position-absolute top-4 start-50 translate-middle" href="main_range.log"; download="main_range.log">Historico</a><br>
					
  		<input class="font-monospace d-grid gap-2 mx-auto" id="n" type="number" name="inicial" placeholder="primeiro imei" maxlength="14" size="27"/>
  		
  		<input class="font-monospace d-grid gap-2 mx-auto" type="number" id="in" name="intervalo" placeholder="quantidade desejada" size="27"/>
  		
		<!--<label>Modelo: </label><br>
		<input type="text" name="modelo" placeholder="Digite o modelo do dispositivo"><br><br>-->

		<input  style="color:blue;" class="font-monospace d-grid gap-2 mx-auto" type="submit" value="Gerar IMEI">
	</form>

		<?php
			logMsg( " Cadastro de tabela imei \n", 'warning');
		?>
		
	</form>
		<form action="index.php">
		<button style="color: purple;" class="d-grid gap-2 mx-auto">
			<- Voltar
		</button>
		</form><br>
	<img style="width: 400px" class="font-monospace d-grid gap-2 mx-auto" src="gerador.png">
	
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</div>
</body>
</html>
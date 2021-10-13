<?php 
session_start();
include_once "log.php";
include_once "luhn.php";
include_once "log_range.php";

$q = $_GET["intervalo"];
$v = $_GET['inicial'];

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
		unset($_SESSION['msg']);
	}
	?>

	<style>
 		p {
 			white-space: pre;
 		}
	</style>

	<form form method="POST" action="processa.php">
		<label class="position-absolute top-4 start-50 translate-middle">IMEI: </label><br>
		<!--<textarea class="font-monospace d-grid gap-2 mx-auto" style="height:10px " type="text" name="imei" placeholder="Insira os imei aqui";  >-->

		<textarea style="height: 500px;" class="font-monospace d-grid gap-2 col-6 mx-auto" name="imei">
			<?php 
			$r = ($v + $q);
			for ($i = $v; $i < $r; $i++){
				printf (nl2br((Luhn($i))."\n"));				
			}?>	</textarea>
			
	<br><br>

		<form placeholder="Escolha o modelo do dispositivo">
  		<label  class="position-absolute top-4 start-50 translate-middle">Modelo: </label><br>
  		<select class="font-monospace d-grid gap-2 mx-auto" name="modelo" id="subject">
  		<option name="modelo" value="M8 4G - NB352" selected="selected">M8 4G - NB352</option>
    	<option name="modelo" value="M10 4G PRO - NB806" selected="selected">M10 4G PRO - NB806</option>
    	<option name="modelo" value="M10A 3G - NB331" selected="selected">M10A 3G - NB331</option>
    	<option name="modelo" value="Multilaser F - P9105" selected="selected">Multilaser F - P9105</option>
  		</select><br>

  		
  		<?php
  		 	logRange("$v to $r");
  		 ?>

		<input  class="font-monospace d-grid gap-2 mx-auto" type="submit" value="cadastrar">

		<form method="POST" action="log.php">
		<?php
			logMsg( " Cadastro de tabela imei \n", 'warning');
		?>
		</form>
		
	</form><br>

	<!--<form class=" d-grid col-6 mx-auto">
		<label class="position-absolute top-4 start-50 translate-middle">Range imei: </label><br>

		

		<input style="color: darkred;" class="font-monospace d-grid gap-2 mx-auto" type="submit" value="salvar">-->

	</form>
		<form action="index.php">
		<button style="color: purple;" class="d-grid gap-2 mx-auto">
			<- Voltar
		</button>
		</form>
	
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</div>
</body>
</html>







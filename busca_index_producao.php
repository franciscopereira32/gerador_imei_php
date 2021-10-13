<?php 
include_once "log.php";
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<title>Busca IMEI</title>
</head>
<body>
<div class="font-monospace d-grid gap-2 col-6 mx-auto">	
	<h2 style="color: darkblue;"class="mx-auto">Gerar tabela de imei</h2>
	<form action="busca_producao.php" method="GET">

		<?php 
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>

		<label class="position-absolute top-4 start-50 translate-middle">Modelo do dispositivo:</label><br>

		<form>
  		<select class="font-monospace d-grid gap-2 col-6 mx-auto" name="modelo">
    	<option name="modelo" value="M8 4G - NB352" selected="selected">M8 4G - NB352</option>
    	<option name="modelo" value="M10 4G PRO - NB806" selected="selected">M10 4G PRO - NB806</option>
    	<option name="modelo" value="M10A 3G - NB331" selected="selected">M10A 3G - NB331</option>
    	<option name="modelo" value="Multilaser F - P9105" selected="selected">Multilaser F - P9105</option>
  		</select><br><br>
		
		<!--<input type="text" name="modelo" size="50" placeholder="Insira o nome do dispositivo">-->
		
		<button style="color:darkorange;" class="d-grid gap-2 col-6 mx-auto">
			Buscar ->
		</button>
		<form action="log.php">
			<?php
			#include_once "log.php";
				logMsg( " Busca realizada com sucesso \n");
			?>
		</form>
				
	</form>
	<form action="index_producao.php">
		<button style="color: purple;" class="d-grid gap-2 col-6 mx-auto">
			<- Voltar
		</button>
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</div>
</body>
</html>
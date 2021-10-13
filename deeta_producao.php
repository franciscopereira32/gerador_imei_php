<?php 

require 'conexao.php';

$imei_id = $_GET["id"];

$sql = "DELETE FROM numero_imei WHERE id = '$imei_id'";

$result = mysqli_query($conn, $sql);

if($result == true){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

		<title>imei salvo</title>
	</head>
	<body>
		<div class="font-monospace d-grid gap-2 col-6 mx-auto">
		<h2 style="color: green;" class="d-grid gap-2 mx-auto">Processo finalizado!!</h2>

		<label><b>Por favor acesse o caminho abaixo onde está salva a sua tabela de IMEI:</b><br></label>
		<h5 style="color:purple;" class="d-grid gap-2 mx-auto"><b><u>C:\imei</u></b></h5><br>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	</div>
	</body>
	</html><?php

}else{
	echo "Erro ao salvar tabela";
}
?>
<form action="index_producao.php">
		<button class="d-grid gap-2 mx-auto">
		Home
	</button>
</form>
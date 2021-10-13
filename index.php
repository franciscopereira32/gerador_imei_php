<?php 
include_once"log.php";
include('verifica_login.php');
$use = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<title>home page imei</title>
</head>
<body>

	<div class="font-monospace d-grid gap-2 col-6 mx-auto">
	<div class=" top-5 start-50 d-grid gap-2 col-6 mx-auto"><h5>Olá, <?php echo $_SESSION['usuario'] ?></h5></div>	
	
	<?php 
	logMsg(" usuario acessando \n");
	?>
</div><br>

	<div class="position-relative top-1 start-50 end-50 translate-middle mx-auto btn-group" role="group" aria-label="Basic example">
	<button class="btn btn-primary"><a style="color:white;" href="main_log.log" download="main_log.log">log</a></button>
	<button class="btn btn-primary "><a style="color:white;" href="logout.php">Sair</h7></a></button>	
	
	</div>

	<div class="font-monospace d-grid gap-2 col-6 mx-auto">
	<h2 style="color: darkblue;" class="mx-auto">Escolha a opção desejada:</h2><br>
	<h5 class="mx-auto">Produção, opção busca a tabela de IMEI disponivel</h5>
	<form action="busca_index.php">
		<button style="color: darkorange;"class="d-grid gap-2 col-6 mx-auto" >Busca</button><br>
	</form>

	<h5 class=" mx-auto">Engenharia, opção cadastra habilita opção para adicionar a tabela de IMEI</h5>

		<form action="inserir.php">
		
			<button style="" class="d-grid gap-2 col-6 mx-auto" >Cadastro </button>

		</form> 
	

	<br><br><img class="mx-auto" src="imei.png">
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
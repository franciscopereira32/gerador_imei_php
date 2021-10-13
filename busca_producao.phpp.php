<?php
 
include_once"log.php";
include('verifica_login.php');

if (!isset($_GET['modelo'])){
	header("location: busca_index.php");
	exit;
}
$modelo = "%".trim($_GET['modelo'])."%";
$dbh = new PDO('mysql:host=127.0.0.1;dbname=imei', 'root', 'Henri@1988');
$sth = $dbh->prepare('SELECT * FROM `numero_imei` WHERE `modelo` LIKE :modelo');

$sth->bindParam(':modelo', $modelo, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


	<title>Resultado da busca</title>
</head>
<body>
<div class="font-monospace d-grid gap-2 col-6 mx-auto">
	<h2 style="color: darkblue;" class="mx-auto">
		Resultado da busca
	</h2>

<?php
if (count($resultados)) {
	foreach ($resultados as $Resultado) {
	?>

	<label class="mx-auto">
	<textarea name="imei" style="height:400px;"><?php echo $Resultado['imei_id'] ?></textarea>
	</label>
	<br>
			
	<?php
	}}
	?>

	<?php
		if ($resultados != null){

			$txt_array = array ($Resultado['imei_id']);
			
			$txt = fopen("C:\imei\imei.txt", "w");

			
			logMsg( " excluindo resgistro de imei do BD \n", 'warning');

			foreach ($txt_array as $imei_txt){

				fwrite($txt, $imei_txt . PHP_EOL);
			}

			fclose($txt);
		}else{
			print("Sem tabela de imei salva, comunique a engenharia!");
			logMsg(" sem valor na tabela \n", 'error');
			}
			
	?>	
	<form method="POST" action= "deeta.php?id=<?php echo $Resultado['id'] ?>">


		<input type="submit" style="color: darkgreen;" class="d-grid gap-2 col-6 mx-auto" type="button" name="imei_id" value="Salvar"> 
		
	</form></form>

	<form action="busca_index_producao.php">
		<button style="color: purple;"class="d-grid gap-2 col-6 mx-auto">
			<- Voltar
		</button>
	</form>

	<form action="index_producao.php">
		<button class="d-grid gap-2 col-6 mx-auto">
			Home
		</button>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</div>
</body>
</html>
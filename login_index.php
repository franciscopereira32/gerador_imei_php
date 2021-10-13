<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login imei</title>
	<!--<link href="https://fonts.googleapis..com/css?family=open+Sans:300,400,700" rel="stylesheet">-->
	<link rel="stylesheet" href="css/bulma.min.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
	<section class="hero is-success is-fullheight">
		<div class="hero-body">
			<div class="container has-text-centered">
				<div class="column is-4 is-offset-4">
					<img src="sem.jpg">
					<h3 class="title has-text-grey">Login </h3><br>
					<h3 class="title has-text-grey">Busca de Imei </h3>
					<h3 class="title has-text-grey"><a href="https://www.multilaser.com.br/?msclkid=514a6df3cee11092ed940ca93fc4d8ed&utm_source=bing&utm_medium=cpc&utm_campaign=ML_M2C_%5BBing%5D_Institucional_GeralSite_Final&utm_term=Multilaser&utm_content=Institucional_Multilaser" target="_blank">Multilaser</a></h3>
					<?php 
					if(isset($_SESSION['nao_autenticado'])):
					?>
					<div>
						<p style="color: red;">ERRO: Usuário ou senha invalidos.</p>
					</div>
					<?php 
					endif;
					unset($_SESSION['nao_autenticado']);
					?>
					<div>
						<form action="login.php" method="POST">
							<div class="field">
								<div class="control">
									<input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
								</div>
							</div>

							<div class="field">
								<div class="control">
									<input name="senha" class="input is-large" type="password" placeholder="Sua senha">
								</div>
							</div>
							<button type="submit" class="button is-block is-link is-larger is-fullwidth">Entrar</button>
						</form>
					</div>
					
				</div>
				
			</div>
			
		</div>

		
	</section>
</body>
</html>
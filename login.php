<!DOCTYPE html>
<html>
<head>
<meta charset="utf8" />
	<title>Login:</title>
	<link href="css/estilo.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark|Pavanam|Ubuntu" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<style type="text/css">
	.hint{
		margin: 0 auto;
		position: relative;
		background: #ee1375;
		border: 1px solid #ee1375;
		border-radius: 5px;
	}	
</style>

<!-- Configurações iniciais -->
<div class="hint" id="hint" onclick='alert("Login: admin\nSenha: admin \nhihihi :)");'>
	<h4 align="center">clique aqui pra descobrir o login e senha!</h4>
</div>


	<div>
		<div class="cxLogin">
		<h1 class="topoCx">Login no painel</h1>
			<form action="ValidaLogin.php" method="post">
				<input class="txt" type="text" name="emailLogin" placeholder="Usuario" /><br/><br/>
				<input class="txt" type="password" name="senhaLogin" placeholder="Senha" /><br/><br />
				<input class="btn" type="submit" value="Entrar" />
			</form>
			<?php
				session_start();
				if(isset($_SESSION['adv'])){
					echo $_SESSION['adv'];				
					unset($_SESSION['adv']);			
				}
			?>
		</div>
	</div>
<script>
	$("#hint").click(function(){
		$("#hint").fadeToggle("fast");
	});
</script>

</body>
</html>
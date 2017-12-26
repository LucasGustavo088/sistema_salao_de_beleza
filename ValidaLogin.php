<!doctype html>
<title>validação</title>
<head>
	<meta charset="utf-8"/>
</head>
<?php
session_start();
include_once("conexao.php");
//login
	//verifica se os dois campos de login e senha foram digitados
	if( !empty($_POST) AND (empty($_POST['emailLogin'])) OR empty($_POST['senhaLogin']) ) {
		$_SESSION['adv'] = "Login inválido";
		header("Location: login.php"); exit;
	}
	else {
		//recebendo dados para variaveis locais login
		$emailLogin = $_POST['emailLogin'];
		$senhaLogin = $_POST['senhaLogin'];
		//* escapar caracteres especiais (adicionar depois)

		//consultando no banco de dados se o usuario existe
		$sqlLogin = "select id,nome,email,senha,nivel from usuario where ";
		$sqlLogin .= "email = '$emailLogin' or nome = '$emailLogin' and senha = sha1('$senhaLogin');";
		//configurando os dados do usuario na variavel loginResultado
		$loginResultado = mysqli_query($conn,$sqlLogin);
		//salva os resultados encontrados na variavel loginResultadoDados
		$loginResultadoDados = mysqli_fetch_assoc($loginResultado);

		//verificando se foi encontrado pelo menos 1 resultado	
		if(mysqli_num_rows($loginResultado) != 1) {
			$_SESSION['adv'] = "<br>Usuario ou senha inválido";
			header("Location: login.php"); exit;
		}else {
		//usuario logado com sucesso
			//usuario recebendo as variaveis de session 
			$_SESSION['idUsuario'] 		= $loginResultadoDados['id'];
			$_SESSION['nomeUsuario'] 	= $loginResultadoDados['nome'];
			$_SESSION['emailUsuario'] 	= $loginResultadoDados['email'];
			$_SESSION['senhaUsuario'] 	= $loginResultadoDados['senha'];
			$_SESSION['nivelUsuario'] 	= $loginResultadoDados['nivel'];

			if($_SESSION['nivelUsuario'] == 1) header ("Location: cliente.php");
			if($_SESSION['nivelUsuario'] == 2) header ("Location: colaborador.php");
			if($_SESSION['nivelUsuario'] == 3) header ("Location: administrador.php");
		}
	

	}



?>
</html>
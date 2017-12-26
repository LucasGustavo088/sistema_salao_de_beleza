<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Relatório</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</head>
<body>

<!-- MENU SUPERIOR -->
<?php 
include 'includes/administrador/menu_superior.php'; 
?>


<!--configuração PHP-->
<?php
//segurança para ativar a sessao simsm, 
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['idUsuario']) OR $_SESSION['nivelUsuario'] != 3){
		
		header("Location: login.php");
		session_destroy();
		exit;
		echo "houve um problema"."<br>";
	} 

	include 'conexao.php';
	include_once 'includes/administrador/lightbox.php';
?>
<!--Fim configuração PHP -->


<main id="main">
<!-- TOP -->
<div class="topMenu"><p>Relatórios</p><img src="img/menutopbg.png" style="float:right;" /></div>

<!-- BARRA DE ACESSO ESQUERDA -->
<?php 
include 'includes/administrador/barra_acesso.php';
?>

<!-- RIGHT -->

<div class="right" id="function" >
	<div class="overflow">
		<table  id="relatorioDia" border="0" cellspacing="0">
			<tr id="tr1">
				<td>Funcionario:</td>
				<td>Valor:</td>
				<td>Data:</td>
				<td>Editar:</td>
				<td>Excluir:</td>
			</tr>
			<?php 
			
			$buscaValor = mysqli_query($conn, "SELECT * from pedido where DATE(data_pedido) = CURDATE()");
			$buscaRows = mysqli_affected_rows($conn);
			//teste
			//if($buscaValor)
			while($linha = mysqli_fetch_array($buscaValor)){

			?>
			<tr>
				<td><?php echo $linha['fk_nome_func']; ?></td>
				<td><?php echo $linha['custo_pedido']; ?></td>
				<td><?php echo date('d/m/Y , h:d',strtotime($linha['data_pedido'])); ?></td>
				<td>?</td>
				<td>?</td>
			</tr>
			<?php
			}
			if($buscaRows <= 20){
				for($completarLinhas = 1; $completarLinhas <= (20 - $buscaRows); $completarLinhas++){
			?>
			<tr>
				<td>_</td>
				<td>_</td>
				<td>___</td>
				<td>?</td>
				<td>?</td>
			</tr>
			<?php 
				} 
			}	
			?>
		</table>
	</div>
</div>

<!-- FOOTER -->
<div class="footer">
	Design by <a href="">LionsStudio</a>. Desenvolvimento <a href="">iTPhantom.</a> Todos direitos reservados.
</div>
</main>
</body>
</html>
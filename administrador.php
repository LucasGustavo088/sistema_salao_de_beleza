<?php ob_start(); ?>
<html>
<head>
<title>Index</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</head>
<body id="body">

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
//inclusao de dados
include 'conexao.php';
include_once 'includes/administrador/lightbox.php';
//mensagens de alerta
if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}

//cliente
	//incluir cpf de clientes nas listas de opcoes para cadastro do pedido e verificar se realmente existe
	$sqlSelectCliente = "select * from usuario";
	$sqlSelectClienteResultado = mysqli_query($conn,$sqlSelectCliente);
	
//funcionarios
	//incluir funcionarios nas listas de opcoes para cadastro de pedido(compra)
	$sqlSelectFunc = "select * from funcionario";
	$sqlSelectFuncResultado = mysqli_query($conn,$sqlSelectFunc);

?>


<main id="main">
<!-- TOP -->
<div class="topMenu"><p>Sistema de gestão HighTech</p><img src="img/menutopbg.png" style="float:right;" /></div>

<?php 
include 'includes/administrador/barra_acesso.php';
?>

<!-- Administração -->
<?php  
	include 'includes/administrador/administracao.php';
?>

<!-- Footer -->
<?php 
	include 'includes/administrador/footer.php';
?>

</main>

</html>
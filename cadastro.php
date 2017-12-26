<!-- INSERIR PEDIDO NO BANCO DE DADOS -->
<h1>Log de operações de inserção de dados do cliente, funcionario e compras</h1>
<?php  
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['idUsuario']) OR $_SESSION['nivelUsuario'] != 3){
		
		header("Location: login.php");
		session_destroy();
		exit;
		echo "houve um problema"."<br>";
	} 
//inclusao de dados
include 'conexao.php';
	
	if(isset($_POST['cpfClientePedido']) && isset($_POST['nomeFuncPedido']) && isset($_POST['valorReceber']) && isset($_POST['ValorCliente']) ){
	//recebendo valores do pedido para variaveis locais
		$cpfClientePedido = mysqli_real_escape_string($_POST['cpfClientePedido'], $conn);
		$nomeFuncPedido = $_POST['nomeFuncPedido'];
		$valorReceber = $_POST['valorReceber'];
		$ValorCliente = $_POST['ValorCliente'];

		$sqlInsertPedido = "insert into pedido(fk_cpf_usuario,fk_nome_func,custo_pedido,dinheiro_recebido,data_pedido) values
	('$cpfClientePedido','$nomeFuncPedido','$valorReceber','$ValorCliente',now())";
		$sqlInsertPedidoResultado = mysqli_query($conn,$sqlInsertPedido);

		if($sqlInsertPedidoResultado == 1){
			$_SESSION['msg'] = "<span class='pedidoSucesso'><p>Compra realizada com sucesso</p>
			<span id='x'>x</span></span>";
		}else{
			$_SESSION['msg'] = "<span class='pedidoErro'><p>Não foi possível realizar a compra</p>
			<span id='x'>x</span></span>";
		}
	}
?>


<?php  
		  
	
	//validação de cadastro cliente
	if( (isset($_POST["nomeCadastro"])) && (isset($_POST["cpfCadastro"])) && (isset($_POST["emailCadastro"])) ){
		//recebendo dados para variaveis locais cadastro
		$nomeUsuario = $_POST["nomeCadastro"];
		$cpfUsuario = $_POST["cpfCadastro"];
		$emailUsuario = $_POST["emailCadastro"];
		$dddUsuario = $_POST["dddCadastro"];
		$telefoneUsuario = $_POST["telefoneCadastro"];
		//* escapar caracteres especiais
		$cpfUsuario = mysqli_real_escape_string($cpfUsuario, $conn);
		
		//inserir no banco de dados
		$sqlInsert = "insert into usuario (nome,cpf,email,ddd,telefone,nivel,datacadastro) values";
		$sqlInsert .= "('$nomeUsuario','$cpfUsuario','$emailUsuario','$dddUsuario','$telefoneUsuario','1',now());";

		//verificação se a operação foi executada com sucesso
		$sqlInsertResultado = mysqli_query($conn,$sqlInsert);

		if($sqlInsertResultado == 1){
			
			$_SESSION['msg'] = "<span class='sucesso'><p>Cliente ".$nomeUsuario." cadastrado(a) com sucesso!</p>
		<span id='x'>x</span></span>";
			echo 'Cadastro realizado com sucesso';
			
		}else {
			
			$_SESSION['msg'] = "<span class='erro'><p>Não foi possível cadastrar ".$nomeUsuario."</p>
		<span id='x'>x</span></span>";
			echo 'Não foi possível realizar o cadastro do cliente<br>';
			echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";
		}
		mysqli_close($conn);

	}
	//validação de cadastro funcionario
	if( (isset($_POST["nomeFunc"])) && (isset($_POST["cpfFunc"])) && (isset($_POST["emailFunc"])) && (isset($_POST["senhaFunc"])) ){
		//recebendo dados para variaveis locais cadastro
		$nomeFunc = $_POST["nomeFunc"];
		$cpfFunc = $_POST["cpfFunc"];
		$emailFunc = $_POST["emailFunc"];
		$senhaFunc = $_POST["senhaFunc"];
		$dddFunc = $_POST["dddFunc"];
		$telefoneFunc = $_POST["telefoneFunc"];
		//* escapar caracteres especiais
		$cpfFunc = mysqli_real_escape_string($cpfFunc, $conn);
		
		//inserir no banco de dados
		$sqlInsertFunc = "insert into funcionario (nome_func,cpf_func,email_func,senha_func,ddd_func,telefone_func,datacadastro_func) values";
		$sqlInsertFunc .= "('$nomeFunc','$cpfFunc','$emailFunc',sha1('$senhaFunc'),'$dddFunc','$telefoneFunc',now());";

		$sqlInsertResultadoFunc = mysqli_query($conn,$sqlInsertFunc);
		
		if($sqlInsertResultadoFunc == 1){
			
			$_SESSION['msg'] = "<span class='sucesso'><p>Funcionario ".$nomeFunc." cadastrado(a) com sucesso!</p>
		<span id='x'>x</span></span>";
			echo 'Cadastro realizado com sucesso';
			
		}else {
			
			$_SESSION['msg'] = "<span class='erro'><p>Não foi possível cadastrar ".$nomeFunc."</p>
		<span id='x'>x</span></span>";
			echo 'Não foi possível realizar o cadastro\n';
			echo mysqli_errno($conn) . ": " . mysqli_error($conn)."\n";
		}

		

		mysqli_close($conn);
	}

	header("location: administrador.php");
	
		
?>
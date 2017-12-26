<?php ob_start(); ?>
<!-- barra de acesso esquerdo -->
<style type="text/css">
#profileImgChange{
	width: 100px;
	height: 100px;
	margin: 0 auto;	
	
}

#profileImgChange ul li a{
	display: block;
	position: relative;
	float: none;
}

#profileImgChange ul li a span{
	display: block;
	position: absolute;
	bottom: 0;
	left: 0;
	opacity: 0;

}

#profileImgChange ul li:hover span{
opacity:1;
margin-bottom: 4px;
}

#profileImgChange ul li a img{ 
width:100px;
height:100px;

}

#profileImgChange ul li a span{ 
width:100px;
margin-bottom: 0px;
background: rgba(0,0,0,0.4);
transition: 400ms;
}


</style>

<div class="left" id="function" style="outline: none;">
<div class="profileIMG">

<div id="profileImgChange">
	<ul style="list-style: none;">
		<li>
			<a onclick='alert("Desculpe, estamos quase resolvendo isso! :)");' " href="">
				<img src="img/usuarios_avatar/avatar.png"/>
				<span style="color: white; font-family: sans-serif;">Alterar </span>
			</a>
		</li>
	</ul>		
</div>

<div>Olá, <?php echo $_SESSION['nomeUsuario'] ?>.</div>
<div class="menuUsu"><br/>

<!-- cobrar compra -->
<a href="administrador.php">
	<button class="btn btnMenuLeft">Cobrar Compra</button>
</a>
<!-- cadastrar cliente -->

	<button id="cadastrarCliente" class="btn btnMenuLeft">Cadastrar cliente</button>
		
<!-- relatorio do dia -->
<a href="relatorio.php">
	<button id="relatorioDoDiaBtn" class="btn btnMenuLeft" >Relatório do Dia</button>
</a> 
<!-- cadastrar funcionario -->

	<button id="cadastrarFunc" class="btn btnMenuLeft" >Cadastrar funcionário</button>

<hr style="width: 90%; margin: 5px auto; color: #ee1375;" noshade>


<!-- configurações -->
<a href="configuracoes.php">
	<button id="configuracoes" class="btn btnMenuLeft" >Configurações</button>
</a>	
<!-- sair -->
<a href="sair.php">
	<button class="btn btnMenuLeft" value="Sair">Log out</button>
</a>


</div>
</div>
</div>
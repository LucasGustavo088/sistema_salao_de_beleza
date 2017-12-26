
<!-- barra de acesso esquerdo -->

<div class="left" id="function">
<div class="profileIMG">
<img src="http://media1.shmoop.com/media/covers/literature/lit70027.jpg" width="100px" height="100px" />
<div>Olá, <?php echo $_SESSION['nomeUsuario'] ?>.</div>
<div class="menuUsu"><br/>

<!-- cobrar compra -->
<a href="">
	<button class="btn btnMenuLeft">Configurações gerais da conta</button>
</a>
<!-- cadastrar cliente -->

	<button id="cadastrarCliente" class="btn btnMenuLeft">Editar cliente</button>
		
<!-- relatorio do dia -->
<a href="relatorio.php">
	<button id="relatorioDoDiaBtn" class="btn btnMenuLeft" >Editar funcionario</button>
</a> 
<!-- personalizacao | mudar tema -->
<a href="">
	<button id="relatorioDoDiaBtn" class="btn btnMenuLeft" >Personalizar | Mudar Tema</button>
</a> 
<!-- sair -->
<a href="sair.php">
	<button class="btn btnMenuLeft" value="Sair">Log out</button>
</a>

</div>
</div>
</div>
<?php ob_start(); ?>
<!--Cadastrar cliente -->

<div class="lightBox" id="lightBox" onclick="hiddenLightBox()"></div>
	<div class="cadastro" id="cadastro">
	<div class="formulario" id="formulario">
		<h1>Cadastro de Cliente<button style="float:right;" class="sair" id="sair">X</button></h1>
		<form action="cadastro.php" method="post">
			<input class="txt" type="text" name="nomeCadastro" required placeholder="Nome" /><br/>
			<input class="txt" type="text"	name="cpfCadastro" required placeholder="CPF"
			OnKeyPress="formatar('###.###.###-##',this)"  maxlength="14"/><br/>
			<input class="txt" type="email" name="emailCadastro" required placeholder="E-mail" /><br/>
			<input style="width:54px;" class="txt" type="text" name="dddCadastro" id="ddd" onkeypress="func1();"required placeholder="(00)" maxlength="2">
			<input style="width:174px;" class="txt" type="text" name="telefoneCadastro" id="telefone" maxlength="9" required placeholder="0000 - 0000" maxlength="" /><br/>
		<br />
				<input class="btn" type="submit" value="Cadastrar" />
	</form>
</div>
</div>

<!-- Cadastrar funcionario -->

<div class="lightBox" id="lightBoxFunc" onclick="hiddenLightBox()"></div>
<div class="cadastro" id="cadastroFunc">
	<div class="formulario" id="formularioFunc">
		<h1>Cadastro de Funcionario<button style="float:right;" class="sair" id="sairFunc">X</button></h1>
		<form action="cadastro.php" method="post">
				<input class="txt" type="text" name="nomeFunc" required placeholder="Nome" /><br/>
				<input class="txt" type="text"	name="cpfFunc" required placeholder="CPF" 
				OnKeyPress="formatar('###.###.###-##',this)"  maxlength="14" maxlength="11"/><br/>
				<input class="txt" type="email" name="emailFunc" required placeholder="E-mail" /><br/>
				<input class="txt" type="password" name="senhaFunc" required placeholder="*****" /><br/>
				<input style="width:54px;" class="txt" type="text" name="dddFunc" id="dddFunc" onkeypress="func2();"required placeholder="(00)" maxlength="2">
				<input style="width:174px;" class="txt" type="text" name="telefoneFunc" id="telefoneFunc" maxlength="9" required placeholder="0000 - 0000" maxlength="" /><br/>
				<br />
					<input class="btn" type="submit" value="Cadastrar" />
					
				
		</form>
	</div>
	</div>


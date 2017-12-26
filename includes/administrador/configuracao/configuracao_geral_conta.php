<?php ob_start(); ?>
<div class="right" id="function">
	<form action="salvarAuteracoes.php" id="configuracoesForm">
	<table id="config" cellpadding="0" cellspacing="0">
		<tr class="titleConfig firstTr">
			<td colspan="2" class="titleConfig" >Configurações gerais</td>
		</tr>
		<?php  
			

		?>
		<tr>
			<td>Usuario: </td>
			<td>
				<input type="text" name="nome" placeholder="Nome" />
			</td>
		</tr>
		<tr>
			<td>Senha: </td>
			<td>
				<input type="password" name="usuario" placeholder="Senha" />
			</td>
		</tr>
		<tr>
			<td>Confirmar senha: </td>
			<td>
				<input type="password" name="usuario" placeholder="Senha" />
			</td>
		</tr>

		<tr>
			<td>Email: </td>
			<td>
				<input type="text" name="usuario" placeholder="email@dominio.com" />
			</td>
		</tr>

		<tr>
			<td>Foto perfil: </td>
			<td>
				<input type="text" name="usuario" value="" placeholder="http://www" />
			</td>
		</tr>
	</table>
	<input type="submit" value="Salvar alterações">
	</form>
</div>




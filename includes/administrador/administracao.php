<?php  ob_start();?>
<div class="right" id="function">
<form action="cadastro.php" method="post">
	<table style="width:380px; margin:auto; margin-top:65px;">
		
		<tr>
			
			<?php 
			if(isset($_SESSION['adv']))
				echo $_SESSION['adv'];
			?>
			<td>CPF cliente</td>
			<td>Funcionário</td>
		</tr>
		<tr>
			<td>
				<input class="txt txtHome" type="text"	name="cpfClientePedido" required 
			OnKeyPress="formatar('###.###.###-##',this)"  maxlength="14"/><br/>
			</td>
			<td>
				<select name="nomeFuncPedido" style="width:100%">
				<?php while($linha = mysqli_fetch_array($sqlSelectFuncResultado)){ ?>
 					<option><?php echo $linha['nome_func']; ?></option>
				<?php } ?>

				</select>
			</td>
		</tr>
		<tr>
			<td>Custo serviço</td>
			<td>Dinheiro recebido</td>
		</tr>
		<tr>
			<td><input id="ValorReceber" maxlength="8" name="valorReceber" type="text" class="txt txtHome" /></td>
			<td><input id="ValorCliente" maxlength="8" name="ValorCliente" type="text" class="txt txtHome"></td>
		</tr>
		<tr>
			<td colspan="2" style="padding:10px;">
			<input type="button" class="btn" onclick="calcular()" value = "Calcular" >
			<input type="submit" class="btn" value="Cadastrar compra">
			<input type="reset" class="btn" value="Limpar">
		<tr>
			<td colspan="2" style="font-size:30px;">Troco:</tr>
		</tr>
		
		<tr>
			<td conspan="2"><p id="demo"><p style="font-size:60px; color: #333;" id="troco"></p></td>
		</tr>
		
	</table>
	
</form>

</div>
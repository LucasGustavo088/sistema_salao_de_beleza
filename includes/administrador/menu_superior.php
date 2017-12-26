<?php ob_start(); ?>
<!-- HEADER -->	
<header class="header">
<nav class="nav">
<li style="font-weight: bold; font-size: 14px; margin-top:1px;">C</li>
<li class="headerLegend" style="font-size:12px; padding-top: 6px; padding-left: 12px; padding-right: 12px; font-weight: bold;"><b>Cantinho da beleza - DashBoard</b></li>
<ul>
	<li><a href="administrador.php">Ínicio</a></li>
	<li><a href="">Cadastro</a>
		<ul>
			<li><a id="cadastrarClienteNav">Cadastrar Cliente</a></li>
			<li><a id="cadastrarFuncNav">Cadastrar Funcionário</a></li>
		</ul>
	</li>
	<li><a href="relatorio.php">Relatórios</a></li>
	<li><a href="configuracoes.php">Configuração</a></li>
	<li><a href="sair.php" name="logout">Sair</a></li>
	<li style="float:right; padding-right:20px;"><div id="horario"></div></li>

</ul>

<script>
	startTime();
	function startTime(){
	
		var hoje = new Date();
		var h = hoje.getHours();
		var m = hoje.getMinutes();
		var s = hoje.getSeconds();
		var dia = hoje.getDay();
		var semana = new Array(6);

		semana[0]='Dom';
		semana[1]='Seg';
		semana[2]='Ter';
		semana[3]='Qua';
		semana[4]='Qui';
		semana[5]='Sex';
		semana[6]='Sáb';

		m = checkTime(m);
		s = checkTime(s);

		document.getElementById('horario').innerHTML = semana[dia] + "   " + h + " : " + m + " : " + s;
		var t = setTimeout(startTime, 500);
	}

	function checkTime(i){
		if(i < 10){i = "0" + i};
		return i;
	}	
</script>
</nav>
</header>
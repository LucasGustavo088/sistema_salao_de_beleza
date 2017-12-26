<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#x").click(function(){
			$(".sucesso").slideUp();
		});
	});
</script>

<style>
	.sucesso{
		background: #47c976;
		width: 100%;
		box-sizing: border-box;
		color:#fff;
		padding:0 10px 0 10px;
		display: flex;
		flex-wrap: wrap;
		justify-content:space-between;
	}

	.sucesso span{
		color:#fff;
		font-weight: bold;
		padding:4px 8px;
		background: #000;
		display: flex;
		align-self: center;
	}

	.sucesso span:hover{
		background:#999;
		cursor: default;
	}
</style>
</head>
<body>
<span class="sucesso"><p>Menssagem de sucesso.</p> <span id="x">x</span></span>
</body>
</html>
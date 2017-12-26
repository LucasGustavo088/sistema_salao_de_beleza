// function lightBox(){
// 	document.getElementById("lightBox").style.visibility = "visible";
// 	document.getElementById("cadastro").style.visibility = "visible";
// }

// function hiddenLightBox(){
// 	document.getElementById("lightBox").style.visibility = "hidden";
// 	document.getElementById("cadastro").style.visibility = "hidden";
// }

$(document).ready(function(){
	//cadastro cliente
	$("#cadastrarCliente").click(function(){
		$("#lightBox").fadeToggle("fast");
		$("#cadastro").fadeToggle("fast");
	});
	$("#cadastrarClienteNav").click(function(){
		$("#lightBox").fadeToggle("fast");
		$("#cadastro").fadeToggle("fast");
	});

	$("#lightBox").click(function(){
		$("#lightBox").fadeOut("fast");
		$("#cadastro").fadeOut("fast");
	});
	$("#sair").click(function(){
		$("#lightBox").fadeOut("fast");
		$("#cadastro").fadeOut("fast");
	});

	//cadastro funcionario
	$("#cadastrarFunc").click(function(){
		$("#lightBoxFunc").fadeToggle("fast");
		$("#cadastroFunc").fadeToggle("fast");
	});
	$("#cadastrarFuncNav").click(function(){
		$("#lightBoxFunc").fadeToggle("fast");
		$("#cadastroFunc").fadeToggle("fast");
	});
	$("#lightBoxFunc").click(function(){
		$("#lightBoxFunc").fadeOut("fast");
		$("#cadastroFunc").fadeOut("fast");
	});
	$("#sairFunc").click(function(){
		$("#lightBoxFunc").fadeOut("fast");
		$("#cadastroFunc").fadeOut("fast");
	});

	// mensagem sucesso

	$("#x").click(function(){
			$(".sucesso").slideUp();
		});
	$("#x").click(function(){
			$(".erro").slideUp();
		});
	$("#x").click(function(){
			$(".pedidoSucesso").slideUp();
		});
	$("#x").click(function(){
			$(".pedidoErro").slideUp();
		});
});

function calcular(){
	var x = document.getElementById("ValorReceber").value;
	var y = document.getElementById("ValorCliente").value;
	var troco = y-x;
	document.getElementById("troco").innerHTML = "R$: "+ troco;
}

//ddd pula pra telefone
function func1(){
	dddLength = document.getElementById('ddd').value.length;
	if(dddLength == 1){
	document.getElementById('telefone').focus();
}};

function func2(){
	dddFuncLength = document.getElementById('dddFunc').value.length;
	if(dddFuncLength == 1){
	document.getElementById('telefoneFunc').focus();
}};

// máscara de cep rg, cpf etc
function formatar(mascara, documento){
    var i = documento.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(i)
    if (texto.substring(0,1) != saida){
        documento.value += texto.substring(0,1);
    }
}
	//array de motos
    var cont  = 0;
    var bg  = new Array();

    bg [0] = "images/produtos/p1.jpg";
    bg [1] = "images/produtos/p2.jpg";
    bg [2] = "images/produtos/p3.jpg";
    bg [3] = "images/produtos/p4.jpg";
	bg [4] = "images/produtos/p5.jpg";
	bg [5] = "images/produtos/p6.jpg";
	 
	carregaMoto(0);

	function mudarbg(){
		for(bg = 0; bg <= 5; bg++){
			document.getElementByTagName('body').background.style = "img/bg.jpg";
			if(bg == 5){
				i = 0;
			}
		}
	}
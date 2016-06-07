// Não implementado.
function verificaSenha(){
	senha = document.getElementById("senha").value;
	forca = 0;
	
	
	// Tamanho Maior que 8 bom!
	if((senha.length >= 4) && (senha.length <= 7)){
		forca += 10;
	}else if(senha.length>7){
		forca += 25;
	}
	
	//Letras minusculas
	if(senha.match(/[a-z]+/)){
		forca += 10;
		alert("minusculo");
	}
	//Letras Maisculas
	if(senha.match(/[A-Z]+/)){
		forca += 20;
		alert("Maisculo!");
	}
	//Digitos
	if(senha.match(/\d+/)){
		forca += 20;
		alert("Digito");
	}
	//Especial
	if(senha.match(/\W+/)){
		forca += 25;
		alert("Especial");
	}
	return resultForca();
}
function resultForca(){
	if(forca < 30){
		 document.getElementById("senha").style.backgroundColor = '#F55';
	}else if((forca >= 30) && (forca < 60)){
		 document.getElementById("senha").style.backgroundColor = 'F66';
	}else if((forca >= 60) && (forca < 85)){
		 document.getElementById("senha").style.backgroundColor = '#9CF';
	}else{
		 document.getElementById("senha").style.backgroundColor = '#CF9';
	}
}
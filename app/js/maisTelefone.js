var contTel = 1;
	function addTel(){
		if(contTel >= 1 && contTel <=4){
			contTel++;
			var id = "tel"+contTel;			
			document.getElementById(id).style=("display:block;");
			if(contTel>=3){
				var id2 = "btnRemov"+(contTel-1);
				document.getElementById(id2).style=("display:none;");
			}
		}
	}
	function removeTel(){
		if(contTel !=1){
		var id = "tel"+contTel;	
		document.getElementById(id).style=("display:none;");
		contTel--;
			if(contTel>=2){
				var id2 = "btnRemov"+(contTel);
				document.getElementById(id2).style=("display:block;");
			}
		}
	}
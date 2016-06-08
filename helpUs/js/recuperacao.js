function fctRec()
{
	$.post('require/js-php/login.php',{email:$('#email').val()},function(dados)
	{
		if(dados)
		{
			alert(dados);
		}
		else
		{
			alert('Mensagem enviada para o email solicitado.');
		}
	});
}
$(document).ready(function(){
	$("#txtnombre").focusout(function(){
		var nombre = $("#txtnombre").val();
			if (nombre == "")
			{
				$("#notaNombre").fadeIn(0);
			}else{
				$("#notaNombre").fadeOut(100);
			}

	});// funcion validar nombre

	$("#txtapellido").focusout(function(){
		var apellido = $("#txtapellido").val();
		if (apellido == "")
		{
			
			}else{

			}

	});// funcion validar apellido

	$("#txtemail").focusout(function(){
		var correo = $("#txtemail").val();
		if (correo == "")
		{
			
		}
		else
		{

		}

	});// funcion validar correo

	$("#texto").focusout(function(){
		var text = $("#texto").val();
		if (text == "")
		{

		}
		else
		{

		}

	});// funcion validar texto
});
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
			$("#notaApellido").fadeIn(0);
		}else{
			$("#notaApellido").fadeOut(100);
		}

	});// funcion validar apellido

	$("#txtemail").focusout(function(){
		var correo = $("#txtemail").val();
		if (correo == "")
		{
			$("#notaCorreo").fadeIn(0);
		}else{
			$("#notaCorreo").fadeOut(100);
		}

	});// funcion validar correo

	$("#texto").focusout(function(){
		var text = $("#texto").val();
		if (text == "")
		{
			$("#notaMensaje").fadeIn(0);
		}else{
			$("#notaMensaje").fadeOut(100);
		}

	});// funcion validar texto
});
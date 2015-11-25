$(document).ready(function(){
  $("#validarNombre").focusout(function(){

        var nombre = $("#validarNombre").val();

        if (nombre == ""){
            $("#valNombre").fadeIn(100);
        }else{
            $("#valNombre").fadeOut(100);
        }

  });// Cierre validarNombre

  $("#validarApellido").focusout(function(){

        var nombre = $("#validarApellido").val();

        if (nombre == ""){
            $("#valApellido").fadeIn(100);
        }else{
            $("#valApellido").fadeOut(100);
        }

  });// Cierre validarApellido


  $("#validarCorreo").focusout(function(){

        var nombre = $("#validarCorreo").val();

        if (nombre == ""){
            $("#valCorreo").fadeIn(100);
        }else{
            $("#valCorreo").fadeOut(100);
        }

  });// Cierre validarApellido
  

  });
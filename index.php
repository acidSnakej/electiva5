<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PaginaDeportes</title>
            <?php include ("header.php"); ?>
  <link rel="stylesheet" href="bootstrap/css/estilos.css">
  
  
</head>
<body>
	<!-- Búsqueda Google -->


<center>


<FORM method=GET action="http://www.google.com/search">


<TABLE bgcolor="#FFFFFF"><tr><td>


<A HREF=" http://www.google.com/">


<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border="0" ALT="Google" align="absmiddle"></A>


<INPUT TYPE=text name=q size=31 maxlength=255 value="">


<INPUT TYPE=hidden name=hl value=es>


<INPUT type=submit name=btnG VALUE="Búsqueda Google">


</td></tr></TABLE>


</FORM>


</center>


<!-- Búsqueda Google -->
    <?php include ("barraNavegacion.php"); ?>
    <?php include ("carrusel.php"); ?>
    <?php include ("noticias.php");?>
    <?php include ("footer.php"); ?> 
    
</body>
</html>
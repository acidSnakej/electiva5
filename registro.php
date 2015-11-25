<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MipaginaWeb</title>
            <?php include ("header.php"); ?>
  <link rel="stylesheet" href="bootstrap/css/estilos.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body >
    <?php require ("recaptcha/recaptchalib.php"); ?>
    <?php include("barraNavegacion.php"); ?>
    <?php require ("DBManager.php"); ?>
	<center class="TituloRegistro"><h1>Registro de datos</h1></center>

<section>
<form action="validarRegistro.php" method="post">

    <center>
        <table>
            <tbody>
                <tr>
                    <td><label for="txtnombre">Nombre </label></td>
                    <td>
                    <input type="text" title="Ingresar su nombre" name="txtnombre" id="txtnombre" class="form-control" required>
                    </td>						
                </tr> 

                <tr>
                    <td><label for="txtapellido">Apellidos </label> </td>
                    <td>
                    <input type="text" title="Ingrese su apellido" name="txtapellido" id="txtapellido" class="form-control" required>
                        
                    </a>
                    </td>						
                </tr>

                <tr>
                    <td><label for="txtemail">Email </label> </td>
                    <td>
                    <input type="email" title="Ingrese su correo" name="txtemail" id="txtemail" class="form-control" required>
                    </td>						
                </tr>

                <tr>
                    <?php $query = $miConexion->query("genero","*"); ?>
                    <td><label for="txtsexo">Sexo </label> </td>
                    <td>
                    <select title="Seleccione su genero" name="genero" class="form-control" id="electiva">
                    <?php while ($result = mysqli_fetch_object($query)): ?>
                        <option value="<?php echo $result->id; ?>"><?php echo $result->descripcion; ?></option>
                    <?php endwhile; ?>              
                    </select>
                    </td>
                </tr>
	
                <tr>
                <?php $query1 = $miConexion->query("deportes","*"); ?>
                <td><label for="txtjava">Deporte </label> </td>
                <td>
                    <select id ="slphp" title="Seleccione uno de los deportes" name="form-control" class="form-control">
                    <?php while ($result1 = mysqli_fetch_object($query1)): ?>
                        <option value=" <?php echo $result1->id; ?>"><?php echo $result1->descripcion; ?></option>
                    <?php endwhile; ?>
                    </select>
                </td>						
            </tr>

<br>
<div align="center">
    <div class="g-recaptcha" data-sitekey="6Leuqg0TAAAAAGTtqZKwM5i19Co_y1aSdR0oWHtm" style="position:relative;"></div>
</div>      

            </tbody>
            </table></center>
            <br>
        <center><td><input type="submit" value="Enviar" class="btn btn-primary" name="enviar" /></td>
        <td><input type="reset" value="Resetear" class="btn btn-primary" /></td>
            <p><?php echo $error = $_GET['error']; ?></p></center>
        </form>
</section>

<?php include ("footer.php"); ?>
   	
</body>
</html>

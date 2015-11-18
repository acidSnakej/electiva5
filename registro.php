<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
            <?php include ("header.php"); ?>
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

  <link rel="stylesheet" href="bootstrap/css/estilos.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="fondo">
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
                    <input title="se necesita un nombre" type="text" name="txtnombre" id="txtnombre" class="form-control" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="txtapellido">Apellidos </label> </td>
                    <td>
                    <input type="text" name="txtapellido" id="txtapellido" class="form-control" required>
                    </td>
                </tr>

                <tr>
                    <td><label for="txtemail">Email </label> </td>
                    <td>
                    <input type="email" name="txtemail" id="txtemail" class="form-control" required>
                    </td>
                </tr>

                <tr>
                    <?php $query = $miConexion->query("genero","*"); ?>
                    <td><label for="txtsexo">Sexo </label> </td>
                    <td>
                    <select name="genero" class="form-control" id="electiva">
                    <?php while ($result = mysqli_fetch_object($query)): ?>
                        <option value="<?php echo $result->id; ?>"><?php echo $result->Descripcion; ?></option>
                    <?php endwhile; ?>
                    </select>
                    </td>
                </tr>

                <tr>
                <?php $query1 = $miConexion->query("deportes","*"); ?>
                <td><label for="txtjava">Deporte </label> </td>
                <td>
                    <select id ="slphp" name="form-control" class="form-control">
                    <?php while ($result1 = mysqli_fetch_object($query1)): ?>
                        <option value=" <?php echo $result1->id; ?>"><?php echo $result1->descripcion ?></option>
                    <?php endwhile; ?>
                    </select>
                </td>
            </tr>

<br>
<div align="center">
    <div class="g-recaptcha" data-sitekey="6Leuqg0TAAAAAGTtqZKwM5i19Co_y1aSdR0oWHtm" style="position:relative;"></div>
</div>

        <br>
        <center><td><input type="submit" value="Enviar" class="btn btn-primary" name="enviar" /></td>
        <td><input type="reset" value="Resetear" class="btn btn-primary" /></td>
            <p><?php echo $error = $_GET['error']; ?></p></center>


            </tbody>
            </table></center>
        </form>
</section>

<?php include ("footer.php"); ?>

</body>
</html>

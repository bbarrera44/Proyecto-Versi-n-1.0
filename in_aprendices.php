<?php
	$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
	
	mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
	
	$registro=mysqli_query($conexion,"insert into aprendices (nombres_aprendiz,apellidos_aprendiz,documento,tel_aprendiz,cel_aprendiz,ficha) values ('$_POST[nombres]','$_POST[apellidos]','$_POST[documento]','$_POST[telefono]','$_POST[celular]','$_POST[ficha]')") or die(mysqli_error($conexion));

	mysqli_close($conexion);
?>
<!DOCTYPE html>
<html>
<head>
	<title>SABAJ</title>
</head>
<body>
	Se realizo el registro corectamente<br>
	<input type="reset" value="Inicio" onclick="window.location.href='index.php'">
</body>
</html>
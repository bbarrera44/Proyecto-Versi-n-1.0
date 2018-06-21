<!DOCTYPE html>
<html>
<head>
	<title>SABAJ</title>
</head>	
<body>
	<?php 
	$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
	
	mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
	
	$registro=mysqli_query($conexion,"select * from usuario where numero_documento='$_POST[us_documento]'") or die (mysqli_error($conexion));

	while ($reg=mysqli_fetch_array($registro)){

?>
<form action="modificar_us.php" method="post">
	<table border="0" width="90%" align="center">
	<tr>
		<td colspan="4" align="center">Nombre de usuario: <input type="text" name="us_nombre_usuario" value="<?php echo $reg['nombre_usuario'];?>"></td></td>
	</tr>
	<tr>
		<td>Nombres: </td><td><input type="text" name="us_nombres" value="<?php echo $reg['nombres'];?>"></td>
		<td>Apellidos: </td><td><input type="text" name="us_apellidos" value="<?php echo $reg['apellidos'];?>"></td></td>
	</tr>
	<tr>
		<td>Cargo: </td><td><select name="us_cargo"><option value="Seleccione">Seleccione</option><option value="Apoyo_de_administracion">Apoyo de administracion</option><option value="Instructor">Instructor</option><option value="Bienestar">Bienestar</option></select></td>
		<td>Documento: </td><td><input type="text" name="us_documento" value="<?php echo $reg['numero_documento'];?>"></td></td>
	</tr>
	<tr>
		<td>Direccion: </td><td><input type="text" name="us_direccion" value="<?php echo $reg['direccion'];?>"></td></td>
		<td>Correo: </td><td><input type="text" name="us_correo" value="<?php echo $reg['correo'];?>"></td></td>
	</tr>
	<tr>
		<td>Telefono: </td><td><input type="text" name="us_telefono" value="<?php echo $reg['telefono'];?>"></td></td>
		<td>Celular: </td><td><input type="text" name="us_celular" value="<?php echo $reg['celular'];?>"></td></td>
	</tr>
	<tr>
		<td colspan="4" align="center"><input type="submit" value="Finalizar"></td>
	</tr>
	</table>
</form>
<?php 
	}
?>
</body>
</html>
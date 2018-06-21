<!DOCTYPE html>
<html>
<head>
	<title>SABAJ</title>
</head>
<body>
	Ingresar aprendiz<br>
<form action="in_aprendices.php" method="post">
	<table>
		<tr>
			<td>Nombres: </td>
			<td><input type="text" name="nombres"></td>
		</tr>
		<tr>
			<td>Apellidos: </td>
			<td><input type="text" name="apellidos"></td>
		</tr>
		<tr>
			<td>Documento: </td>
			<td><input type="text" name="documento"></td>
		</tr>
		<tr>
			<td>Telefono: </td>
			<td><input type="text" name="telefono"></td>
		</tr>
		<tr>
			<td>Celular: </td>
			<td><input type="text" name="celular"></td>
		</tr>
		<tr>
			<td>Ficha: </td>
			<td>
				<?php 
				$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
				mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
				$registro=mysqli_query($conexion,"select ficha from fichas") or die(mysqli_error($conexion));
				echo "<select name='ficha' class='formulario__input'>";
				echo "<option value=\"Seleccionar\">Seleccionar</option>";
				while ($reg=mysqli_fetch_array($registro)) {
				echo "<option value=\"$reg[ficha]\">".$reg['ficha']."<option>";
				}
				echo "</select>";	
				 ?>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Guardar"></td>
		</tr>
	</table>
</form>	
</body>
</html>
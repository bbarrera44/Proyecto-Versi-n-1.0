<?php
	
	$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
	
	mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
	
	mysqli_query($conexion,"insert into reingreso (ficha_anterior,ficha_ingresar,nombre_aprendiz,documento,fecha_reingreso,motivo_reingreso,descripcion_reingreso) values ('$_POST[ficha_anterior]','$_POST[ficha_ingresar]','$_POST[aprendiz]','$_POST[documento]',$_POST[fecha_reingreso],'$_POST[solicitud]','$_POST[descripcion]')") or die (mysqli_error($conexion));

	mysqli_close($conexion);

	header("location: complete.php");
?>
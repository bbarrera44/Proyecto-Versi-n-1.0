<?php
	
	$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
	
	mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
	
	mysqli_query($conexion,"insert into retirovoluntario (ficha_retiro,nombre_aprendiz,documento,fecha_retiro,motivo_retiro,descripcion_retiro) values ('$_POST[ficha_retiro]','$_POST[aprendiz]','$_POST[documento]',$_POST[fecha_retiro],'$_POST[solicitud]','$_POST[descripcion]')") or die (mysqli_error($conexion));

	mysqli_close($conexion);

	header("location: complete.php");
?>
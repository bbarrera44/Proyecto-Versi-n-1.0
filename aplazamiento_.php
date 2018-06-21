<?php
$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
	
	mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
	
	mysqli_query($conexion,"insert into aplazamientos (ficha_aplazamiento,aprendiz_aplazamiento,n_documento,fecha_solicitud,motivo_aplazamiento,descripcion_aplazamiento) values ('$_POST[ficha]','$_POST[aprendiz]','$_POST[documento]',$_POST[fecha_aplazamiento],'$_POST[solicitud]','$_POST[descripcion]')") or die (mysqli_error($conexion));

	mysqli_close($conexion);

	header("location: complete.php");
?>
<?php
	$conexion=mysqli_connect("localhost","root","","proyecto") or die (mysqli_error($conexion));

	$registro=mysqli_query($conexion,"update usuario set nombre_usuario='$_POST[usuario_ac]',numero_documento='$_POST[documento_ac]',nombres='$_POST[nombres_ac]',apellidos='$_POST[apellidos_ac]',direccion='$_POST[direccion_ac]',correo='$_POST[correo_ac]',telefono='$_POST[telefono_ac]',celular='$_POST[celular_ac]' where nombre_usuario='$_COOKIE[usuarioo]'") or die (mysqli_error($conexion));

	if($_POST['contrasena_ac']!=""){
		$registro=mysqli_query($conexion,"update usuario set contrasena='$_POST[contrasena_ac]' where nombre_usuario='$_COOKIE[usuarioo]'") or die (mysqli_error($conexion));
	}

	header("location: actualizar_c.php");
	mysqli_close($conexion);
?>
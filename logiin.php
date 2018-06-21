<?php

	$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
	
	mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
	
	$registro=mysqli_query($conexion,"select nombre_usuario,contrasena from usuario where nombre_usuario='$_POST[i_usuario]' and contrasena='$_POST[i_contrasena]'") or die (mysqli_error($conexion));

	if ($reg=mysqli_fetch_array($registro))
	{
		setcookie("usuarioo",$_POST['i_usuario'],time()+(60*60*24*365),"/");
		setcookie("contrasenaa",$_POST['i_contrasena'],time()+(60*60*24*365),"/");
		header("location: index.php");
	}
	else {
		$incorrecto="Usuario o contraseña incorrectos, por favor verificar";
		setcookie("incorrecto",$incorrecto,time()+(60),"/");
		header("location: login.php");
	}


	mysqli_close($conexion);

	
?>
	

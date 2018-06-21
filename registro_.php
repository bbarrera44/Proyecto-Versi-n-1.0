<div class="login-box">
<?php
	setcookie("n_usuario",$_POST['n_usuario'],time()+(60),"/");
	setcookie("n_documento",$_POST['n_documento'],time()+(60),"/");
	setcookie("nombres",$_POST['nombres'],time()+(60),"/");
	setcookie("apellidos",$_POST['apellidos'],time()+(60),"/");
	setcookie("direccion",$_POST['direccion'],time()+(60),"/");
	setcookie("correo",$_POST['correo'],time()+(60),"/");
	setcookie("cocorreo",$_POST['cocorreo'],time()+(60),"/");
	setcookie("telefono",$_POST['telefono'],time()+(60),"/");
	setcookie("celular",$_POST['celular'],time()+(60),"/");

if (($_POST['con1']==$_POST['con2']) && ($_POST['correo']==$_POST['cocorreo'])){
	
	$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
	
	mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
	
	mysqli_query($conexion,"insert into Usuario (cargo,nombre_usuario,numero_documento,nombres,apellidos,direccion,correo,telefono,celular,contrasena,genero) values ('$_POST[cargo]','$_POST[n_usuario]','$_POST[n_documento]','$_POST[nombres]','$_POST[apellidos]','$_POST[direccion]','$_POST[correo]','$_POST[telefono]','$_POST[celular]','$_POST[con1]','$_POST[genero]')") or die (mysqli_error($conexion));

	mysqli_close($conexion);}
	else {
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="icon" href="logo.png" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SABAJ/Registro</title>
<link rel="stylesheet" type="text/css" href="css_login.css">
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" type="text/css" href="cssdeaplazaymas.css">
</head>

<body>



<div class="slider" align="center">

<?php
	if (($_POST['con1']==$_POST['con2'])&&($_POST['correo']==$_POST['cocorreo'])){
		echo "<h1>Perfecto</h1><br><h2>El usuario fue registrado correctamente</h2>";
		echo "<br />";
		echo "<input type=\"submit\" class=\"formulario__submit\" value=\"Iniciar Sesion\" onClick=\" window.location.href='login.php' \"/>";
		echo "<input type=\"submit\" class=\"formulario__submit\" value=\"Finalizar\" onClick=\" window.location.href='index.php' \"/>";}
	else{
		echo "<h1>La contraseña o el correo no coinciden</h1><br><h3>por favor volverlo a intentar y verificar</3><br><br><br><br>";
		echo "<input type=\"submit\" class=\"formulario__submit\" value=\"Volver al Inicio\" onClick=\" window.location.href='index.php' \"/>";}
?>

</div>



</body>
</html>
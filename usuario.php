<!DOCTYPE html>
<html>
<head>
	<title>SABAJ</title>
<link rel="stylesheet" type="text/css" href="css_usuario.css">
</head>
<body>

<div class="login-box">
<h1>Perfil</h1>

<?php 
	$conexion=mysqli_connect("localhost","root","") or die(mysqli_error($conexion));
	
	mysqli_select_db($conexion,"proyecto") or die(mysqli_error($conexion));
	
	$registro=mysqli_query($conexion,"select * from usuario where nombre_usuario='$_COOKIE[usuarioo]'") or die (mysqli_error($conexion));
	while ($reg=mysqli_fetch_array($registro)){
?>
<form action="actualizar.php" method="post">
<center>
<img src="usuario.png" class="avatar">
<table border="0" width="90%" class="tabla">
	<tr>
		<td colspan="2"><h2>Nombre de usuario<br>&nbsp;&nbsp;&nbsp;&nbsp;<center><div class="nom"><?php echo $reg['nombre_usuario']; setcookie("nombre_usuario","$reg[nombre_usuario]",time()+(60*60),"/"); ?>
		    </div><hr/></h2><center></td>
	</tr>
	<tr>
		<td width="42%"><h3>Nombres<center><br><div class="nom"><?php echo $reg['nombres']; setcookie("nombres","$reg[nombres]",time()+(60*60),"/"); ?></center></h3><hr width="90%" align="left"></div></td>
		<td width="42%"><h3>Apellidos<center><br><div class="nom"><?php echo $reg['apellidos']; setcookie("apellidos","$reg[apellidos]",time()+(60*60),"/");?></h3><hr width="100%"></td>
	</tr>
	<tr>
		<td><h3>Cargo<center><br><div class="nom"><?php echo $reg['cargo']; setcookie("cargo","$reg[cargo]",time()+(60*60),"/");?></h3><hr width="90%" align="left"></div></center></td>
		<td><h3>Documento<center><br><div class="nom"><?php echo $reg['numero_documento']; setcookie("numero_documento","$reg[numero_documento]",time()+(60*60),"/");?></h3><hr width="100%"></div></center></td>
	</tr>
	<tr>
		<td><h3>Direccion<center><br><div class="nom"><?php echo $reg['direccion']; setcookie("direccion","$reg[direccion]",time()+(60*60),"/");?></h3><hr width="90%" align="left"></div></center></td>
		<td><h3>Correo<center><br><div class="nom"><?php echo $reg['correo']; setcookie("correo","$reg[correo]",time()+(60*60),"/");?></h3><hr width="100%"></div></center></td>
	</tr>
	<tr>
		<td><h3>Telefono<center><br><div class="nom"><?php echo $reg['telefono']; setcookie("telefono","$reg[telefono]",time()+(60*60),"/");?></h3><hr width="90%" align="left"></div></center></td>
		<td><h3>Celular<center><br><div class="nom"><?php echo $reg['celular']; setcookie("celular","$reg[celular]",time()+(60*60),"/");?></h3><hr width="100%"></div></center></td>
	</tr>
</table> <br>
<br>
<input type="button" value="Atras" class="submit" onClick="window.location.href='index.php'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Actualizar informacion" >

</center>
</form>
<?php	
	}
?>
<?php
	$conexion=mysqli_connect("localhost","root","","proyecto") or die(mysqli_error($conexion));

	$registro=mysqli_query($conexion,"select * from usuario where nombre_usuario='$_COOKIE[usuarioo]'") or die (mysqli_error($conexion));

	while ($reg=mysqli_fetch_array($registro)) {
		if ($reg['cargo']=="Administracion"){
			echo "Al ser administrador usted puede modificar los datos de los demas usuarios"."<br>";
			echo "Click aqui para modificar datos de los demas usuarios <br>";
			echo "<input type=\"reset\" value=\"Modificar\" onclick=\"window.location.href='modificar.php'\">";}
	}
	
?>

</div>
</body>
</html>


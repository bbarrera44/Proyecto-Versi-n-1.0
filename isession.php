<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_COOKIE['usuarioo'])) {
		echo "No tiene los permisos para poder ingresar a este sitio";
		echo "<input type=\"reset\" value=\"Inicio\" onclick=\"window.location.href='index.php'\">";
	}
	else{
		echo "Por favor debe iniciar session para poder ingresar a este sitio";
		echo "<input type=\"reset\" value=\"Iniciar Session\" onclick=\"window.location.href='login.php'\">";
	}
	?>
</body>
</html>
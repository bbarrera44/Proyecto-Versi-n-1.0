<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css_de_recuperarsucontraseña.css">
</head>

<body>
<?php include('menu.php');?>
<div class="form-area">
<h2 class="formulario__titulo" style="color:#FFF;"><b>Recuperar Contraseña</b><br />
<h5 class="fin">Para recuperar su contraseña porfavor dijite el correo con la que creo su usuario.</h5></h2>
<h5 class="fin">Solo se recibe @gmail.com (Temporal).</h5></h2>
<hr color="#999999">
<br />
<br />

<form action="recuperar_.php" method="post">
<p>Correo</p>
<input type="text" name="correo" placeholder="Correo" required="@">
<br />
<br />
<br />
  <input type="reset" value="Atras" class="submit" onclick="javascript:window.history.back();">
  <input type="reset" value="Limpiar" onclick="location.reload()">
  <input type="submit" value="Finalizar">
  

</form>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
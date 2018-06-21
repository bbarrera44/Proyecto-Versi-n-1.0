<?php
if (empty($_COOKIE['usuarioo'])) {
	header("location: isession.php");}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css_de_consultar.css">
</head>

<body>
<?php include('menu.php');?>
<div class="form-area">
<h2 class="formulario__titulo" style="color:#FFF;"><b>Consultar</b><br />
<h5 class="fin">Dijie el numero de documento para ver los datos del aprendiz sena</h5></h2>
<hr color="#999999">
<br />

<form action="consultar_.php" method="post">
<p>Numero de Documento</p>
<input type="text" name="n_documento" placeholder="Numero de documento">
<br />
<br />
<br />
  <input type="submit" value="Atras" class="submit" onclick="javascript:window.history.back();">
  <input type="reset" value="Ingresar Aprendiz" onclick="window.location.href='ingresar_aprendiz.php'">
  <input type="submit" value="Finalizar">
  

</form>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
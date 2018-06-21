<?php 
if (empty($_COOKIE['usuarioo'])) {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="img/logo.png" />
	<title>SABAJ</title>
    <link rel="stylesheet" type="text/css" href="css_actualizar.css">
</head>
<body>
<?php include('menu.php'); ?>
<div class="login-box">
<p><h1><b>Perfecto</b></h1></p>
<center><p>Los datos se actualizaron correctamente</p></center><hr color="#CCCCCC">
<br>
	 <center><input type="submit" value="Inicio" onclick="window.location.href='index.php'">
</p>
</div>
</div>
</body>
</html>
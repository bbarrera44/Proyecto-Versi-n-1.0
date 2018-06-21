<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css_login.css">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php include('menu.php') ?>
<br />



<div class="login-box">
<img src="avatar.png" class="avatar">
<?php
    if (isset($_COOKIE['incorrecto'])){
        echo "<center><p style='color:red;'>".$_COOKIE['incorrecto']."</p></center>";}
        setcookie("incorrecto","",time()+1000,"/");
  ?>
<h1>Iniciar Sesion</h1>

<form action="logiin.php" method="post">
<p>Usuario</p>

<input type="text" name="i_usuario" placeholder="Ingrese su usuario">

<p>Contraseña</p>
<input type="password" name="i_contrasena" placeholder="Ingrese su contraseña">
<input type="submit" value="Iniciar Sesion">
<br>
<center>
<a href="recuperarcontrasena.php">¡Has olvidado tu contraseña?</a><br>
<a href="registro.php">Crear cuenta</a>
</center>

</form>






<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
if (empty($_COOKIE['usuarioo'])) {
  header("location: isession.php");
}
  $conexion=mysqli_connect("localhost","root","","proyecto") or die(mysqli_error($conexion));

  $registro=mysqli_query($conexion,"select nombre_usuario,cargo from usuario where nombre_usuario='$_COOKIE[usuarioo]'") or die(mysqli_error($conexion));

  while($reg=mysqli_fetch_array($registro)){
    if (($reg['cargo']=="Administracion") or ($reg['cargo']=="Apoyo_de_administracion")) {
      
    }
  else{
    header("location: isession.php");
  }

    }
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="estilo_formulario.css">
</head>

<body>
<?php include('menu.php');?>
<div class="form-area">
<h2 class="formulario__titulo" style="color:#FFF;"><b>Retiro voluntario</b><br />
<h5 class="fin">Por favor llene las casillas con los datos del que va a desertar.</h5></h2>
<hr color="#999999">
<br />
<br />
<br />

<form action="retirovoluntario_.php" method="post">
<p>Ficha de Caracterizacion</p>
<input type="text" name="ficha_retiro" id="" placeholder="Ficha">
<p>Aprendiz</p>
<input type="text" name="aprendiz" id="" placeholder="Aprendiz">
<p>Numero de Documento</p>
<input type="text" name="documento" id="" placeholder="Documento">
<p>Fecha Solicitud</p>
<input type="text" name="fecha_retiro" id="" placeholder="AAAAMMDD">
<p>Motivo Solicitud</p>
<br />
<textarea name="solicitud" placeholder="Motivo"></textarea>
<p>Descripcion</p>
<br />
<textarea name="descripcion" ></textarea>
<br />
<br />
<br />
  <input type="submit" value="Atras" class="submit"  formaction="javascript:window.history.go(-1);">
  <input type="reset" value="Limpiar" onclick="location.reload()" >
  <input type="submit" value="Finalizar">
  

</form>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
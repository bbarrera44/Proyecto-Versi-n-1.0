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
<br />
<br />
<br />
<div class="form-area" >
<h2 class="formulario__titulo" style="color:#FFF;"><b>Deserciones</b><br />
<h5 class="fin">Por favor llene las casillas con los datos del aprendiz para realizar la desercion.</h5></h2>
<hr color="#999999">
<br />
<br />
<br />

<form action="desercion_.php" method="">
<p>Ficha de Caracterizacion</p>
<input type="text" name="ficha" placeholder="Ficha">
<p>Aprendiz</p>
<input type="text" name="aprendiz" placeholder="Aprendiz">
<p>Numero de Documento</p>
<input type="text" name="documento" placeholder="Numero de documento">
<p>Fecha Solicitud</p>
<input type="text" name="fecha_desercion" placeholder="AAAAMMDD">
<p>Motivo Solicitud</p>
<br />
<textarea name="solicitud" placeholder="Motivo"></textarea>
<p>Descripcion</p>
<br />
<textarea name="descripcion" placeholder=""></textarea>
<br />
<br />
<br />
  <input type="reset" value="Atras" class="submit" formaction="javascript:window.history.back();">
  <input type="reset" value="Limpiar" onclick="location.reload()">
  <input type="submit" value="Finalizar">
  

</form>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
<?php 
if (empty($_COOKIE['usuarioo'])) {
  header("location: index.php");
}
?>
<?php include ('menu.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="icon" href="logo.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SABAJ</title>
	<link rel="stylesheet" type="text/css" href="css_de_consultar.css_">
</head>
<body>
<?php
$col=0;
	$conexion=mysqli_connect("localhost","root","","proyecto") or die (mysqli_error($conexion));

	$registro=mysqli_query($conexion,"select * from aprendices inner join fichas on aprendices.ficha=fichas.ficha where documento='$_POST[n_documento]'") or die (mysqli_error($conexion));

	if ($reg=mysqli_fetch_array($registro)){
	?><div class="login-box" ><br /><br />
<h1>Informacion del aprendiz</h1><hr width="90%" color="#FFFFFF" ><br /><br />
	<table border="0" align="center" width="100%">
		<tr>
			<td><h2>Nombres del aprendiz:<br><center><br /><div class="nom"><?php echo $reg['nombres_aprendiz']; setcookie("nombres_aprendiz",$reg['nombres_aprendiz'],time()+(60*60),"/"); ?></div></center></h2><hr width="80%" color="#ffffff"></td>
			<td><h2>Apellidos del aprendiz:<br><center><br /><div class="nom"> <?php echo $reg['apellidos_aprendiz']; setcookie("apellidos_aprendiz",$reg['apellidos_aprendiz'],time()+(60*60),"/"); ?></div></center></h2><hr width="80%" color="#ffffff"></td>
		</tr>
		<tr>
			<td><h2>Documento del aprendiz<br><center><br /><div class="nom"><?php echo $reg['documento']; setcookie("documento",$reg['documento'],time()+(60*60),"/"); ?></div></center></h2><hr width="80%" color="#ffffff"></td>
			<td><h2>Telefono(s) del aprendiz:<br><center> <br /><div class="nom"><?php echo $reg['tel_aprendiz']; setcookie("tel_aprendiz",$reg['tel_aprendiz'],time()+(60*60),"/"); ?></div></center></h2><hr width="80%" color="#ffffff"></td>
		</tr>
		<tr>
			<td><h2>Celular del aprendiz:<br><center><br /><div class="nom"> <?php echo $reg['cel_aprendiz']; setcookie("cel_aprendiz",$reg['cel_aprendiz'],time()+(60*60),"/"); ?></div></center></h2><hr width="80%" color="#ffffff"></td>
			<td> <h2>Ficha:<br><center><br /><div class="nom"><?php echo $reg['ficha']; ?></div></center></h2><hr width="80%" color="#ffffff"></td>
		</tr>
		<tr>
			<td><h2>Programa de formacion:<br><center><br /> <div class="nom"><?php echo $reg['n_programa']; setcookie("n_programa",$reg['n_programa'],time()+(60*60),"/"); ?></div></center></h2><hr width="80%" color="#ffffff"></td>
			<td><h2>Estado del aprendiz:<br><center><br /> <div class="nom">
				<?php 

					$registro=mysqli_query($conexion,"select * from aplazamientos inner join aprendices on aplazamientos.n_documento=aprendices.documento where aprendices.documento='$_POST[n_documento]'") or die (mysqli_error($conexion));
					if ($reg=mysqli_fetch_array($registro)){
						echo "Aplazado";
						$col=$col+1;
						setcookie("estado","Aplazado",time()+(60*60),"/");
					}
					$registro=mysqli_query($conexion,"select * from deserciones inner join aprendices on deserciones.n_documento=aprendices.documento where aprendices.documento='$_POST[n_documento]'") or die (mysqli_error($conexion));
					if ($reg=mysqli_fetch_array($registro)){
						echo "Desertado";
						$col=$col+1;
						setcookie("estado","Desertado",time()+(60*60),"/");
					}
					$registro=mysqli_query($conexion,"select * from reingreso inner join aprendices on reingreso.documento=aprendices.documento where aprendices.documento='$_POST[n_documento]'") or die (mysqli_error($conexion));
					if ($reg=mysqli_fetch_array($registro)){
						echo "En proceso de reingreso";
						$col=$col+1;
						setcookie("estado","En proceso de reingreso",time()+(60*60),"/");
					}
					$registro=mysqli_query($conexion,"select * from retirovoluntario inner join aprendices on retirovoluntario.documento=aprendices.documento where aprendices.documento='$_POST[n_documento]'") or die (mysqli_error($conexion));
					if ($reg=mysqli_fetch_array($registro)){
						echo "Retirado";
						$col=$col+1;
						setcookie("estado","Retirado",time()+(60*60),"/");
					}

					if ($col==0){
						echo "En formacion";
						setcookie("estado","En formacion",time()+(60*60),"/");
					}
				?>
               
			</div></center></h2><hr width="80%" color="#ffffff"></td>
            </div>
		</tr> 
	</table><center><br>
   <input type="button" value="Nueva consulta" class="submit" onClick="window.location.href='consultar.php'"/>
   <?php
   	$registro=mysqli_query($conexion,"select cargo from usuario where nombre_usuario='$_COOKIE[usuarioo]'") or die (mysqli_error($conexion));

   	while ($reg=mysqli_fetch_array($registro)) {
   		
   	if (($reg['cargo']=="Administracion") or ($reg['cargo']=="Apoyo de administracion")) {
   		echo "<input type=\"button\" value=\"Modificar Informacion\" class=\"submit\" onClick=\"window.location.href='modificar_apren.php'\">";
   	}
   }
   ?>
<input type="button" value="Finalizar" class="submit" onClick="window.location.href='index.php'"/></center>
<?php

	}
	else{
?>
		<div class="sino">
        <h1>Informacion del aprendiz</h1><hr width="80%" color="#FFFFFF" ><br /><br />
		<h2>El aprendiz no se encuentra registrado en la base de datos<br><center><br />
		
        <input type="button" value="Nueva consulta" class="submit" onClick="window.location.href='consultar.php'"/>
		<input type="button" value="Finalizar" class="submit" onClick="window.location.href='index.php'"/></div>
<?php
	}
	mysqli_close($conexion);
?><br /><br><br><br>
<br><br></body>
</html>
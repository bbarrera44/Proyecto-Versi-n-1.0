
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="estilomenu.css">

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(window).on('scroll', function(){
	if($(window).scrollTop()){
		$('nav').addClass('black');
		}
		else
		{
			$('nav').removeClass('black');
			}
    })
	
	
</script>
<script>
$(document).ready(function(){
		$(".menu h3").click(function(){
			$(".nav ul li").toggleClass("active");
			
			});
    });
</script>
</head>

<body>

<div class="responsive-bar">
<div class="logo">
  <img src="logo.png">
</div>

<div class="menu">
  <h3>Menu</h3>
 </div>
</div>



<nav>

	<div class="logo">
		<a href="index.php"><img src="logo.png" title="Ir al inicio"></a>
	</div>

	<ul>
<?php
	if(isset($_COOKIE['usuarioo'])){
		echo "<li><a href=\"usuario.php\" class=\"active\">".$_COOKIE['usuarioo']."</a></li>";
		echo "<li><a href=\"index.php\"class=\"active\">Inicio</a></li>";}
	else{
		echo "<li><a href=\"index.php\"class=\"active\">Inicio</a></li>";
	}
?>
<?php
	if(isset($_COOKIE['usuarioo'])){
		$conexion=mysqli_connect("localhost","root","","proyecto") or die(mysqli_error($conexion));
	
		$registro=mysqli_query($conexion,"select * from usuario where nombre_usuario='$_COOKIE[usuarioo]'") or die (mysqli_error($conexion));

		while ($reg=mysqli_fetch_array($registro)) {
			if (($reg['cargo']=="Administracion") or ($reg['cargo']=="Apoyo_de_administracion")) {
				echo "<li><a href=\"consultar.php\">Aprendices</a></li>";
				echo "<li><a href=\"deserciones.php\">Desercion</a></li>";
				echo "<li><a href=\"aplazamiento.php\">Aplazamiento</a></li>";
				echo "<li><a href=\"reingreso.php\">Reingreso</a></li>";
				echo "<li><a href=\"retirovoluntario.php\">Retiro voluntario</a></li>";
			}
			else{
				echo "<li><a href=\"consultar.php\">Aprendices</a></li>";

			}

		}
	mysqli_close($conexion);	
}
?>
<?php
	if (isset($_COOKIE['usuarioo'])) {
		echo "<li><a href=\"cerrarsesion.php\" class=\"active\">"."Cerrar Sesion"."</a></li>";}
	else{
		echo"<li><a  href=\"login.php\" class=\"active\">Iniciar session</a></li>";
		echo"<li><a  href=\"registro.php\" class=\"active\">Crear cuenta</a></li>";
	}
?>
	</ul>

</nav>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

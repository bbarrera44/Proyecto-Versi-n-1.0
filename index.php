<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="logo.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
<title>SABAJ</title>
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
		$(".menu h4").click(function(){
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
  <h4>Menu</h4>
 </div>
</div>



<?php include('menu.php'); ?>


<?php include('slider.php'); ?>
<section class="sec2">
<br />
<br />
<br />
<h1><b><center>SABAJ<br /> NOVEDADES</center></b></h1>

<p><h3><center>Pagina web desarrollada para la optimizacion de cada<br /> una de las novedades, con la intencion de agilizar cada<br /> una de las novedades que se presentan en en la Sede Colombia.<br>

<br>
<br>
<h1><b><center>SABAJ<br />Alcance</center></b></h1>
<br>
<br>
El sistema contará con los roles de administrador, apoyo de administración,<br>bienestar e instructor, con los cuales estos podrán gestionar <br>las novedades de los aprendices.



</center></h3></p>
</section>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
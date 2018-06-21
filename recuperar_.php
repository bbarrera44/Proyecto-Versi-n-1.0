<?php 
$conexion=mysqli_connect("localhost","root","","proyecto") or die (mysqli_error($conexion));

$registro=mysqli_query($conexion,"select correo,contrasena from usuario where correo='$_POST[correo]'") or die (mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registro)) {

	require("class.phpmailer.php");
	require("class.smtp.php");
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com"; 
$mail->SMTPAuth = true;
$mail->Port = 587; 

$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "sebasena995@gmail.com"; 
$mail->Password = "yAm3Ay1v"; 
$mail->setFrom = "sebasena995@gmail.com"; 
$mail->FromName = "Administrador"; 
$mail->AddAddress($_POST['correo']);  
$mail->IsHTML(true);  
$mail->Subject = "Recuperacion de correo"; 
$body = "Recuperacion de contraseña";
$body = "Su contraseña es ".$reg['contrasena']; 
$mail->Body = $body; 
if($mail->Send()){
 echo 'El correo fue enviado'; }

else{ 
	echo 'Hubo un problema al enviar el correo '; 
echo $mail->ErrorInfo;} 
}
mysqli_close($conexion);
?>
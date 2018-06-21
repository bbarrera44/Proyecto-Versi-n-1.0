<link rel="stylesheet" type="text/css" href="cl.css">
<?php include('menu.php');?>
<form action="registro_.php" class="formulario" method="post">

<h1 class="formulario__titulo"><b style="color:#000";>Datos de identificacion</b></h1>
<h4 class="fin" style="color:#000";>Para registrarse debe ingresar la informacion basica.</h4>
<hr></hr>
<br />


<br />
<input type="text" class="formulario__input" name="n_usuario" value="     <?php if(isset($_COOKIE['n_usuario'])) echo $_COOKIE['n_usuario'];?>" required>
<label for="" class="formulario__label">Nombre de usuario</label>
<br />
<input type="text" class="formulario__input" name="nombres" value="<?php if(isset($_COOKIE['nombres'])) echo $_COOKIE['nombres'];?>" required>
<label for="" class="formulario__label">Nombres</label>
<br />
<input type="text" class="formulario__input" name="apellidos" value="<?php if(isset($_COOKIE['apellidos'])) echo $_COOKIE['apellidos'];?>" required>
<label for="" class="formulario__label">Apellidos</label>
<br />
<input type="text" class="formulario__input" name="n_documento" value="<?php if(isset($_COOKIE['n_documento'])) echo $_COOKIE['n_documento'];?>" required>
<label for="" class="formulario__label">No. de documento</label>
<br />

<input type="password" class="formulario__input" name="con1" required>
<label for="" class="formulario__label">Contraseña</label>
<br />
<input type="password" class="formulario__input" name="con2" required>
<label for="" class="formulario__label">Confirme su contraseña</label>
<br />
<h3 class="da">Cargo</h3>
<select  name="cargo" class="formulario__input">
	<option value="Seleccione" selected="selected" >Seleccione</option>
	<option value="Instructor">Instructor</option>
	<option value="Bienestar">Bienestar</option>
	<option value="Administracion">Adminsitracion</option>
	<option value="Apoyo_de_administracion">Apoyo de administracion</option>
 </select>
<h3 class="da">Genero</h3>
<select name="genero" class="formulario__input">
	<option value="Seleccione" selected="selected">Seleccione</option>
	<option value="masculino">Masculino</option>
	<option value="femenino">Femenino</option>
</select>
<br />
<input type="text" class="formulario__input" name="direccion" value="<?php if(isset($_COOKIE['direccion'])) echo $_COOKIE['direccion'];?>" required>
<label for="" class="formulario__label">Direccion</label>
<br />
<input type="text" class="formulario__input" name="correo" value="<?php if(isset($_COOKIE['correo'])) echo $_COOKIE['correo'];?>" required>
<label for="" class="formulario__label">Correo electronico</label>
<br />
<input type="text" autocomplete="off" class="formulario__input" name="cocorreo" value="<?php if(isset($_COOKIE['cocorreo'])) echo $_COOKIE['cocorreo'];?>" required>
<label for="" class="formulario__label">Confirme su correo</label>
<br />
<input type="text" class="formulario__input" name="telefono" value="<?php if(isset($_COOKIE['telefono'])) echo $_COOKIE['telefono'];?>" required>
<label for="" class="formulario__label">Telefono</label>
<br />
<input type="text" class="formulario__input" name="celular" value="<?php if(isset($_COOKIE['celular'])) echo $_COOKIE['celular'];?>" required>
<label for="" class="formulario__label">Celular</label>
<br />





<input type="reset" value="Atras" class="submit" onclick="javascript:window.history.back();">
<input type="reset" value="Limpiar" onclick="location.reload()">
<input type="submit" value="Finalizar">


</form>

<script src="form.js"></script>

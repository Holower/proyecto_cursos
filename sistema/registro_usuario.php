<?php
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Registro Usuario</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		<div class="form_register">
			<h1>Registro de Usuario</h1>
      <hr>
			<div class="alert"></div>

			<form class="" action="index.html" method="post">
				<label for="codigo">Codigo</label>
				<input type="text" name="codigo" id="codigo" placeholder="Ingrese codigo">
        <label for="password">Contraseña</label>
				<input type="password" name="password" id="contraseña" placeholder="Ingrese Contraseña">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" id="apellido" placeholder="ingrese apellido">
        <label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Correo electrónico">
        <label for="tipousuario">Tipo de usuario</label>
        <select name="rol" id="rol">
          <option value="1">Administrador</option>
          <option value="2">Docente</option>
          <option value="3">Estudiante</option>
        </select>
        <input type="submit" value="Crear Usuario" class="btn_save">
			</form>
		</div>
	</section>
	<?php include "includes/footer.php"; ?>
</body>
</html>

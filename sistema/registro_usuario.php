<?php
if (!empty($_POST)) {
  $alert='';
  if (empty($_POST['codigo_usuario']) || empty($_POST['contraseña']) || empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['correo']) || empty($_POST['id_rol']))
  {
    $alert='<p class"msg_Error">todos los campos son obligatorios</p>';
  }else {
    include "../conection.php";

    $codigo_usuario = $_POST['codigo_usuario'];
    $contraseña = $_POST['contraseña'];
    $id_rol = $_POST['id_rol'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

    $query=mysqli_query($conn, "SELECT * FROM usuario WHERE codigo='$codigo_usuario' OR correo = '$correo'");
    $result = mysqli_fetch_array($query);
    if ($result>0) {
      $alert = '<p class="msg_Error">El codigo o el correo ya existe</p>';
    }else {
      $query_insert = mysqli_query($conn, "INSERT INTO usuario(codigo,contraseña,id_rol,nombre,apellido,correo) VALUES($codigo_usuario,$contraseña,$id_rol,$nombre,$apellido,$correo)");
    /*  if ($id_rol==1) {
        $query_insert2 = mysqli_query($conn, "INSERT INTO administrador(codigo) VALUES($codigo)");
      }elseif ($id_rol==2) {
        $query_insert2 = mysqli_query($conn, "INSERT INTO docente(codigo) VALUES($codigo)");
      }else {
        $query_insert2 = mysqli_query($conn, "INSERT INTO estudiante(codigo) VALUES($codigo)");
      }*/
      if ($query_insert) {
        $alert='<p class="msg_Save">Usuario creado correctamente.</p>';
      }else {
        $alert='<p class="msg_Error">Error al crear al Usuario.</p>';
      }
      }
    }
}
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
			<div class="alert"><?php echo isset($alert) ? $alert:''; ?></div>

			<form  action="" method="post">
				<label for="codigo_usuario">Codigo</label>
				<input type="text" name="codigo_usuario" id="codigo_usuario" placeholder="Ingrese codigo">
        <label for="password">Contraseña</label>
				<input type="password" name="contraseña" id="contraseña" placeholder="Ingrese Contraseña">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellido" id="apellido" placeholder="ingrese apellido">
        <label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Correo electrónico">
        <label for="rol">Tipo de usuario</label>
        <select name="rol" id="id_rol">
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

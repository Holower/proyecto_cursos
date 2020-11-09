<?php
$alert = '';
if (!empty($_POST))
{
  echo $alert="le dio click en log in";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> <!--idioma español-->
	<title>Cursos de profundización</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="icon/png" href="https://avatars3.githubusercontent.com/u/23146203?s=460&u=a133e2cd19a0b7f37e3e267dea29cbdf3b5ce172&v=4">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<?php require 'partials/header.php' ?>
	<div>
		<img src="img/logo_vertical.png">
	</div>
	<div>
		<h2>Login</h2>
		<!-- Login Form -->
		<form action="" method="post">
			<input type="text" id="login" name="email" placeholder="Enter your email">
			<input type="password" id="password" name="password" placeholder="Enter your password">
			<input type="submit" value="Log In">
		</form>
	</div>
</body>
</html>

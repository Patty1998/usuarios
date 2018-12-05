<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/registrar.css">
</head>
<body>
		<form action="guardar.php" method="POST">
			<br>
			Nombre: <input type="text" REQUIRED name="nombre" placeholder="Nombre"><br/><br/>
			Apellido: <input type="text" REQUIRED name="apellido" placeholder="Apellido"><br/><br/>
			Correo:<input type="text" REQUIRED name="correo" placeholder="Correo"><br/><br/>
			Celular:<input type="text" REQUIRED name="celular" placeholder="Celular"><br/><br/>
			Dni: <input type="text" REQUIRED name="dni" placeholder="Documento de Identidad"><br/><br/>
			Usuario:<input type="text" REQUIRED name="usuario" placeholder="Usuario"><br/><br/>
			Password:<input type="text" REQUIRED name="password" placeholder="Contraseña"><br/><br/>
			<input type="submit" value="Aceptar">
			<br>
		</form>
</body>
</html>
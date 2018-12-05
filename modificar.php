<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modificar Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/registrar.css">
</head>
<body>
		<?php
				$id= $_REQUEST['id'];
				include("conexion.php");
				$query="SELECT * FROM usuarios WHERE id='$id'";
				$resultado =$conexion->query($query);
				$row=$resultado->fetch_assoc();
		?>
		<form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
			<br/><br/><br/>
			Nombre: <input type="text" REQUIRED name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'];?>"/><br/><br/>
			Apellido: <input type="text" REQUIRED name="apellido" placeholder="Apellido" value="<?php echo $row['apellido'];?>"/><br/><br/>
			Correo: <input type="text" REQUIRED name="correo" placeholder="Correo" value="<?php echo $row['correo'];?>"/><br/><br/>
			Celular: <input type="text" REQUIRED name="celular" placeholder="Celular" value="<?php echo $row['celular'];?>"/><br/><br/>
			Dni: <input type="text" REQUIRED name="dni" placeholder="Documento de identidad" value="<?php echo $row['dni'];?>"/><br/><br/>
			Usuario: <input type="text" REQUIRED name="usuario" placeholder="Usuario" value="<?php echo $row['usuario'];?>"/><br/><br/>
			Contraseña:<input type="text" REQUIRED name="password" placeholder="Contraseña" value="<?php echo $row['password'];?>"/><br/><br/>
			<input type="submit" value="Aceptar">
		</form>
</body>
</html>
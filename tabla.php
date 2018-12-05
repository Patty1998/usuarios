<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/tabla.css">
</head>
<body>
	<center>
		<table  border="3">
			<thead>
				<tr>
					<th colspan="1"><a href="registrar.php">Nuevo</th>
					<th colspan="7">Lista de Usuarios</th>	
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Correo</td>
					<td>Celular</td>
					<td>Dni</td>
					<td>Usuario</td>
					<td>Password</td>
					<td colspan="2">Operaciones</td>
				</tr>
				
				<?php
					include("conexion.php");
					$query="SELECT * FROM usuarios";
					$resultado =$conexion->query($query);
					while ($row=$resultado->fetch_assoc()) {
				?>

					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['apellido']; ?></td>
						<td><?php echo $row['correo']; ?></td>
						<td><?php echo $row['celular']; ?></td>
						<td><?php echo $row['dni']; ?></td>
						<td><?php echo $row['usuario']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><a href="modificar.php?id=<?php echo $row['id']; ?>"> Modificar</a></td>
						<td><a href="index.php?id=<?php echo $row['id']; ?>"> Eliminar</a></td>
					</tr>

				<?php
					}
				?>

			</tbody>
		</table>
	</center>
</body>
</html>
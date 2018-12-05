<?php

include("conexion.php");
	$id=$_REQUEST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$celular = $_POST['celular'];
	$dni = $_POST['dni'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$query ="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', celular='$celular', dni='$dni', usuario='$usuario', password='$password' WHERE id='$id' ";
	$resultado = $conexion->query($query);

	if($resultado){
		header("location: tabla.php");
	}
	else{
		echo "Insercion fallida";
	}


?>
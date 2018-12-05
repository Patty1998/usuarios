<?php

include("conexion.php");

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$celular = $_POST['celular'];
	$dni = $_POST['dni'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$query ="INSERT INTO usuarios(nombre,apellido,correo,celular,dni,usuario,password) VALUES('$nombre','$apellido','$correo','$celular','$dni','$usuario','$password')";
	$resultado = $conexion->query($query);

	if($resultado){
		header("location: tabla.php");
	}
	else{
		echo "Insercion fallida";
	}


?>
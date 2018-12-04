<?php
//Obtener datos
$usuario=$_POST['usuario'];
$password=$_POST['password'];

//Conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","almacen1");
$consulta="SELECT*FROM usuarios WHERE usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
	 header("location:tabla.php");
}
else{
    echo"<script>alert('Error! El usuario o Contraseña es incorrecto'); window.location.href=\"index.html\"</script>";
    }

//liberar datos porque consume memoria
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
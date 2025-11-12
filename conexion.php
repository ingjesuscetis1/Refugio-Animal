<?php
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "adopcion";

$conexion = mysqli_connect ($servidor, $usuario, "")or die ("Error en el servidor en la base de datos");

$db = mysqli_select_db($conexion, $basededatos)or die("Error al conectarse a la base de Datos");

$nombre==$_POST['nombre'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$numero=$_POST['numero'];
$talla=$_POST['talla'];


$sql="INSERT INTO registro VALUES('$nombre','$correo','$direccion','$numero','$talla')";
$ejecutar=mysqli_query($conexion, $sql); //se manda llamar la conexion y sql donde se encuentran los parametros

if(!$ejecutar){
echo"Huvo un error";
}else{
echo"<a href='regresar.html'> volver</a>";
}
?>
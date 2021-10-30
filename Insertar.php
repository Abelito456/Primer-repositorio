<?php
include("conexion.php");

if (isset($_POST['nombre'])) {
$nombre = $_POST['nombre'];
} else {
$nombre = "";
}
if (isset($_POST['apellido'])) {
$apellido = $_POST['apellido'];
} else {
$apellido = "";
}
if (isset($_POST['cargo'])) {
$cargo = $_POST['cargo'];
} else {
$cargo = "";
}
if (isset($_POST['fecha'])) {
$fecha = $_POST['fecha'];
} else {
$fecha = "";
}
if (isset($_POST['tipo'])) {
$tipo  = $_POST['tipo'];
} else {
$tipo = "";
}
if (isset($_POST['caso'])) {
$caso = $_POST['caso'];
} else {
$caso = "";
}

$insertar = "INSERT INTO empleados(nombre, apellido, cargo, fecha, tipo, caso) VALUES ('$nombre','$apellido','$cargo','$fecha','$tipo','$caso')";

$query = mysqli_query($conexion, $insertar);

if ($query) {
		header("Location: Datos.php");
	}else{
                header("Location: Datos.php");

	}
   


?>


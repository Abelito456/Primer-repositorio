<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $borrar = "DELETE FROM empleados WHERE id = $id";
    $query = mysqli_query($conexion, $borrar);
    if ($query) {
   
    header("Location: Datos.php");
    }else{
   
    header("Location: Datos.php");
    }  
    }

?>
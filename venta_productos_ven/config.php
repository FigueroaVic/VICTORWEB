<?php 
$servidor = "localhost";
$base_datos = "ventas";
$usuario = "root";
$clave = "";
$conn = new mysqli($servidor, $usuario, $clave , $base_datos);
    if (!$conn)
    {
        die("Conexion Fallida:" . mysqli_connect_error());
    }
?>
<?php
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ventas";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $cod_producto = $_POST['cod_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $Categoria = $_POST['categoria'];
    $fecha_elaboracion = $_POST['fecha_elaboracion'];
    $fecha_caducidad = $_POST['fecha_caducidad'];

    $sql = "INSERT INTO productos (cod_producto, nom_producto, precio, cantidad, cod_categoria, fecha_elab, fecha_cad)
    VALUES ('$cod_producto', '$nombre_producto', '$precio', '$cantidad', '$Categoria', '$fecha_elaboracion', '$fecha_caducidad')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
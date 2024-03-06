<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de productos</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <?php
    include ("config.php");
    ?>
</head>
<body>
    <h1>Tabla de consultas</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                    <td>Cod.Producto</td>
                    <td>Producto</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>Categoria</td>
                    <td>Fecha Elaboracion</td>
                    <td>Fecha Caducidad</td>
            
            <?php
            $consulta = "SELECT * FROM vista_productos";
            if ($resultado = $conn->query($consulta))
            {
                while ($filas = $resultado->fetch_assoc()){
                    $cod_producto = $filas["cod_producto"];
                    $nombre_producto = $filas["nom_producto"];
                    $precio = $filas["precio"];
                    $cantidad = $filas["cantidad"];
                    $categoria= $filas["categoria"];
                    $fecha_elaboracion = $filas["fecha_elab"];
                    $fecha_caducidad = $filas["fecha_cad"];
                        echo '<tr> 
                        <td>' .$cod_producto.'</td>
                        <td>' .$nombre_producto.'</td>
                        <td>' .$precio.'</td>
                        <td>' .$cantidad.'</td>
                        <td>' .$categoria.'</td>
                        <td>' .$fecha_elaboracion.'</td>
                        <td>' .$fecha_caducidad.'</td>
                    </tr>';
                }
            }
            $resultado->free();
            mysqli_close($conn);  
            ?>
        </table>
        </div>
    </div>
</div>
</body>
</html>
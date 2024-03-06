<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>--Registro--</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="menu">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Información</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </div>


    <header><h1>Registro de Productos </h1></header>

  <div class="container">
    <form method="POST" action="guardar_productos.php">
      <div class="row">
        <div class="col-12">
          <div class="col-md-3">
            <label for="cod_producto" class="form-label">Código de Producto</label>
            <input type="text" class="form-control" id="cod_producto" name="cod_producto">
          </div>
          <div class="col-md-3">
            <label for="nombre_producto" class="form-label">Nombre de Producto</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto">
          </div>
          <div class="col-md-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="double" class="form-control" id="precio" name="precio">
          </div>
          <div class="col-md-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad">
          </div>
          <div class="col-md-3">
            <label for="categoria" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria">
          </div>
          <div class="col-md-3">
            <label for="fecha_elaboracion" class="form-label">Fecha de Elaboración</label>
            <input type="date" class="form-control" id="fecha_elaboracion" name="fecha_elaboracion">
          </div>
          <div class="col-md-3">
            <label for="fecha_caducidad" class="form-label">Fecha de Caducidad</label>
            <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

  <header><h1>Autores: Figueroa Victor / Flores Alison </h1></header>
</body>
</html>

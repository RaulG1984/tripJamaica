<?php
	include 'coneccion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Trip Jamaica </title>
	<link rel="icon" href="jamaica_favicon.png" type="image/png">
</head>

<body>
	<div class="container mt-3 col-md-3">
        <h2 class="text-center">Registro de Datos </h2>
        <form action="procesar.php" method="POST">
            <label class="form-label" for="nombre">gasto:</label>
            <input type="hidden" id="accion" name="accion" value="agregar">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required><br>
            <label for="telefono">Monto:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required><br>
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required><br>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>



</body>
</html>


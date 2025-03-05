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
            <label class="form-label" for="gasto">gasto:</label>
            <input type="hidden" id="accion" name="accion" value="agregar">
            <input type="text" class="form-control" id="gasto" name="gasto" placeholder="ingresa tu gasto" required><br>
            <label for="monto">Monto:</label>
            <input type="text" class="form-control" id="monto" name="monto" placeholder="ingresa tu monto" required><br>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>



</body>
</html>



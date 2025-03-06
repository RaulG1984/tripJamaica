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

     <?php

        $query = "SELECT * FROM jamaica";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
    ?>
            <div class="container mt-3 table-responsive">
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>gasto</th>
                            <th>base</th>
                            <th>iva(21%)</th>
                            <th>monto</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
                $counter = '';
                while ($row = $result->fetch_assoc()) {
                    $counter++;
    ?>
                        <tr>
                            <td class="wrap"><?php echo $counter; ?></td>
                            <td class="wrap"><?php echo $row['gastos']; ?></td>
                            <td class="wrap"><?php echo $row['monto']-($row['monto']* 0.21); ?></td>
                            <td class="wrap"><?php echo $row['monto']* 0.21; ?></td>
                            <td class="wrap"><?php echo $row['monto']; ?></td>



                        </tr>
    <?php
                }
    ?>
                    </tbody>
                </table>
            </div>
    <?php
        }
        else {
    ?>

            <div class="container col-md-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">No hay Datos</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Bo se han enc...</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <img src="banner.jpg" class="img-fluid" alt="No Data">
            </div>
    <?php
        }
        $conn->close();
    ?>



</body>
</html>



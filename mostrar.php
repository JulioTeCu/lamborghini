<?php
include 'conexion.php';
$autos = "SELECT * FROM autos";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>MOSTRAR</title>
<meta name="viewport" content="width=device-width, user-scalable=no, 
initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="mostrar.css">
</head>
<body>
<h1>Tabla de datos</h1>

<form method="post" class="form-btn">
<div class="container-table">
    <div class="table__title">DATOS</div>
    <div class="table__header">No_SERIE</div>
    <div class="table__header">MODELO</div>
    <div class="table__header">MATRICULA</div>
    <div class="table__header">NO_INE</div>
    <?php $resultado = mysqli_query($conexion, $autos);
    while($row = mysqli_fetch_assoc($resultado)) { ?>
  
    <div class="table__item"><?php echo $row["noserie"]; ?></div>
    <div class="table__item"><?php echo $row["modelo"]; ?></div>
    <div class="table__item"><?php echo $row["matricula"]; ?></div>
    <div class="table__item"><?php echo $row["no_INE"]; ?></div>
    <?php } mysqli_free_result($resultado);?>
</div>
</form>
</body>
</html>
<?php
include ('conexion.php');

$id = $_POST['id']; 
$modelo = $_POST["modelo"];  
$matricula = $_POST["matricula"];  
$no_INE = $_POST["no_INE"];  

mysqli_query($conexion, "UPDATE autos SET modelo='$modelo' WHERE id=$id") 
or die ("Error al actualizar los datos");
mysqli_query($conexion, "UPDATE autos SET matricula='$matricula' WHERE id=$id") 
or die ("Error al actualizar los datos");
mysqli_query($conexion, "UPDATE autos SET no_INE='$no_INE' WHERE id=$id") 
or die ("Error al actualizar los datos");


mysqli_close($conexion);
echo '<script>
alert("Actualizado correctamente");
window.history.go(-1);
</script>';
?>
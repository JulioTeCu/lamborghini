<?php
include ('conexion.php');

$id = $_POST['id'];

mysqli_query($conexion,"DELETE FROM autos WHERE id = $id") or die ("Error al eliminar los datos");

mysqli_close($conexion);

echo '<script>
alert("Eliminado correctamente");
window.history.go(-1);
</script>';

?>
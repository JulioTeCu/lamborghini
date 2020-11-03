<?php
include 'conexion.php';
$noserie = $_POST["noserie"];  
$modelo = $_POST["modelo"];  
$matricula = $_POST["matricula"];  
$no_INE = $_POST["no_INE"];  

$insertar = "INSERT INTO autos(noserie, modelo, matricula, no_INE) 
VALUES ('$noserie', '$modelo', '$matricula', '$no_INE')";
$resultado = mysqli_query($conexion, $insertar);

$verificar_serie = mysqli_query($conexion, "SELECT * FROM autos WHERE noserie = '$noserie'");
if (mysqli_num_rows($verificar_serie) > 1){
    echo '<script>
        alert("Número de serie ya registrado");
        window.history.go(-1);
        </script>';
    exit;
}
$verificar_matricula = mysqli_query($conexion, "SELECT * FROM autos WHERE matricula = '$matricula'");
if (mysqli_num_rows($verificar_matricula) > 1){
    echo '<script>
    alert("La matricula ya está registrada");
    window.history.go(-1);
    </script>';
    exit;
}
if(!$resultado) {
    echo 'Error al registrarse';
} else {
    echo '<script>
    alert("Auto registrado con exito");
    window.history.go(-1);
    </script>';
}
mysqli_close($conexion);
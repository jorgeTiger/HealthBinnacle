<?php
$nombrePaciente = $_GET['nombrePaciente'];
$tipo = $_GET['tipo'];
$fechaNueva = $_GET['fechaNueva'];
$fecha = $_GET['fecha'];
$glucometria = $_GET['glucometria'];
$insulina = $_GET['insulina'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "UPDATE Diabetes SET tipo='$tipo', fecha='$fechaNueva', glucometria='$glucometria', insulina='$insulina' WHERE nombre_paciente='$nombrePaciente' AND fecha='$fecha'";
if(mysqli_query($conn,$sql)){
    echo "Actualizado correctamente";
}else{
    echo "Error al actualizar";
}
mysqli_close($conn);
?>
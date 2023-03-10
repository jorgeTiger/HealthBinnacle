<?php
$nombrePaciente = $_GET['nombrePaciente'];
$tipo = $_GET['tipo'];
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

$sql = "INSERT INTO Diabetes (nombre_paciente,tipo,fecha,glucometria,insulina) VALUES('$nombrePaciente','$tipo','$fecha','$glucometria','$insulina')";
if(mysqli_query($conn,$sql)){
    echo "Insercion correcta";
}else{
    echo "Error en la insercion";
}
mysqli_close($conn);
?>
<?php
$nombrePaciente = $_GET['nombrePaciente'];
$ultraFiltracion = $_GET['ultraFiltracion'];
$cantidadOrina = $_GET['cantidadOrina'];
$glucometria = $_GET['glucometria'];
$presionArterialSistolica = $_GET['presionArterialSistolica'];
$presionArterialDiastolica = $_GET['presionArterialDiastolica'];
$presionArterial = $presionArterialDiastolica + (($presionArterialSistolica - $presionArterialDiastolica) / 3);
$fecha = $_GET['fecha'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "INSERT INTO Insuficiencia_Renal (nombre_paciente,ultraFiltracion,cantidadOrina,glucometria,presionArterial,fecha_inicio) VALUES('$nombrePaciente','$ultraFiltracion','$cantidadOrina','$glucometria','$presionArterial','$fecha')";
if(mysqli_query($conn,$sql)){
    echo "Insercion correcta";
}else{
    echo "Error en la insercion";
}
mysqli_close($conn);
?>
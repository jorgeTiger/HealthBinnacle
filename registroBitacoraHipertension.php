<?php
$nombrePaciente = $_GET['nombrePaciente'];
$fecha = $_GET['fecha'];
$presionArterialSistolica = $_GET['presionArterialSistolica'];
$presionArterialDiastolica = $_GET['presionArterialDiastolica'];
$presionArterial = $presionArterialDiastolica + (($presionArterialSistolica - $presionArterialDiastolica) / 3);

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "INSERT INTO Hipertension_Arterial (nombre_paciente,fecha,presionArterial) VALUES('$nombrePaciente','$fecha','$presionArterial')";
if(mysqli_query($conn,$sql)){
    echo "Insercion correcta";
}else{
    echo "Error en la insercion";
}
mysqli_close($conn);
?>
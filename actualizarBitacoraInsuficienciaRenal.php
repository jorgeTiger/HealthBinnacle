<?php
$nombrePaciente = $_GET['nombrePaciente'];
$ultraFiltracion = $_GET['ultraFiltracion'];
$cantidadOrina = $_GET['cantidadOrina'];
$glucometria = $_GET['glucometria'];
$presionArterialSistolica = $_GET['presionArterialSistolica'];
$presionArterialDiastolica = $_GET['presionArterialDiastolica'];
$presionArterial = $presionArterialDiastolica + (($presionArterialSistolica - $presionArterialDiastolica) / 3);
$fecha = $_GET['fecha'];
$fechaNueva = $_GET['fechaNueva'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "UPDATE Insuficiencia_Renal SET ultraFiltracion='$ultraFiltracion', cantidadOrina='$cantidadOrina', glucometria='$glucometria', presionArterial='$presionArterial', fecha='$fechaNueva' WHERE nombre_paciente='$nombrePaciente' AND fecha='$fecha'";
if(mysqli_query($conn,$sql)){
    echo "Actualizado correctamente";
}else{
    echo "Error al actualizar";
}
mysqli_close($conn);
?>
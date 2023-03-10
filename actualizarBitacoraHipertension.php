<?php
$nombrePaciente = $_GET['nombrePaciente'];
$fechaNueva = $_GET['fechaNueva'];
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

$sql = "UPDATE Hipertension_Arterial SET fecha='$fechaNueva', presionArterial='$presionArterial' WHERE nombre_paciente='$nombrePaciente' AND fecha='$fecha'";
if(mysqli_query($conn,$sql)){
    echo "Actualizado correctamente";
}else{
    echo "Error al actualizar";
}
mysqli_close($conn);
?>
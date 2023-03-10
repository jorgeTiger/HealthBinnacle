<?php
$nombrePaciente = $_GET['nombrePaciente'];
$fecha = $_GET['fecha'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Hipertension_Arterial WHERE nombre_paciente='$nombrePaciente' AND fecha LIKE '$fecha%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<form style='margin-top:10; margin-left:400' action='actualizarBitacoraHipertension.php' method='GET'>
    <input type='hidden' id='nombrePaciente' value='".$row["nombre_paciente"]."' name='nombrePaciente'>
    <input type='hidden' value='".$row["fecha"]."' id='fecha' name='fecha'>
    Fecha: <input type='date' value='".$row["fecha"]."' id='fechaNueva' name='fechaNueva' style='margin-left:150; margin-top:10'>
    <br>
    Presion Arterial Sistolica: <input type='number' step='any' value='".$row["presionArterial"]."' id='presionArterialSistolica' name='presionArterialSistolica' style='margin-left:22'>
    <br>
    Presion Arterial Diastolica: <input type='number' step='any' value='' id='presionArterialDiastolica' name='presionArterialDiastolica' style='margin-left:10'>
    <br>
    <button type='submit' style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Enviar</button>
    <br>
    </form>";
  }
}else{
    echo "<p style='margin-left:400'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>
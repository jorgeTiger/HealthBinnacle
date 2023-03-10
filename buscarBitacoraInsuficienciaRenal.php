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

$sql = "SELECT * FROM Insuficiencia_Renal WHERE nombre_paciente='$nombrePaciente' AND fecha LIKE '$fecha%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<form style='margin-top:10; margin-left:400' action='actualizarBitacoraInsuficienciaRenal.php' method='GET'>
    <input type='hidden' id='nombrePaciente' value='".$row['nombre_paciente']."' name='nombrePaciente'>
    <input type='hidden' id='fecha' value='".$row["fecha"]."' name='fecha'>
    Ultra Filtracion (UF): <input type='number' step='any' value='".$row["ultraFiltracion"]."' id='ultraFiltracion' name='ultraFiltracion' style='margin-left:49'>
    <br>
    Cantidad Orina (en Litros): <input type='number' step='any' value='".$row["cantidadOrina"]."' id='cantidadOrina' name='cantidadOrina' style='margin-left:5'>
    <br>
    Glucometria: <input type='number' step='any' value='".$row["glucometria"]."' name='glucometria' id='glucometria' style='margin-left:102'>
    <br>
    Presion Arterial Sistolica: <input type='number' step='any' value='".$row["presionArterial"]."' id='presionArterialSistolica' name='presionArterialSistolica' style='margin-left:18'>
    <br>
    Presion Arterial Diastolica: <input type='number' step='any' id='presionArterialDiastolica' name='presionArterialDiastolica' style='margin-left:8'>
    <br>
    Fecha: <input type='date' id='fechaNueva' value='".$row["fecha"]."' name='fechaNueva' style='margin-left:146; margin-top:10'>
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
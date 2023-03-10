<?php
$nombrePaciente = $_GET['nombrePaciente'];

$server = 'localhost';
$user = 'glwcslew_mbds';
$passwordb = 'INNI21dbcucei/';
$dbname = 'glwcslew_mbds';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Insuficiencia_Renal WHERE nombre_paciente='$nombrePaciente'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
  echo "<table cellpadding=2 style='font-size: 10pt; margin-left:100; background-color:lightblue; text-align:center'><tr>
    <td width=\"10%\"><font face='Arial'><b>Ultra Filtracion</b></font></td>
    <td width=\"10%\"><font face='Arial'><b>Cantidad de Orina (en L)</b></font></td>
    <td width=\"10%\"><font face='Arial'><b>Glucometria</b></font></td>
    <td width=\"10%\"><font face='Arial'><b>Presion Arterial</b></font></td>
    <td width=\"10%\"><font face='Arial'><b>Fecha</b></font></td>
    </tr>";
  while($row = mysqli_fetch_assoc($result)){
    echo "<td width=\"12%\"><font face=\"Arial\">" . $row["ultraFiltracion"] . "</font></td>";
    echo "<td width=\"16%\"><font face=\"Arial\">" . $row["cantidadOrina"] . "</font></td>";
    echo "<td width=\"16%\"><font face=\"Arial\">" . $row["glucometria"] . "</font></td>";
    echo "<td width=\"16%\"><font face=\"Arial\">" . $row["presionArterial"] . "</font></td>";
    echo "<td width=\"12%\"><font face=\"Arial\">" . $row["fecha"] . "</font></td>"; 
  }
  echo "</table>";
}else{
    echo "<p style='margin-left:400'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>